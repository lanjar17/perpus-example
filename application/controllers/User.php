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
        $profil = $_FILES['profil']['name'];
        $config = array(
            'upload_path' => "./assets/image/ava/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE
        );
        // $rand = random_string('alnum', 15);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('profil');
        if ($this->usermodel->insert($this->input->post(), $profil)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('user'));
        }
    }

    public function delete($id)
    {
        if ($this->usermodel->delete($id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
            redirect(base_url('user'));
        }
    }
}
