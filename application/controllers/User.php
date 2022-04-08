<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->helper(array('text', 'url'));
        $this->load->model('usermodel');
    }
    public function index()
    {
        $data['list'] = $this->usermodel->get_user();
        
        // $data['nama'] = 'Lanjar Dwi Saputro';
        // $data['alamat'] = 'Boyolali';
        // $data['email'] = 'lanjar17@gmail.com';
        // $data['hobi'] = ['Membaca', 'Menabung', 'Sholat Sunah'];
        $this->load->view('user/user', $data);
    }

    public function detail($a)
    {
        $data['detail'] = $this->usermodel->get_detail($a);
        $this->load->view('user/detail_user', $data);
    }

    public function add()
    {
        $this->load->view('user/add_user');
    }

    public function insert()
    {
        $avatar = time() . "-" . $_FILES['avatar']['name'];
        $config = array(
            'upload_path' => "./assets/image/ava/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'file_name' => $avatar
        );
        // $rand = random_string('alnum', 15);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('profil');
        if ($this->usermodel->insert($this->input->post(), $avatar)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('user'));
        }
    }

    public function edit($a)
    {
        $data['detail'] = $this->usermodel->get_detail($a);
        $this->load->view('user/edit_user', $data);
    }

    public function update($id)
    {
        $avatar = $_FILES['avatar']['name'];
        $config = array(
            'upload_path' => "./assets/image/ava/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        );

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('avatar')) {
            $this->usermodel->update_avatar($avatar, $id, 1);
        }

        if ($this->usermodel->update($this->input->post(), $id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil diupdate');
            redirect(base_url('user'));
        }
        $this->load->view('user/edit_user');
    }

    public function delete($id)
    {
        if ($this->usermodel->delete($id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
            redirect(base_url('user'));
        }
    }
}
