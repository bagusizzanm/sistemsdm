<div class="content-wrapper">
    <div class="card card-primary mx-3 my-2">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fa fa-edit"></i>
                Tambah Data Pelatihan
            </h3>
        </div>
        <form action="<?= base_url('pegawai/insertPegawai'); ?>" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Lokasi Kerja</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="lokasikerja" name="lokasikerja" placeholder="Lokasi Kerja" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Profesi</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="profesi" name="profesi" placeholder="Profesi" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tipe Pelatihan</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="tipe" name="tipe" placeholder="Tipe Pelatihan" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Pelatihan</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="namapelatihan" name="ttl" placeholder="Nama Pelatihan" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Bidang</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="bidang" name="bidang" placeholder="Bidang" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Mulai</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="tglmulai" name="tglmulai" placeholder="Tanggal Mulai" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Selesai</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="tglselesai" name="tglselesai" placeholder="Tanggal Selesai" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Instansi Penyelanggara</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="instansi" name="instansi" placeholder="Instansi Penyelanggara" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Penerbit Sertifikat</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="notelp" name="notelp" placeholder="Penerbit Sertifikat" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No. Sertifikat</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nosertif" name="nosertif" placeholder="No. Sertifikat" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No. Surat Tugas</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nosurat" name="nosurat" placeholder="No. Surat Tugas" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tahun Pelaksanaan</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="thn" name="thn" placeholder="Tahun Pelaksanaan" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Triwulan</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="triwulan" name="triwulan" placeholder="Triwulan" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Lihat Sertifikat</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="lihatsertif" name="lihatsertif" placeholder="Lihat Sertifikat" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Lihat Dokumen Penting</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="lihatdok" name="lihatdok" placeholder="Lihat Dokumen Penting" required>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <a onclick="insertData()" type="submit" name="Simpan" class="btn btn-primary">Simpan</a>
                <a href="<?= base_url("pelatihan"); ?>" title="Kembali" class="btn btn-default float-right">Batal</a>
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
    }
</script>