<?php

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');


    }
    public function index()
    {
        $data['judul'] = 'Input Data Mahasiswa';
        $this->load->view('Forminput', $data);
    }   
    public function proses()
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa' ,'required');
        $this->form_validation->set_rules('nis', 'NIS' ,'required');
        $this->form_validation->set_rules('kelas', 'Kelas' ,'required');
        $this->form_validation->set_rules('tggl', 'Tanggal Lahir' ,'required');
        $this->form_validation->set_rules('tmpt', 'Tempat Lahir' ,'required');
        $this->form_validation->set_rules('alamat', 'alamat' ,'required');
        $this->form_validation->set_rules('agama', 'Agama' ,'required');

        if ($this->form_validation->run() != true) {
            $this->load->view('forminput');
            } else {
           
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tggl' => $this->input->post('tggl'),
            'tmpt' => $this->input->post('tmpt'),
            'alamat' => $this->input->post('alamat'),
            'kelamin' => $this->input->post('kelamin'),
            'agama' => $this->input->post('agama')
        ];
        
        $this->load->view('Formoutput', $data);
            }
        }
 }