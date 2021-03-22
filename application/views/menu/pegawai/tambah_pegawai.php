<div class="content-wrapper">
    <div class="card card-primary mx-3 my-5">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fa fa-edit"></i> Tambah Data Pegawai
            </h3>
        </div>
        <form action="<?= base_url('pegawai/insertPegawai'); ?>" method="post" enctype="multipart/form-data">
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
                        <input type="text" class="form-control" id="profesi" name="profesi" placeholder="Profesi" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jabatan Struktural</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="jstruktur" name="jstruktur" placeholder="Jabatan Struktural" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jabatan Fungsional</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="jfungsi" name="jfungsi" placeholder="Jabatan Fungsional" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status Kepegawaian</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="status" name="status" placeholder="Status Kepegawaian" required>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <a onclick="insertData()" type="submit" name="Simpan" class="btn btn-primary">Simpan</a>
                <a href="<?= base_url("pegawai"); ?>" title="Kembali" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>

<script>
    function insertData() {
        Swal.fire(
            'Sukses!',
            'Tambah data berhasil!',
            'success'
        );
    }
</script>