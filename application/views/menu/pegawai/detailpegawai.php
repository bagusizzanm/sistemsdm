<div class="content-wrapper">
    <div class="content">
        <ul class="nav nav-stacked md-tabs nav-tabs ">
            <li class="nav-item waves-effect waves-light" role="presentation">
                <a class="nav-link active" href="#datapegawai" data-toggle="tab">Data Pegawai</a>
            </li>
            <li class="nav-item waves-effect waves-light">
                <a class="nav-link " href="#datapendidikan" data-toggle="tab">Data Pendidikan</a>
            </li>
            <li class="nav-item waves-effect waves-light">
                <a class="nav-link" href="#datakeluarga" data-toggle="tab">Data Keluarga</a>
            </li>
            <li class="nav-item waves-effect waves-light">
                <a class="nav-link" href="#datapelatihan" data-toggle="tab">Data Pelatihan</a>
            </li>
            <li class="nav-item waves-effect waves-light">
                <a class="nav-link" href="#dokumen" data-toggle="tab">Dokumen</a>
            </li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="datapegawai">
                <div class="card mx-auto mt-3" style="width: 18rem;">
                    <img style="width: 30%;" class="card-img-top rounded-circle mx-auto d-block mt-3" src="<?= base_url() ?>assets/img/pegawai/<?= $detail_pegawai['pe_foto']?>" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-text"><?= $detail_pegawai['pe_nip']?></h5>
                        <p class="card-text"><?= $detail_pegawai['pe_nama']?></p>
                        <p class="card-text"><?= $detail_pegawai['kpe_profesi']?></p>

                    </div>
                </div>
                <?= $this->session->flashdata('message');?>

                <form method="post" action="<?= base_url('Pegawai/p_edit_pegawai/'.$detail_pegawai['pe_nip'])?>" enctype="multipart/form-data"> 
                    <div class="row">
                     
                        <div class="col-md-6">
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Detail Pegawai</h3>

                                        <div class="card-tools">
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <!-- <input class="form-control" type="text" hidden id="att_id" name="att_id" value="<?= $detail_pegawai['pe_nip']?>"> -->
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>No KTP</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_ktp" name="att_ktp" value="<?= $detail_pegawai['pe_ktp']?>">
                                                        <!-- Mau required copast ini : required oninvalid="this.setCustomValidity('Data ini tidak boleh kosong')" oninput="setCustomValidity('')" -->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Agama</b>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="att_agama" name="att_agama">
                                                                <?php 
                                                                    if($detail_pegawai['pe_agama'] == 'Islam'){
                                                                      echo "<option value='Islam' selected>Islam</option>";
                                                                    } else {
                                                                      echo "<option value='Islam' >Islam</option>";
                                                                    } 
                                                                    if($detail_pegawai['pe_agama'] == 'Kristen Protestan'){
                                                                      echo "<option value='Kristen Protestan' selected>Kristen Protestan</option>";
                                                                    } else {
                                                                      echo "<option value='Kristen Protestan' >Kristen Protestan</option>";
                                                                    } 
                                                                    if($detail_pegawai['pe_agama'] == 'Katolik'){
                                                                      echo "<option value='Katolik' selected>Katolik</option>";
                                                                    } else {
                                                                      echo "<option value='Katolik' >Katolik</option>";
                                                                    } 
                                                                    if($detail_pegawai['pe_agama'] == 'Hindu'){
                                                                      echo "<option value='Hindu' selected>Hindu</option>";
                                                                    } else {
                                                                      echo "<option value='Hindu' >Hindu</option>";
                                                                    } 
                                                                    if($detail_pegawai['pe_agama'] == 'Budha'){
                                                                      echo "<option value='Budha' selected>Budha</option>";
                                                                    } else {
                                                                      echo "<option value='Budha' >Budha</option>";
                                                                    } 
                                                                    if($detail_pegawai['pe_agama'] == 'Kong Hu Cu'){
                                                                      echo "<option value='Kong Hu Cu' selected>Kong Hu Cu</option>";
                                                                    } else {
                                                                      echo "<option value='Kong Hu Cu' >Kong Hu Cu</option>";
                                                                    } 
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Tempat Lahir</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_tempat_lahir" name="att_tempat_lahir" value="<?= $detail_pegawai['pe_tempat_lahir']?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Tanggal Lahir</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="date" id="att_tgl_lahir" name="att_tgl_lahir" value="<?= $detail_pegawai['pe_tanggal_lahir']?>">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Jenis Kelamin</b>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="att_jenis_kelamin" name="att_jenis_kelamin">
                                                                
                                                                <?php 
                                                                    if($detail_pegawai['pe_jenis_kelamin'] == 0){
                                                                      echo "<option value='0' selected>Perempuan</option>";
                                                                    } else {
                                                                      echo "<option value='0' >Perempuan</option>";
                                                                    } 
                                                                ?>
                                                                <?php 
                                                                    if($detail_pegawai['pe_jenis_kelamin'] == 1){
                                                                      echo "<option value='1' selected>Laki-Laki</option>";
                                                                    } else {
                                                                      echo "<option value='1' >Laki-Laki</option>";
                                                                    } 
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Pendidikan Terakhir</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_pendidikan_terakhir" name="att_pendidikan_terakhir" value="<?= $detail_pegawai['pe_pendidikan_terakhir']?>">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Status Perkawinan</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_status_pernikahan" name="att_status_pernikahan" value="<?= $detail_pegawai['pe_status_pernikahan']?>">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Alamat</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_alamat" name="att_alamat" value="<?= $detail_pegawai['pe_alamat']?>">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>No Telp</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_telp" name="att_telp" value="<?= $detail_pegawai['pe_no_telp']?>">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>No NPWP</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_npwp" name="att_npwp" value="<?= $detail_pegawai['pe_npwp']?>">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Email TASS</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_email_tass" name="att_email_tass" value="<?= $detail_pegawai['pe_email_tass']?>">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Email Pribadi</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_email_pribadi" name="att_email_pribadi" value="<?= $detail_pegawai['pe_email_pribadi']?>">
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Detail Kepegawaian</h3>

                                        <div class="card-tools">
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Profesi</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_profesi" name="att_profesi" value="<?= $detail_pegawai['kpe_profesi']?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Tanggal Rekruitment</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="date" id="att_tgl_requitment" name="att_tgl_requitment" value="<?= $detail_pegawai['kpe_tanggal_requitment']?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Durasi Kerja</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_durasi_kerja" name="att_durasi_kerja" value="<?= $detail_pegawai['kpe_durasi_kerja']?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Jabatan Fungsional</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_jabatan_fungsional" name="att_jabatan_fungsional" value="<?= $detail_pegawai['kpe_jabatan_fungsional']?>">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Jabatan Struktural</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_jabatan_stuktural" name="att_jabatan_stuktural" value="<?= $detail_pegawai['kpe_jabatan_struktural']?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Lokasi Kerja</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_lokasi_kerja" name="att_lokasi_kerja" value="<?= $detail_pegawai['kpe_lokasi_kerja']?>">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>No BPJS Kesehatan</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_bpjs_kesehatan" name="att_bpjs_kesehatan" value="<?= $detail_pegawai['kpe_no_bpjs_kesehataan']?>">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>No BPJS Ketenagakerjaan</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_bpjs_ketenagakerjaan" name="att_bpjs_ketenagakerjaan" value="<?= $detail_pegawai['kpe_no_bpjs_ketenagakerjaan']?>">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                        </div>
                        <div class="col-md-12">
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Detail Bank</h3>

                                        <div class="card-tools">
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Nama Bank</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_bank" name="att_bank" value="<?= $detail_pegawai['ban_nama_bank']?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Nama Cabang</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_cabang" name="att_cabang" value="<?= $detail_pegawai['ban_cabang']?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>No Rekening</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_rekening" name="att_rekening" value="<?= $detail_pegawai['ban_rekening']?>">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Nama Dalam Rekening</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_a_n_rekening" name="att_a_n_rekening" value="<?= $detail_pegawai['ban_nama_rekening']?>">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <center>
                                    <button type="submit" class="btn btn-primary mb-2" onclick="return confirm('Apakah Anda yakin mengubah data pegawai,\n&emsp;Nama : <?= $detail_pegawai['pe_nama']?> ?')">Edit Data</button>
                                </center>
                        </div>
                    
                    </div>
                </form>


            </div>
            <div role="tabpanel" class="tab-pane" id="datapendidikan">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Detail Pegawai</h3>

                                <div class="card-tools">
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>NIP</b>
                                            </td>
                                            <td>: <?= $detail_pegawai['pe_nip']?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Nama</b>
                                            </td>
                                            <td>: <?= $detail_pegawai['pe_nama']?>

                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-success">
                            <div class="card-header">
                                <center>
                                    <h3 class="card-title">
                                        Foto Pegawai
                                    </h3>
                                </center>

                                <div class="card-tools">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="<?= base_url() ?>assets/img/pegawai/<?= $detail_pegawai['pe_foto']?>" width="50%" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card card-success">
                            <div class="card-header">
                                <center>
                                    <h3 class="card-title">
                                        Data Pendidikan
                                    </h3>
                                </center>
                                <div class="card-tools">
                                    <button class="btn btn-success btn-sm btn_open_modal_add_pendidikan" data-toggle="modal" 
                                        data-target="#ModalTambahPendidikan" 
                                        data-items='{
                                        "id_nip":"<?=$detail_pegawai['pe_nip']?>"
                                        }'>
                                        <i class="fas fa-pen"></i>&nbsp;Tambah Data Pendidikan
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr class="table-primary" style="text-align: center;">
                                                <th>No.</th>
                                                <th>Nama Institusi</th>
                                                <th>Tingkat</th>
                                                <th>Program Studi</th>
                                                <th>Tanggal Lulus</th>
                                                <th>IPK</th>
                                                <th>Foto Ijazah</th>
                                                <th>Foto Traskrip Nilai</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($pendidikan_pegawai as $row) { ?>
                                                <tr>
                                                    <td style="text-align: center;background-color: white;"><?= $no++; ?></td>
                                                    <td style="background-color: white;"><?= $row['pen_nama_institusi']?></td>
                                                    <td style="background-color: white;"><?= $row['pen_tingkat']?></td>
                                                    <td style="background-color: white;"><?= $row['pen_program_studi']?></td>
                                                    <td style="background-color: white;"><?= date('d-m-Y', strtotime($row['pen_tanggal_lulus']))?></td>
                                                    <td style="background-color: white;"><?= $row['pen_ipk']?></td>
                                                    <td style="background-color: white;"><img src="<?php echo base_url()?>assets/img/pendidikan/<?= $row['pen_foto_ijazah']?>" style="height:30px;"></td>
                                                    <td style="background-color: white;"><img src="<?php echo base_url()?>assets/img/pendidikan/<?= $row['pen_foto_transkrip_nilai']?>" style="height:30px;"></td>
                                                    <td style="text-align: center;background-color: white;">
                                                        <a href="<?= base_url() ?>Pegawai/p_delete_pendidikan_pegawai/<?=$row['fk_pe_nip']?>/<?=$row['pen_id']?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    

<div class="modal fade" id="ModalTambahPendidikan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pendidikan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form method="post" action="<?= base_url('Pegawai/p_add_pendidikan_pegawai')?>" enctype="multipart/form-data">     
                <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>ID Pegawai</label>
                                        <input class="form-control" type="text" id="m_pen_id_nip" readonly name="m_pen_id_nip" value="<?= $detail_pegawai['pe_nip']?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Nama Pegawai</label>
                                        <input class="form-control" type="text" id="m_pen_nama_pegawai" readonly name="m_pen_nama_pegawai" value="<?= $detail_pegawai['pe_nama']?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Nama Institusi</label>
                                        <input class="form-control" type="text" id="m_pen_institusi" name="m_pen_institusi">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Tingkat</label>
                                    <select class="form-control" id="m_pen_tingkat" name="m_pen_tingkat">
                                            <option value="SMA/SMK">SMA/SMK</option>
                                            <option value="D1">D1</option>
                                            <option value="D2">D2</option>
                                            <option value="D3">D3</option>
                                            <option value="D4">D4</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Program Studi</label>
                                    <input class="form-control" type="text" id="m_pen_p_studi" name="m_pen_p_studi">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Tanggal Lulus</label>
                                    <input class="form-control" type="date" id="m_pen_tgl_lulus" name="m_pen_tgl_lulus">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>IPK</label>
                                    <input class="form-control" type="text" id="m_pen_ipk" name="m_pen_ipk">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Foto Ijazah</label>
                                    <input type="file" class="form-control-file" id="m_pen_ijazah" name='m_pen_ijazah'>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Foto Transkrip Nilai</label>
                                    <input type="file" class="form-control-file" id="m_pen_transkrip" name='m_pen_transkrip'>
                                </div>
                            </div>

                        </div>
                    </div>    
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit" onclick="return confirm('Anda yakin sudah mengecek dan akan menyimpan ?')"><i class="fas fa-save"></i>&nbsp;Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


                </div>

            </div>
            <div role="tabpanel" class="tab-pane" id="datakeluarga">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Detail Pegawai</h3>

                                <div class="card-tools">
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>NIP</b>
                                            </td>
                                            <td>: <?= $detail_pegawai['pe_nip']?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Nama</b>
                                            </td>
                                            <td>: <?= $detail_pegawai['pe_nama']?>

                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-success">
                            <div class="card-header">
                                <center>
                                    <h3 class="card-title">
                                        Foto Pegawai
                                    </h3>
                                </center>

                                <div class="card-tools">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="<?= base_url() ?>assets/img/pegawai/<?= $detail_pegawai['pe_foto']?>" width="50%" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card card-success">
                            <div class="card-header">
                                <center>
                                    <h3 class="card-title">
                                        Data Keluarga
                                    </h3>
                                </center>
                                <div class="card-tools">
                                    <button class="btn btn-success btn-sm btn_open_modal_add_keluarga" data-toggle="modal" 
                                        data-target="#ModalTambahKeluarga" 
                                        data-items='{
                                        "id_nip":"<?=$detail_pegawai['pe_nip']?>"
                                        }'>
                                        <i class="fas fa-pen"></i>&nbsp;Tambah Data Keluarga
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr class="table-primary" style="text-align: center;">
                                                <th>No.</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Status Hubungan</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Pekerjaan</th>
                                                <th>Dokumen</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($keluarga_pegawai as $row) { ?>
                                                <tr>
                                                <td style="text-align: center;background-color: white;"><?= $no++; ?></td>
                                                <td style="background-color: white;"><?= $row['kel_nik']?></td>
                                                <td style="background-color: white;"><?= $row['kel_nama']?></td>
                                                <td style="background-color: white;"><?= $row['kel_status_hubungan']?></td>
                                                <td style="background-color: white;"><?= $row['kel_jenis_kelamin']?></td>
                                                <td style="background-color: white;"><?= $row['kel_tempat_lahir']?></td>
                                                <td style="background-color: white;">
                                                    <?php 
                                                    if ($row['kel_tanggal_lahir']!= null) {
                                                        echo date('d-m-Y', strtotime($row['kel_tanggal_lahir']));
                                                    }
                                                    ?>
                                                </td>
                                                <td style="background-color: white;"><?= $row['kel_pekerjaan']?></td>
                                                <td style="background-color: white;">
                                                    <?php 
                                                    if ($row['kel_dokumen']!= null) {
                                                    ?>
                                                        <img src="<?php echo base_url()?>assets/img/keluarga/<?= $row['kel_dokumen']?>" style="height:30px;">
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td style="text-align: center;background-color: white;">

                                                    <a href="<?= base_url() ?>Pegawai/p_delete_keluarga_pegawai/<?=$row['fk_pe_nip']?>/<?=$row['kel_nik']?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    

<div class="modal fade" id="ModalTambahKeluarga" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Keluarga</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form method="post" action="<?= base_url('Pegawai/p_add_keluarga_pegawai')?>" enctype="multipart/form-data">     
                <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>ID Pegawai</label>
                                        <input class="form-control" type="text" id="m_kel_id_nip" readonly name="m_kel_id_nip" value="<?= $detail_pegawai['pe_nip']?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Nama Pegawai</label>
                                        <input class="form-control" type="text" id="m_kel_nama_pegawai" readonly name="m_kel_nama_pegawai" value="<?= $detail_pegawai['pe_nama']?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input class="form-control" type="text" id="m_kel_nik" name="m_kel_nik">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input class="form-control" type="text" id="m_kel_nama" name="m_kel_nama">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Status Hubungan</label>
                                    <select class="form-control" id="m_kel_status" name="m_kel_status">
                                        <option value="Ayah">Ayah</option>
                                        <option value="Ibu">Ibu</option>
                                        <option value="Anak Ke-1">Anak Ke-1</option>
                                        <option value="Anak Ke-2">Anak Ke-2</option>
                                        <option value="Anak Ke-3">Anak Ke-3</option>
                                        <option value="Anak Ke-4">Anak Ke-4</option>
                                        <option value="Anak Ke-5">Anak Ke-5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control" id="m_kel_jenis_kelamin" name="m_kel_jenis_kelamin">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input class="form-control" type="text" id="m_kel_tmp_lahir" name="m_kel_tmp_lahir">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Tanggal Lulus</label>
                                    <input class="form-control" type="date" id="m_kel_tgl_lahir" name="m_kel_tgl_lahir">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input class="form-control" type="text" id="m_kel_pekerjaan" name="m_kel_pekerjaan">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Foto Dokumen</label>
                                    <input type="file" class="form-control-file" id="m_kel_dokumen" name='m_kel_dokumen'>
                                </div>
                            </div>
                        </div>
                    </div>    
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit" onclick="return confirm('Anda yakin sudah mengecek dan akan menyimpan ?')"><i class="fas fa-save"></i>&nbsp;Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


                </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="datapelatihan">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Detail Pegawai</h3>

                                <div class="card-tools">
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>NIP</b>
                                            </td>
                                            <td>: <?= $detail_pegawai['pe_nip']?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Nama</b>
                                            </td>
                                            <td>: <?= $detail_pegawai['pe_nama']?>

                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-success">
                            <div class="card-header">
                                <center>
                                    <h3 class="card-title">
                                        Foto Pegawai
                                    </h3>
                                </center>

                                <div class="card-tools">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="<?= base_url() ?>assets/img/pegawai/<?= $detail_pegawai['pe_foto']?>" width="50%" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card card-success">
                            <div class="card-header">
                                <center>
                                    <h3 class="card-title">
                                        Data Pelatihan
                                    </h3>
                                </center>
                                <div class="card-tools">
                                    <button class="btn btn-success btn-sm btn_open_modal_add_pelatihan" data-toggle="modal" 
                                        data-target="#ModalTambahPelatihan" 
                                        data-items='{
                                        "id_nip":"<?=$detail_pegawai['pe_nip']?>"
                                        }'>
                                        <i class="fas fa-pen"></i>&nbsp;Tambah Data Pelatihan
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-bordered table-striped">
                                        <thead>
                                            <tr class="table-primary" style="text-align: center;">
                                                <th>No.</th>
                                                <th>Tipe</th>
                                                <th>Nama</th>
                                                <th>Bidang</th>
                                                <th>Tanggal Mulai</th>
                                                <th>Tanggal Selesai</th>
                                                <th>Instansi Penyelenggara</th>
                                                <th>Penerbit</th>
                                                <th>No Sertifikat</th>
                                                <th>Surat Tugas</th>
                                                <th>Thn Pelaksana</th>
                                                <th>Triwulan</th>
                                                <th>Foto</th>
                                                <th>Dokumen Pendukung</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($pelatihan_pegawai as $row) { ?>
                                                <tr>
                                                <td style="text-align: center;background-color: white;"><?= $no++; ?></td>
                                                <td style="background-color: white;"><?= $row['pel_tipe']?></td>
                                                <td style="background-color: white;"><?= $row['pel_nama']?></td>
                                                <td style="background-color: white;"><?= $row['pel_bidang']?></td>
                                                <td style="background-color: white;"><?= date('d-m-Y', strtotime($row['pel_tanggal_mulai']))?></td>
                                                <td style="background-color: white;"><?= date('d-m-Y', strtotime($row['pel_tanggal_selesai']))?></td>
                                                <td style="background-color: white;"><?= $row['pel_instansi_penyelenggara']?></td>
                                                <td style="background-color: white;"><?= $row['pel_penerbit']?></td>
                                                <td style="background-color: white;"><?= $row['pel_no']?></td>
                                                <td style="background-color: white;"><?= $row['pel_surat_tugas']?></td>
                                                <td style="background-color: white;"><?= $row['pel_tahun_pelaksanaan']?></td>
                                                <td style="background-color: white;"><?= $row['pel_triwulan']?></td>
                                                <td style="background-color: white;"><img src="<?php echo base_url()?>assets/img/pelatihan/<?= $row['pel_foto']?>" style="height:30px;"></td>
                                                <td style="background-color: white;"><img src="<?php echo base_url()?>assets/img/pelatihan/<?= $row['pel_dokumen_pendukung']?>" style="height:30px;"></td>
                                                <td style="text-align: center;background-color: white;">

                                                    <a href="<?= base_url() ?>Pegawai/p_delete_pelatihan_pegawai/<?=$row['fk_pe_nip']?>/<?=$row['pel_id']?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    

<div class="modal fade" id="ModalTambahPelatihan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pelatihan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form method="post" action="<?= base_url('Pegawai/p_add_pelatihan_pegawai')?>" enctype="multipart/form-data">     
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>ID Pegawai</label>
                                    <input class="form-control" type="text" id="m_pel_id_nip" readonly name="m_pel_id_nip" value="<?= $detail_pegawai['pe_nip']?>">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Nama Pegawai</label>
                                    <input class="form-control" type="text" id="m_pel_nama_pegawai" readonly name="m_pel_nama_pegawai" value="<?= $detail_pegawai['pe_nama']?>">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Tipe</label>
                                    <input class="form-control" type="text" id="m_pel_tipe" name="m_pel_tipe">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Nama Pelatihan</label>
                                    <input class="form-control" type="text" id="m_pel_nama" name="m_pel_nama">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Bidang</label>
                                    <input class="form-control" type="text" id="m_pel_bidang" name="m_pel_bidang">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Tanggal Mulai</label>
                                    <input class="form-control" type="date" id="m_pel_tgl_mulai" name="m_pel_tgl_mulai">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Tanggal Selesai</label>
                                    <input class="form-control" type="date" id="m_pel_tgl_selesai" name="m_pel_tgl_selesai">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Instansi Penyelenggara</label>
                                    <input class="form-control" type="text" id="m_pel_penyelenggara" name="m_pel_penyelenggara">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Instansi Penerbit</label>
                                    <input class="form-control" type="text" id="m_pel_penerbit" name="m_pel_penerbit">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>No Pelatihan</label>
                                    <input class="form-control" type="text" id="m_pel_no" name="m_pel_no">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Surat Tugas</label>
                                    <input class="form-control" type="text" id="m_pel_surat" name="m_pel_surat">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <input class="form-control" type="number" placeholder="YYYY" min="1950" max="2100" id="m_pel_thn" name="m_pel_thn">
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Triwulan</label>
                                <select class="form-control" id="m_pel_triwulan" name="m_pel_triwulan">
                                    <option value="TW1">TW1</option>
                                    <option value="TW2">TW2</option>
                                    <option value="TW3">TW3</option>
                                    <option value="TW4">TW4</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" class="form-control-file" id="m_pel_foto" name='m_pel_foto'>
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="form-group">
                                <label>Dokumen Pendukung</label>
                                <input type="file" class="form-control-file" id="m_pel_pendukung" name='m_pel_pendukung'>
                            </div>
                        </div>
                    </div>
                </div>    
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit" onclick="return confirm('Anda yakin sudah mengecek dan akan menyimpan ?')"><i class="fas fa-save"></i>&nbsp;Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="dokumen">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Detail Pegawai</h3>

                                <div class="card-tools">
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>NIP</b>
                                            </td>
                                            <td>: <?= $detail_pegawai['pe_nip']?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Nama</b>
                                            </td>
                                            <td>: <?= $detail_pegawai['pe_nama']?>

                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-success">
                            <div class="card-header">
                                <center>
                                    <h3 class="card-title">
                                        Foto Pegawai
                                    </h3>
                                </center>

                                <div class="card-tools">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="<?= base_url() ?>assets/img/pegawai/<?= $detail_pegawai['pe_foto']?>" width="50%"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card card-success">
                            <div class="card-header">
                                <center>
                                    <h3 class="card-title">
                                        Data Dokumen
                                    </h3>
                                </center>
                                <div class="card-tools">
                                    <button class="btn btn-success btn-sm btn_open_modal_add_dokumen" data-toggle="modal" 
                                        data-target="#ModalTambahDokumen" 
                                        data-items='{
                                        "id_nip":"<?=$detail_pegawai['pe_nip']?>"
                                        }'>
                                        <i class="fas fa-pen"></i>&nbsp;Tambah Data Dokumen
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example4" class="table table-bordered table-striped">
                                        <thead>
                                            <tr class="table-primary" style="text-align: center;">
                                                <th>No.</th>
                                                <th>Tipe</th>
                                                <th>Deskripsi</th>
                                                <th>Tanggal</th>
                                                <th>Keterangan</th>
                                                <th>Foto</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        
                                            <tbody>
                                                <?php
                                        $no = 1;
                                        foreach ($dokumen_pegawai as $row) { ?>
                                            <tr>
                                                <td style="text-align: center;background-color: white;"><?= $no++; ?></td>
                                                <td style="background-color: white;"><?= $row['dok_tipe']?></td>
                                                <td style="background-color: white;"><?= $row['dok_deskripsi']?></td>
                                                <td style="background-color: white;"><?= date('d-m-Y', strtotime($row['dok_tanggal']))?></td>
                                                <td style="background-color: white;"><?= $row['dok_keterangan']?></td>
                                                <td style="background-color: white;"><img src="<?php echo base_url()?>assets/img/dokumen/<?= $row['dok_foto']?>" style="height:30px;"></td>
                                                <td style="text-align: center;background-color: white;">
                                                    <a href="<?= base_url() ?>Pegawai/p_delete_dokumen_pegawai/<?=$row['fk_pe_nip']?>/<?=$row['dok_id']?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    

<div class="modal fade" id="ModalTambahDokumen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Dokumen</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form method="post" action="<?= base_url('Pegawai/p_add_dokumen_pegawai')?>" enctype="multipart/form-data">     
                <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>ID Pegawai</label>
                                        <input class="form-control" type="text" id="m_dok_id_nip" readonly name="m_dok_id_nip" value="<?= $detail_pegawai['pe_nip']?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Nama Pegawai</label>
                                        <input class="form-control" type="text" id="m_dok_nama_pegawai" readonly name="m_dok_nama_pegawai" value="<?= $detail_pegawai['pe_nama']?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Tipe</label>
                                        <input class="form-control" type="text" id="m_dok_tipe" name="m_dok_tipe">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <textarea class="form-control" row='4' type="text" id="m_dok_deskripsi" name="m_dok_deskripsi"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea class="form-control" row='6' type="text" id="m_dok_keterangan" name="m_dok_keterangan"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input class="form-control" type="date" id="m_dok_tanggal" name="m_dok_tanggal">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Foto Dokumen</label>
                                    <input type="file" class="form-control-file" id="m_dok_foto" name='m_dok_foto'>
                                </div>
                            </div>
                        </div>
                    </div>    
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit" onclick="return confirm('Anda yakin sudah mengecek dan akan menyimpan ?')"><i class="fas fa-save"></i>&nbsp;Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


                </div>
            </div>
        </div>
    </div>
</div>