<?php

class Periksa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Periksa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {        
        $data['judul'] = 'Daftar Pemeriksaan Pasien';
        $data['periksa'] = $this->Periksa_model->getAllPeriksa();
        if( $this->input->post('keyword') ) {
            $data['periksa'] = $this->Periksa_model->cariDataPeriksa();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('periksa/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Pasien';
        $data['dokter'] = $this->Periksa_model->getAllDokter();
        $data['ruang'] = $this->Periksa_model->getAllRuang();
        
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kodedokter', 'Kode Dokter', 'required');
        $this->form_validation->set_rules('koderuang', 'Kode Ruang', 'required');
        $this->form_validation->set_rules('usia', 'Usia', 'required|numeric');

        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('periksa/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Periksa_model->tambahDataPeriksa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('index.php/periksa');
        }
    }


    public function hapus($id)
    {
        $this->Periksa_model->hapusDataPeriksa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('index.php/periksa');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Pasien';
        $data['periksa'] = $this->Periksa_model->getPeriksaById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('periksa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Pasien';
        $data['periksa'] = $this->Periksa_model->getPeriksaById($id);
        $data['dokter'] = $this->Periksa_model->getAllDokter();
        $data['ruang'] = $this->Periksa_model->getAllRuang();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kodedokter', 'Kode Dokter', 'required');
        $this->form_validation->set_rules('koderuang', 'Kode Ruang', 'required');
        $this->form_validation->set_rules('usia', 'Usia', 'required|numeric');

        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('periksa/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Periksa_model->ubahDataPeriksa();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('index.php/periksa');
        }
    }

    public function hitung(){
        $data['judul'] = 'Hitung Data Pasien';

        $this->load->view('templates/header', $data);
        $this->load->view('periksa/hitung', $data);
        $this->load->view('templates/footer');
    }

    public function dokter(){
        $data['judul'] = 'Data Dokter';

        $this->load->view('templates/header', $data);
        $this->load->view('periksa/dokter', $data);
        $this->load->view('templates/footer');
    }

}