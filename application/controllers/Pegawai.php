<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('menu/pegawai/datapegawai');
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
}
