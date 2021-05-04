<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelatihan extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('menu/pelatihan/datapelatihan');
        $this->load->view('templates/footer');
    }

    public function tambah_pelatihan()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('menu/pelatihan/tambah_pelatihan');
        $this->load->view('templates/footer');
    }
}
