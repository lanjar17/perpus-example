<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dasboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'email', 'session'));
        $this->load->helper(array('text', 'url', 'cookie', 'string'));
        $this->load->model('usermodel');
        if ($this->session->userdata('nama') == '') {
            redirect(base_url('login'));
        }
    }

    public function index()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['alamat'] = $this->session->userdata('alamat');
        $data['email'] = $this->session->userdata('email');
        $data['hobi'] = ['Membaca', 'Menabung', 'Sholat Sunah'];
        $this->load->view('dasboard', $data);
    }

    public function about(){
        echo "turu dekkkkkkkkkkkkkkkk";
    }
}
