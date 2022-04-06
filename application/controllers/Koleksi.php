<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Koleksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->helper(array('text', 'url'));
        $this->load->model('koleksimodel');
    }
    public function index()
    {
        $data['daftar'] = $this->koleksimodel->get_koleksi();

        // $data['nama'] = 'Lanjar Dwi Saputro';
        // $data['alamat'] = 'Boyolali';
        // $data['email'] = 'lanjar17@gmail.com';
        // $data['hobi'] = ['Membaca', 'Menabung', 'Sholat Sunah'];
        $this->load->view('koleksi/koleksi', $data);
    }
    public function detail($a)
    {
        $data['detail'] = $this->koleksimodel->get_detail($a);
        $this->load->view('koleksi/detail', $data);
    }

    public function add()
    {
        $this->load->view('koleksi/add');
    }

    public function insert()
    {
        $cover = $_FILES['cover']['name'];
        $config = array(
            'upload_path' => "./assets/image/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        );

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('cover');
        if ($this->koleksimodel->insert($this->input->post(), $cover)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('koleksi'));
        }
    }


    public function delete($id)
    {
        if ($this->koleksimodel->delete($id)){
            $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
            redirect(base_url('koleksi'));
        }
    }

    public function edit($a)
    {
        $data['detail'] = $this->koleksimodel->get_detail($a);
        $this->load->view('koleksi/edit', $data);
    }

    public function update($id)
    {
        $cover = $_FILES['cover']['name'];
        $config = array(
            'upload_path' => "./assets/image/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        );
        
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('cover')){
            $this->koleksimodel->update_cover($cover, $id, 1);
        }

        if ($this->koleksimodel->update($this->input->post(), $id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil diupdate');
            redirect(base_url('koleksi'));
        }
        $this->load->view('koleksi/update');
    }
}
