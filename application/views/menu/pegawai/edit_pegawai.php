<div class="content-wrapper">
    <div class="card card-primary mx-3 my-5">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fa fa-edit"></i> Edit Data Pegawai
            </h3>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="card-body">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pegawai" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Lokasi Kerja</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi Kerja" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Profesi</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Profesi" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jabatan Struktural</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="jstruktur" name="no_hp" placeholder="Jabatan Struktural" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jabatan Fungsional</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="jfungsi" name="no_hp" placeholder="Jabatan Fungsional" required>
                    </div>
                </div>

                <!-- <div class="form-group row">
                <label class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-5">
                    <select name="status" id="status" class="form-control">
                        <option>- Pilih -</option>
                        <option>Pegawai</option>
                        <option>Honorer</option>
                    </select>
                </div>
            </div> -->

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status Kepegawaian</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="status" name="status" placeholder="Status Kepegawaian" required>
                    </div>
                </div>

                <!-- <div class="form-group row">
                <label class="col-sm-2 col-form-label">Foto Pegawai</label>
                <div class="col-sm-6">
                    <input type="file" id="foto" name="foto">
                    <p class="help-block">
                        <font color="red">"Format file Jpg/Png"</font>
                    </p>
                </div>
            </div> -->

            </div>
            <div class="card-footer">
                <input type="submit" name="update" value="Update" class="btn btn-primary">
                <a href="<?= base_url("pegawai"); ?>" title="Kembali" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
</div>