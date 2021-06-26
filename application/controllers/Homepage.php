<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pegawai');
        
        if(!$this->session->userdata('session_username')){
            redirect('Auth');
        }
    }

    public function index()
    {
        $data['total_pegawai'] = $this->M_pegawai->getSumTable('pegawai');
        $data['total_pelatihan'] = $this->M_pegawai->getSumTable('pelatihan');
        $data['total_dokumen'] = $this->M_pegawai->getSumTable('dokumen');
        // var_dump($data['total_pegawai']);
        // die();

        $data['grafik_pegawai_per_lokasi'] = $this->M_pegawai->getDataRekapPegawaiLokasiKerja();
        $data['grafik_pegawai_per_profesi'] = $this->M_pegawai->getDataRekapPegawaiProfesiKerja();
        $data['tabel_pegawai_jabatan_f_n_lokasi'] = $this->M_pegawai->getDataRekapPegawaiJabatanFungsionalLokasiKerja();

        // var_dump($data['tabel_pegawai_jabatan_f_n_lokasi']);
        // die();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('menu/dashboard/dashboard',$data);
        $this->load->view('templates/footer');
        $this->load->view('templates/s_dashboard',$data);
    }


}
