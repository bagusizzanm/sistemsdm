<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pegawai');
    }


    public function index()
    {
        $data = $this->M_pegawai->getPegawai();
        $tampung = array('datapegawai' => $data);

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('menu/pegawai/datapegawai', $tampung);
        $this->load->view('templates/footer');
    }

    public function addPegawai()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('menu/pegawai/tambah_pegawai');
        $this->load->view('templates/footer');
    }

    public function detailPegawai()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('menu/pegawai/detailpegawai');
        $this->load->view('templates/footer');
    }

    public function editPegawai()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('menu/pegawai/edit_pegawai');
        $this->load->view('templates/footer');
    }

    public function insertPegawai()
    {
        $datainsert = array(
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'lokasi' => $this->input->post('lokasi'),
            'profesi' => $this->input->post('profesi'),
            'jstruktur' => $this->input->post('jstruktur'),
            'jfungsi' => $this->input->post('jfungsi'),
            'status' => $this->input->post('jstruktur')
        );

        $value = $this->M_pegawai->insertDataPegawai($datainsert);
        if ($value == true) {
            redirect(base_url('pegawai'));
        } else {
            redirect('pegawai/addpegawai');
        }
    }
}
