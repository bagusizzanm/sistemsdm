<div class="content-wrapper">
    <div class="card card-primary mx-3 my-2">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fa fa-edit"></i>
                Tambah Data Pelatihan
            </h3>
        </div>
        <form action="<?= base_url('Dokumen/p_add_dokumen_pegawai'); ?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Data Pegawai</label>
                                    <select class="form-control" id="m_pel_data_pegawai" name="m_pel_data_pegawai" required oninvalid="this.setCustomValidity('Data ini tidak boleh kosong')" oninput="setCustomValidity('')">
                                        <option value="">- Pilih Pegawai -</option>
                                        <?php foreach ($pegawai as $row) : ?>
                                            <option value="<?= $row['pe_nip']; ?>"><?= $row['pe_nip'].' - '.$row['pe_nama'] ?></option>
                                            <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>NIP Pegawai</label>
                                    <input class="form-control" type="text" id="m_pel_nip_pegawai" readonly name="m_pel_nip_pegawai">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Nama Pegawai</label>
                                    <input class="form-control" type="text" id="m_pel_nama_pegawai" readonly name="m_pel_nama_pegawai">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Lokasi Kerja</label>
                                    <input class="form-control" type="text" id="m_pel_lokasi_kerja" readonly name="m_pel_lokasi_kerja">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Profesi</label>
                                    <input class="form-control" type="text" id="m_pel_profesi" readonly name="m_pel_profesi">
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

            <div class="card-footer">
                <!-- <a onclick="insertData()" type="submit" name="Simpan" class="btn btn-primary">Simpan</a> -->
                <button type="submit" onclick="return confirm('Anda yakin sudah mengecek dan akan menyimpan ?')" name="Simpan" class="btn btn-primary">Simpan</button>
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