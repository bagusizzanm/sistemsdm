<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
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
        $data['datapegawai'] = $this->M_pegawai->getAllPegawai();
        // var_dump($data['datapegawai']);
        // die();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('menu/pegawai/datapegawai', $data);
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

    public function detailPegawai($id_pegawai)
    {
        $data['detail_pegawai'] = $this->M_pegawai->getDetailPegawai($id_pegawai);

        $data['pendidikan_pegawai'] = $this->M_pegawai->getDetailPegawaiJoin($id_pegawai, 'pendidikan');
        $data['keluarga_pegawai'] = $this->M_pegawai->getDetailPegawaiJoin($id_pegawai, 'keluarga');
        $data['pelatihan_pegawai'] = $this->M_pegawai->getDetailPegawaiJoin($id_pegawai, 'pelatihan');
        $data['dokumen_pegawai'] = $this->M_pegawai->getDetailPegawaiJoin($id_pegawai, 'dokumen');


        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('menu/pegawai/detailpegawai', $data);
        $this->load->view('templates/footer');
        // $this->load->view('templates/s_detail_pegawai');
    }

    public function p_edit_pegawai($id_pegawai)
    {
        // data pegawai
        $data_pegawai = array(
            'pe_ktp' => $this->input->post('att_ktp'),
            // 'pe_nama' => ,
            // 'pe_foto' => , 
            'pe_agama' => $this->input->post('att_agama'), 
            'pe_jenis_kelamin' => $this->input->post('att_jenis_kelamin'), 
            'pe_tempat_lahir' => $this->input->post('att_tempat_lahir'), 
            'pe_tanggal_lahir' => $this->input->post('att_tgl_lahir'), 
            'pe_status_pernikahan' => $this->input->post('att_status_pernikahan'), 
            'pe_alamat' => $this->input->post('att_alamat'), 
            'pe_no_telp' => $this->input->post('att_telp'), 
            'pe_npwp' => $this->input->post('att_npwp'), 
            'pe_email_tass' => $this->input->post('att_email_tass'), 
            'pe_email_pribadi' => $this->input->post('att_email_pribadi'),
            'pe_pendidikan_terakhir' => $this->input->post('att_pendidikan_terakhir') 
        );
        // data bank
        $data_bank = array(
            'ban_rekening' => $this->input->post('att_rekening'), 
            'ban_nama_bank' => $this->input->post('att_bank'), 
            'ban_cabang' => $this->input->post('att_cabang'), 
            'ban_nama_rekening' => $this->input->post('att_a_n_rekening'), 
        );
        // data kepegawaian 
        $data_kepegawaian = array(
            'kpe_profesi' => $this->input->post('att_profesi'), 
            'kpe_tanggal_requitment' => $this->input->post('att_tgl_requitment'), 
            'kpe_durasi_kerja' => $this->input->post('att_durasi_kerja'), 
            'kpe_jabatan_fungsional' => $this->input->post('att_jabatan_fungsional'), 
            'kpe_jabatan_struktural' => $this->input->post('att_jabatan_stuktural'), 
            'kpe_no_bpjs_kesehataan' => $this->input->post('att_bpjs_kesehatan'), 
            'kpe_no_bpjs_ketenagakerjaan' => $this->input->post('att_bpjs_ketenagakerjaan'), 
            'kpe_lokasi_kerja' => $this->input->post('att_lokasi_kerja') 
            // 'kpe_status' => $this->input->post('att_lokasi_kerja'), 
        );

        $this->M_pegawai->updateDataPegawai('pe_nip', $id_pegawai, 'pegawai', $data_pegawai);
        $this->M_pegawai->updateDataPegawai('fk_pe_nip', $id_pegawai, 'kepegawaian', $data_kepegawaian);
        $this->M_pegawai->updateDataPegawai('fk_pe_nip', $id_pegawai, 'bank', $data_bank);

        
        $this->session->set_flashdata('message','
            <div class="alert alert-success alert-dismissible fade show text-xs" role="alert">
                <h6 class="alert-heading">Update Success</h6>
                Data Pegawai berhasil diupdate!
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>');

        redirect('Pegawai/detailPegawai/'.$id_pegawai);
    }

    public function p_add_pendidikan_pegawai()
    {

        $upload_image_1 = $_FILES['m_pen_ijazah']['name'];

            if($upload_image_1){
                $config['upload_path']      = './assets/img/pendidikan/';
                $config['allowed_types']    = 'gif|jpg|png';
                $config['max_size']         = 2048;

                $this->load->library('upload', $config);
                // var_dump($this->upload->do_upload('att_foto'));
                //  die;
                $file_upload = $this->upload->do_upload('m_pen_ijazah');

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

        $upload_image_2 = $_FILES['m_pen_transkrip']['name'];

            if($upload_image_2){
                $config['upload_path']      = './assets/img/pendidikan/';
                $config['allowed_types']    = 'gif|jpg|png';
                $config['max_size']         = 2048;

                $this->load->library('upload', $config);
                // var_dump($this->upload->do_upload('att_foto'));
                //  die;
                $file_upload_2 = $this->upload->do_upload('m_pen_transkrip');

                if($file_upload_2){
                    $new_image_2 = $this->upload->data('file_name');
                    $namaFoto_2 = $new_image_2;
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('error',$error['error']);

                    $this->session->set_flashdata('message','<div class="alert alert-warning" role="alert">
                Foto yang diupload harus kurang dari 2 MB dan format gif, jpg atau png! 
                </div>');
                    redirect('Pegawai/detailPegawai/'.$this->input->post('m_pen_id_nip'));
                }
            } else {
                $namaFoto_2 = 'default.jpg';
            }

        $data_pendidikan = array(
            'fk_pe_nip' => $this->input->post('m_pen_id_nip'),
            // 'pen_id' => $this->input->post(''),
            'pen_nama_institusi' => $this->input->post('m_pen_institusi'),
            'pen_tingkat' => $this->input->post('m_pen_tingkat'),
            'pen_program_studi' => $this->input->post('m_pen_p_studi'),
            'pen_tanggal_lulus' => $this->input->post('m_pen_tgl_lulus'),
            'pen_ipk' => $this->input->post('m_pen_ipk'),
            'pen_foto_ijazah' => $namaFoto,
            'pen_foto_transkrip_nilai' => $namaFoto_2,

        );
        $this->M_pegawai->inputData('pendidikan',$data_pendidikan);

        $this->session->set_flashdata('message','
            <div class="alert alert-success alert-dismissible fade show text-xs" role="alert">
                <h6 class="alert-heading">Add Pendidikan Success</h6>
                Data Pegawai berhasil ditambahkan data pendidikannya!
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>');
        
        redirect('Pegawai/detailPegawai/'.$this->input->post('m_pen_id_nip'));
    }

    public function p_add_keluarga_pegawai()
    {
        $upload_image_1 = $_FILES['m_kel_dokumen']['name'];

            if($upload_image_1){
                $config['upload_path']      = './assets/img/keluarga/';
                $config['allowed_types']    = 'gif|jpg|png';
                $config['max_size']         = 2048;

                $this->load->library('upload', $config);
                // var_dump($this->upload->do_upload('att_foto'));
                //  die;
                $file_upload = $this->upload->do_upload('m_kel_dokumen');

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

        $data_keluarga = array(
            'fk_pe_nip' => $this->input->post('m_kel_id_nip'),
            'kel_nik' => $this->input->post('m_kel_nik'),
            'kel_status_hubungan' => $this->input->post('m_kel_status'),
            'kel_nama' => $this->input->post('m_kel_nama'),
            'kel_jenis_kelamin' => $this->input->post('m_kel_jenis_kelamin'),
            'kel_tempat_lahir' => $this->input->post('m_kel_tmp_lahir'),
            'kel_tanggal_lahir' => $this->input->post('m_kel_tgl_lahir'),
            'kel_pekerjaan' => $this->input->post('m_kel_pekerjaan'),
            'kel_dokumen' => $namaFoto
        );

        $this->M_pegawai->inputData('keluarga',$data_keluarga);

        $this->session->set_flashdata('message','
            <div class="alert alert-success alert-dismissible fade show text-xs" role="alert">
                <h6 class="alert-heading">Add Keluarga Success</h6>
                Data Pegawai berhasil ditambahkan data keluarganya!
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>');
        
        redirect('Pegawai/detailPegawai/'.$this->input->post('m_kel_id_nip'));
    }

    public function p_add_pelatihan_pegawai()
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
                    redirect('Pegawai/detailPegawai/'.$this->input->post('m_pen_id_nip'));
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
                    redirect('Pegawai/detailPegawai/'.$this->input->post('m_pen_id_nip'));
                }
            } else {
                $namaFoto_2 = 'default.jpg';
            }


        $data_pelatihan = array(
            'fk_pe_nip' => $this->input->post('m_pel_id_nip'),
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
        
        redirect('Pegawai/detailPegawai/'.$this->input->post('m_pel_id_nip'));

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
            'fk_pe_nip' => $this->input->post('m_dok_id_nip'),
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
        
        redirect('Pegawai/detailPegawai/'.$this->input->post('m_dok_id_nip'));
    }

    public function p_delete_pendidikan_pegawai($id_pegawai, $id)
    {
        $this->M_pegawai->deleteDataByID('pendidikan','pen_id',$id);
        $this->session->set_flashdata('message','
            <div class="alert alert-warning alert-dismissible fade show text-xs" role="alert">
                <h6 class="alert-heading">Delete Success</h6>
                Data Pendidikan pegawai berhasil dihapus didalam sistem!
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>');

        redirect('Pegawai/detailPegawai/'.$id_pegawai);
    }

    public function p_delete_keluarga_pegawai($id_pegawai, $nik)
    {
        $this->M_pegawai->deleteDataByID2Where('keluarga', 'fk_pe_nip', $id_pegawai, 'kel_nik',$nik);

        $this->session->set_flashdata('message','
            <div class="alert alert-warning alert-dismissible fade show text-xs" role="alert">
                <h6 class="alert-heading">Delete Keluarga Success</h6>
                Data Keluarga pegawai berhasil dihapus didalam sistem!
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>');

        redirect('Pegawai/detailPegawai/'.$id_pegawai);
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

        redirect('Pegawai/detailPegawai/'.$id_pegawai);
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

        redirect('Pegawai/detailPegawai/'.$id_pegawai);
    }

    public function p_add_pegawai()
    {
        $upload_image_1 = $_FILES['att_foto']['name'];

            if($upload_image_1){
                $config['upload_path']      = './assets/img/pegawai/';
                $config['allowed_types']    = 'gif|jpg|png';
                $config['max_size']         = 2048;

                $this->load->library('upload', $config);
                // var_dump($this->upload->do_upload('att_foto'));
                //  die;
                $file_upload = $this->upload->do_upload('att_foto');

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

        $data_pegawai = array(
            'pe_nip' => $this->input->post('att_nip'),
            'pe_ktp' => $this->input->post('att_ktp'),
            'pe_nama' => $this->input->post('att_nama'),
            'pe_foto' => $namaFoto, 
            'pe_agama' => $this->input->post('att_agama'), 
            'pe_jenis_kelamin' => $this->input->post('att_jenis_kelamin'), 
            'pe_tempat_lahir' => $this->input->post('att_tempat_lahir'), 
            'pe_tanggal_lahir' => $this->input->post('att_tgl_lahir'), 
            'pe_status_pernikahan' => $this->input->post('att_status_pernikahan'), 
            'pe_alamat' => $this->input->post('att_alamat'), 
            'pe_no_telp' => $this->input->post('att_telp'), 
            'pe_npwp' => $this->input->post('att_npwp'), 
            'pe_email_tass' => $this->input->post('att_email_tass'), 
            'pe_email_pribadi' => $this->input->post('att_email_pribadi'),
            'pe_pendidikan_terakhir' => $this->input->post('att_pendidikan_terakhir') 
        );
        // data bank
        $data_bank = array(
            'fk_pe_nip' => $this->input->post('att_nip'),
            'ban_rekening' => $this->input->post('att_rekening'), 
            'ban_nama_bank' => $this->input->post('att_bank'), 
            'ban_cabang' => $this->input->post('att_cabang'), 
            'ban_nama_rekening' => $this->input->post('att_a_n_rekening'), 
        );
        // data kepegawaian 
        $data_kepegawaian = array(
            'fk_pe_nip' => $this->input->post('att_nip'),
            'kpe_profesi' => $this->input->post('att_profesi'), 
            'kpe_tanggal_requitment' => $this->input->post('att_tgl_requitment'), 
            'kpe_durasi_kerja' => $this->input->post('att_durasi_kerja'), 
            'kpe_jabatan_fungsional' => $this->input->post('att_jabatan_fungsional'), 
            'kpe_jabatan_struktural' => $this->input->post('att_jabatan_stuktural'), 
            'kpe_no_bpjs_kesehataan' => $this->input->post('att_bpjs_kesehatan'), 
            'kpe_no_bpjs_ketenagakerjaan' => $this->input->post('att_bpjs_ketenagakerjaan'), 
            'kpe_lokasi_kerja' => $this->input->post('att_lokasi_kerja'), 
            'kpe_status' => $this->input->post('att_status'), 
        );

        $this->M_pegawai->inputData('pegawai',$data_pegawai);
        $this->M_pegawai->inputData('kepegawaian',$data_kepegawaian);
        $this->M_pegawai->inputData('bank',$data_bank);

        $this->session->set_flashdata('message','
            <div class="alert alert-success alert-dismissible fade show text-xs" role="alert">
                <h6 class="alert-heading">Add Pegawai Success</h6>
                Data Pegawai berhasil ditambahkan!
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>');
        
        redirect('Pegawai');

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
