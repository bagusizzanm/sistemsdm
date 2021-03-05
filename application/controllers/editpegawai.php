<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Editpegawai extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('manu/pegawai/edit_pegawai');
        $this->load->view('templates/footer');
    }
}
