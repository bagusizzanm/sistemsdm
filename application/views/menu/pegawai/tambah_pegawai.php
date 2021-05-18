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
        <div class="content">
            <ul class="nav nav-stacked md-tabs nav-tabs ">
                <li class="nav-item waves-effect waves-light" role="presentation">
                    <a class="nav-link active" href="#datapribadi" data-toggle="tab">Data Pribadi</a>
                </li>
                <li class="nav-item waves-effect waves-light">
                    <a class="nav-link " href="#datakepegawaian" data-toggle="tab">Data Kepegawaian</a>
                </li>
                <li class="nav-item waves-effect waves-light">
                    <a class="nav-link" href="#databank" data-toggle="tab">Data Bank</a>
                </li>
                <li class="nav-item waves-effect waves-light">
                    <a class="nav-link" href="#datapendidikan" data-toggle="tab">Data Pendidikan</a>
                </li>
                <li class="nav-item waves-effect waves-light">
                    <a class="nav-link" href="#datakeluarga" data-toggle="tab">Data Keluarga</a>
                </li>
            </ul>

            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="datapribadi">

                    <form action="<?= base_url('pegawai/insertPegawai'); ?>" method="post" enctype="multipart/form-data">

                        <div class="card-body">

                            <div class="form-group row mb-2">

                                <div class="col-sm-6 mb-2">
                                    <label>No. KTP</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="No. KTP">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label>Jenis Kelamin</label>
                                    <br>
                                    <div class="form-check form-check-inline mt-2">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" />
                                        <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <label>Agama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Agama" required>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" placeholder="Tempat Lahir" required>
                                </div>

                                <script type="text/javascript">
                                    $(function() {
                                        $('.date').datepicker({
                                            format: "dd/mm/yyyy"
                                        });
                                    });
                                </script>

                                <div class="col-sm-6 mb-2">
                                    <label>Tanggal Lahir</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input placeholder="dd/mm/yyyy" type="text" name="ttl" id="dateInput" class="form-control date" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-2">
                                    <label>Alamat</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Alamat">
                                    </div>
                                </div>


                                <div class="col-sm-6 mb-2">
                                    <label>Pendidikan Terakhir</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Pendidikan Terakhir" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-2">
                                    <label>Status Perkawinan</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-ring"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="statkawin" name="statkawin" placeholder="Status Perkawinan" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-2">
                                <div class="col-sm-6 mb-2">
                                    <label>Status Perkawinan</label>
                                    <input type="text" class="form-control" id="statkawin" name="statkawin" placeholder="Status Perkawinan" required>
                                </div>


                                <div class="col-sm-6 mb-2">
                                    <label>No. Telp</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="No. Telp">
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <label>No. NPWP</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="No. NPWP" required>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <label>Alamat Email TASS</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <label>Alamat Email Pribadi</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>




                            </div>
                        </div>

                        <div class="card-footer">
                            <a onclick="insertData()" type="submit" name="Simpan" class="btn btn-primary">Simpan</a>
                            <a href="<?= base_url("pegawai"); ?>" title="Kembali" class="btn btn-secondary float-right">Batal</a>
                        </div>
                    </form>
                </div>

                <div role="tabpanel" class="tab-pane" id="datakepegawaian">
                    <form action="<?= base_url('pegawai/insertPegawai'); ?>" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group row mb-2">
                                <div class="col-sm-6 mb-2">
                                    <label>NIP</label>
                                    <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" required>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <label>Profesi</label>
                                    <input type="text" class="form-control" id="profesi" name="profesi" placeholder="Profesi" required>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <label>Tanggal Rekruitment</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="text" id="datepicker" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <label>Durasi Kerja</label>
                                    <input type="text" class="form-control" id="durasi" name="durasi" placeholder="Durasi Kerja" required>
                                </div>

                            </div>

                            <div class="form-group row mb-2">

                                <div class="col-sm-6 mb-2">
                                    <label>Status Perkawinan</label>
                                    <input type="text" class="form-control" id="statkawin" name="statkawin" placeholder="Status Perkawinan" required>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <label>No. Telp</label>
                                    <input type="text" class="form-control" id="notelp" name="notelp" placeholder="No. Telp" required>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <label>No. NPWP</label>
                                    <input type="text" class="form-control" id="no_npwp" name="no_npwp" placeholder="No. NPWP" required>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <label>Alamat Email TASS</label>
                                    <input type="text" class="form-control" id="emailtass" name="emailtass" placeholder="Alamat Email TASS" required>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <label>Alamat Email Pribadi</label>
                                    <input type="text" class="form-control" id="emailpribadi" name="emailpribadi" placeholder="Alamat Email Pribadi" required>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <label>Upload Foto</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-file-image"></i></span>
                                        </div>
                                        <input type="file" class="form-control" id="customFile" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <a onclick="insertData()" type="submit" name="Simpan" class="btn btn-primary">Simpan</a>
                            <a href="<?= base_url("pegawai"); ?>" title="Kembali" class="btn btn-secondary float-right">Batal</a>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="databank"></div>
                <div role="tabpanel" class="tab-pane" id="datapelatihan"></div>
                <div role="tabpanel" class="tab-pane" id="datakeluarga"></div>
            </div>
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