<?php

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }

    public function index()
    {
        $data['title'] = 'Students Page';

        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'FormAdd Students';
        $data['jurusan'] = ['Teknik A', 'Teknik B', 'Teknik C', 'Teknik D'];

        $this->form_validation->set_rules('input-name', 'Name', 'required');
        $this->form_validation->set_rules('input-nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('input-email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('mahasiswa/addMahasiswa');
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->addMahasiswa();
            $this->session->set_flashdata('message', 'Added');
            redirect('mahasiswa');
        }
    }

    public function delete($id)
    {
        $this->Mahasiswa_model->deleteMahasiswa($id);
        $this->session->set_flashdata('message', 'Deleted');
        redirect('mahasiswa');
    }
    public function edit($id)
    {
        $data['title'] = 'Form Edit Students';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $data['jurusan'] = ['Teknik A', 'Teknik B', 'Teknik C', 'Teknik D'];

        $this->form_validation->set_rules('input-name', 'Name', 'required');
        $this->form_validation->set_rules('input-nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('input-email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('mahasiswa/editMahasiswa', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->editMahasiswa();
            $this->session->set_flashdata('message', 'Changed');
            redirect('mahasiswa');
        }
    }
}
