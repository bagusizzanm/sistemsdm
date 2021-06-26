<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelatihan extends CI_Controller
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
        $data['datapelatihan'] = $this->M_pegawai->getAllPelatihanPegawai();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('menu/pelatihan/datapelatihan', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_pelatihan()
    {
        $data['pegawai'] = $this->M_pegawai->getAllPegawai();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('menu/pelatihan/tambah_pelatihan', $data);
        $this->load->view('templates/footer');
    }

    public function p_add_pelatihan()
    {
        $upload_image_1 = $_FILES['m_pel_foto']['name'];

            if($upload_image_1){
                $config['upload_path']      = './assets/img/pelatihan/';
                $config['allowed_types']    = 'gif|jpg|png';
                $config['max_size']         = 2048;

                $this->load->library('upload', $config);
                // var_dump($this->upload->do_upload('att_foto'));
                //  die;
                $file_upload = $this->upload->do_upload('m_pel_foto');

                if($file_upload){
                    $new_image = $this->upload->data('file_name');
                    $namaFoto = $new_image;
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('error',$error['error']);

                    $this->session->set_flashdata('message','<div class="alert alert-warning" role="alert">
                Foto yang diupload harus kurang dari 2 MB dan format gif, jpg atau png! 
                </div>');
                    redirect('Pelatihan');
                }
            } else {
                $namaFoto = 'default.jpg';
            }

        $upload_image_2 = $_FILES['m_pel_pendukung']['name'];

            if($upload_image_2){
                $config['upload_path']      = './assets/img/pelatihan/';
                $config['allowed_types']    = 'gif|jpg|png';
                $config['max_size']         = 2048;

                $this->load->library('upload', $config);
                // var_dump($this->upload->do_upload('att_foto'));
                //  die;
                $file_upload_2 = $this->upload->do_upload('m_pel_pendukung');

                if($file_upload_2){
                    $new_image_2 = $this->upload->data('file_name');
                    $namaFoto_2 = $new_image_2;
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('error',$error['error']);

                    $this->session->set_flashdata('message','<div class="alert alert-warning" role="alert">
                Foto yang diupload harus kurang dari 2 MB dan format gif, jpg atau png! 
                </div>');
                    redirect('Pelatihan');
                }
            } else {
                $namaFoto_2 = 'default.jpg';
            }


        $data_pelatihan = array(
            'fk_pe_nip' => $this->input->post('m_pel_nip_pegawai'),
            // 'pel_id' => $this->input->post(''),
            'pel_tipe' => $this->input->post('m_pel_tipe'),
            'pel_nama' => $this->input->post('m_pel_nama'),
            'pel_bidang' => $this->input->post('m_pel_bidang'),
            'pel_tanggal_mulai' => $this->input->post('m_pel_tgl_mulai'),
            'pel_tanggal_selesai' => $this->input->post('m_pel_tgl_selesai'),
            'pel_instansi_penyelenggara' => $this->input->post('m_pel_penyelenggara'),
            'pel_penerbit' => $this->input->post('m_pel_penerbit'),
            'pel_no' => $this->input->post('m_pel_no'),
            'pel_surat_tugas' => $this->input->post('m_pel_surat'),
            'pel_tahun_pelaksanaan' => $this->input->post('m_pel_thn'),
            'pel_triwulan' => $this->input->post('m_pel_triwulan'),
            'pel_foto' => $namaFoto,
            'pel_dokumen_pendukung' => $namaFoto_2
        );

        $this->M_pegawai->inputData('pelatihan',$data_pelatihan);

        $this->session->set_flashdata('message','
            <div class="alert alert-success alert-dismissible fade show text-xs" role="alert">
                <h6 class="alert-heading">Add Pelatihan Success</h6>
                Data Pegawai berhasil ditambahkan data pelatihannya!
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>');
        
        redirect('Pelatihan');

    }

    public function p_delete_pelatihan_pegawai($id_pegawai, $id)
    {
        
        $this->M_pegawai->deleteDataByID('pelatihan','pel_id',$id);

        $this->session->set_flashdata('message','
            <div class="alert alert-warning alert-dismissible fade show text-xs" role="alert">
                <h6 class="alert-heading">Delete Pelatihan Success</h6>
                Data Pelatihan pegawai berhasil dihapus didalam sistem!
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>');

        redirect('Pelatihan');
    }


    public function show_data_pegawai() { //CODE SHOW TYPE DEVICE IN SELECT OPTION
        $nip_pegawai = $this->input->post('m_pel_data_pegawai');
        
        $data_pegawai = $this->M_pegawai->getDetailPegawai($nip_pegawai);

        $callback = array(
            'val_nip' => $data_pegawai['pe_nip'],
            'val_nama' => $data_pegawai['pe_nama'],
            'val_lokasi_kerja' => $data_pegawai['kpe_lokasi_kerja'],
            'val_profesi' => $data_pegawai['kpe_profesi'],
        );
        echo json_encode($callback); 
    }


    public function detail(){
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('menu/pelatihan/');
        $this->load->view('templates/footer');
    }
}
