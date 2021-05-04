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
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No KTP</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nip" name="nip" placeholder="No. KTP" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Agama" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Tempat Lahir" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Tanggal Lahir" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="jk" name="jk" placeholder="Jenis Kelamin" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="pendterakhir" name="pendterakhir" placeholder="Pendidikan Terakhir" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status Perkawinan</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="statkawin" name="statkawin" placeholder="Status Perkawinan" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No. Telp</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="notelp" name="notelp" placeholder="No. Telp" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No. NPWP</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="No. NPWP" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat Email TASS</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Email TASS" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat Email Pribadi</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Email Pribadi" required>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <a onclick="updateData()" type="submit" name="Simpan" class="btn btn-primary">Update</a>
                            <a href="<?= base_url("pegawai"); ?>" title="Kembali" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="datakepegawaian"></div>
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