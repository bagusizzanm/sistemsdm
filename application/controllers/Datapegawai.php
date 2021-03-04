<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datapegawai extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('content/datapegawai');
        $this->load->view('templates/footer');
    }

    public function addPegawai()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('content/tambah_pegawai');
        $this->load->view('templates/footer');
    }

    public function detailPegawai()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('content/detailpegawai');
        $this->load->view('templates/footer');
    }
}
