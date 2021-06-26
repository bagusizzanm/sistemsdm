<div class="content-wrapper">
    <div class="card card-primary mx-3 mt-2">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fa fa-edit"></i>
                Tambah Data Pegawai
            </h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('Pegawai/p_add_pegawai')?>" enctype="multipart/form-data"> 
                    <div class="row">
                     
                        <div class="col-md-6">
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
                                                        <b>No NIP</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_nip" name="att_nip" required oninvalid="this.setCustomValidity('Data ini tidak boleh kosong')" oninput="setCustomValidity('')">
                                                        <!-- Mau required copast ini : required oninvalid="this.setCustomValidity('Data ini tidak boleh kosong')" oninput="setCustomValidity('')" -->
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Nama Lengkap dan Gelar</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_nama" name="att_nama">
                                                        <!-- Mau required copast ini : required oninvalid="this.setCustomValidity('Data ini tidak boleh kosong')" oninput="setCustomValidity('')" -->
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Foto</b>
                                                    </td>
                                                    <td>
                                                        <input type="file" class="form-control-file" id="att_foto" name='att_foto'>
                                                        <!-- Mau required copast ini : required oninvalid="this.setCustomValidity('Data ini tidak boleh kosong')" oninput="setCustomValidity('')" -->
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>No KTP</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_ktp" name="att_ktp">
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
                                                                    echo "<option value='Islam' >Islam</option>";
                                                                    echo "<option value='Kristen Protestan' >Kristen Protestan</option>";
                                                                    echo "<option value='Katolik' >Katolik</option>";
                                                                    echo "<option value='Hindu' >Hindu</option>";
                                                                    echo "<option value='Budha' >Budha</option>";
                                                                    echo "<option value='Kong Hu Cu' >Kong Hu Cu</option>";
                                                                    
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
                                                        <input class="form-control" type="text" id="att_tempat_lahir" name="att_tempat_lahir" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Tanggal Lahir</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="date" id="att_tgl_lahir" name="att_tgl_lahir">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Jenis Kelamin</b>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" id="att_jenis_kelamin" name="att_jenis_kelamin">
                                                                <option value='0'>Perempuan</option>
                                                                <option value='1' >Laki-Laki</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Pendidikan Terakhir</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_pendidikan_terakhir" name="att_pendidikan_terakhir" >
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Status Perkawinan</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_status_pernikahan" name="att_status_pernikahan" >
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Alamat</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_alamat" name="att_alamat" >
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>No Telp</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_telp" name="att_telp" >
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>No NPWP</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_npwp" name="att_npwp" >
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Email TASS</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_email_tass" name="att_email_tass" >
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Email Pribadi</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_email_pribadi" name="att_email_pribadi" >
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
                                                        <input class="form-control" type="text" id="att_profesi" name="att_profesi" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Tanggal Rekruitment</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="date" id="att_tgl_requitment" name="att_tgl_requitment" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Durasi Kerja</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_durasi_kerja" name="att_durasi_kerja" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Jabatan Fungsional</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_jabatan_fungsional" name="att_jabatan_fungsional" >
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Jabatan Struktural</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_jabatan_stuktural" name="att_jabatan_stuktural" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Lokasi Kerja</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_lokasi_kerja" name="att_lokasi_kerja" >
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>No BPJS Kesehatan</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_bpjs_kesehatan" name="att_bpjs_kesehatan">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>No BPJS Ketenagakerjaan</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_bpjs_ketenagakerjaan" name="att_bpjs_ketenagakerjaan" >
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Status Kepegawaian</b>
                                                    </td>
                                                    <td>
                                                         <select class="form-control" id="att_status" name="att_status">
                                                                <option value='Aktif'>Aktif</option>
                                                                <option value='Tidak Aktif' >Tidak Aktif</option>
                                                            </select>
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
                                                        <input class="form-control" type="text" id="att_bank" name="att_bank" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Nama Cabang</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_cabang" name="att_cabang" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>No Rekening</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_rekening" name="att_rekening" >
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="width: 150px">
                                                        <b>Nama Dalam Rekening</b>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" id="att_a_n_rekening" name="att_a_n_rekening" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <center>
                                    <button type="submit" class="btn btn-primary mb-2" onclick="return confirm('Apakah Anda yakin menambahkan data pegawai ini ?')">Tambah Data</button>
                                </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script>
    function insertData() {
        Swal.fire(
            'Sukses!',
            'Tambah data berhasil!',
            'success'
        );
    };

    $('input').inputmask("datetime", {
        mask: "1-2-y h:s",
        placeholder: "dd-mm-yyyy",
        leapday: "-02-29",
        separator: "-",
        alias: "dd-mm-yyyy"
    });
</script>