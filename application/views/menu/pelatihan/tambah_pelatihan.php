<div class="content-wrapper">
    <div class="card card-primary mx-3 my-2">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fa fa-edit"></i>
                Tambah Data Pelatihan
            </h3>
        </div>
        <form action="<?= base_url('Pelatihan/p_add_pelatihan'); ?>" method="post" enctype="multipart/form-data">
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