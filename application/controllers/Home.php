<?php

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');

    }
    public function index()
    {
        $data['judul'] = 'Input Data Mahasiswa';
        $this->load->view('template/header', $data);
        $this->load->view('input');
        $this->load->view('template/footer');


    }

}