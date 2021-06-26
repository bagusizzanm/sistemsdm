<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumen extends CI_Controller
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
    	$data['datadokumen'] = $this->M_pegawai->getAllDokumenPegawai();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('menu/dokumen/datadokumen', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_dokumen()
    {
        $data['pegawai'] = $this->M_pegawai->getAllPegawai();
        // var_dump($data['pegawai']);
        // die();

    	$this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('menu/dokumen/tambah_dokumen',$data);
        $this->load->view('templates/footer');
    }

    public function p_add_dokumen_pegawai()
    {
        $upload_image_1 = $_FILES['m_dok_foto']['name'];

            if($upload_image_1){
                $config['upload_path']      = './assets/img/dokumen/';
                $config['allowed_types']    = 'gif|jpg|png';
                $config['max_size']         = 2048;

                $this->load->library('upload', $config);
                // var_dump($this->upload->do_upload('att_foto'));
                //  die;
                $file_upload = $this->upload->do_upload('m_dok_foto');

                if($file_upload){
                    $new_image = $this->upload->data('file_name');
                    $namaFoto = $new_image;
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('error',$error['error']);

                    $this->session->set_flashdata('message','<div class="alert alert-warning" role="alert">
                Foto yang diupload harus kurang dari 2 MB dan format gif, jpg atau png! 
                </div>');
                    redirect('Pegawai/detailPegawai/'.$this->input->post('m_pen_id_nip'));
                }
            } else {
                $namaFoto = 'default.jpg';
            }

        $data_dokumen = array(
            'fk_pe_nip' => $this->input->post('m_pel_data_pegawai'),
            // 'dok_id' => $this->input->post(''),
            'dok_tipe' => $this->input->post('m_dok_tipe'),
            'dok_deskripsi' => $this->input->post('m_dok_deskripsi'),
            'dok_tanggal' => $this->input->post('m_dok_tanggal'),
            'dok_foto' => $namaFoto,
            'dok_keterangan' => $this->input->post('m_dok_keterangan'),

        );

        $this->M_pegawai->inputData('dokumen',$data_dokumen);

        $this->session->set_flashdata('message','
            <div class="alert alert-success alert-dismissible fade show text-xs" role="alert">
                <h6 class="alert-heading">Add Dokumen Success</h6>
                Data Dokumen berhasil ditambahkan data pelatihannya!
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>');
        
        redirect('Dokumen');
    }

    public function p_delete_dokumen_pegawai($id_pegawai, $id)
    {
        
        $this->M_pegawai->deleteDataByID('dokumen','dok_id',$id);

        $this->session->set_flashdata('message','
            <div class="alert alert-warning alert-dismissible fade show text-xs" role="alert">
                <h6 class="alert-heading">Delete Dokumen Success</h6>
                Data Dokumen pegawai berhasil dihapus didalam sistem!
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>');

        redirect('Dokumen');
    }
}
