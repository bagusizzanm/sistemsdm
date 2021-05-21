<div class="content-wrapper">
    <div class="card card-primary mx-3 my-2">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fa fa-edit"></i>
                Edit Data Pegawai
            </h3>
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

                                <div class="col-sm-6 mb-2">
                                    <label>Jenis Kelamin</label>
                                    <select name="status" id="status" class="form-control">
                                        <option>--- Pilih ---</option>
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <label>Agama</label>
                                    <select name="status" id="status" class="form-control">
                                        <option>--- Pilih ---</option>
                                        <option>Islam</option>
                                        <option>Kristen</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                        <option>Katholik</option>
                                        <option>Konghucu</option>
                                    </select>
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

                                        <select name="status" id="status" class="form-control">
                                            <option>--- Pilih ---</option>
                                            <option>SD/Sederajat</option>
                                            <option>SMP/Sederajat</option>
                                            <option>SMA/Sederajat</option>
                                            <option>Sarjana</option>
                                            <option>Pascasarjana</option>
                                            <option>Doktor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-2">
                                    <label>Status Perkawinan</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-ring"></i></span>
                                        </div>
                                        <!-- <input type="text" class="form-control" id="statkawin" name="statkawin" placeholder="Status Perkawinan" required> -->
                                        <select name="status" id="status" class="form-control">
                                            <option>--- Pilih ---</option>
                                            <option>Kawin</option>
                                            <option>Belum Kawin</option>
                                            <option>Cerai</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-2">
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
                            <a href="<?= base_url("pegawai"); ?>" title="Kembali" class="btn btn-default float-right">Batal</a>
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
                            <a href="<?= base_url("pegawai"); ?>" title="Kembali" class="btn btn-default float-right">Batal</a>
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
    function updateData() {
        Swal.fire(
            'Sukses!',
            'Edit data berhasil!',
            'success'
        );
    }
</script>