<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pelatihan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Pelatihan</a></li>
                        <li class="breadcrumb-item active">List Data</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <div class="card card-blue mx-3">
        <div class="card-header ">
            <h2 class="card-title mt-2"><i class="fa fa-users"></i> Data Pelatihan</h2>
            <a href="<?= base_url('pegawai/addPegawai'); ?>" class="btn btn-light float-right text-dark"><i class="fa fa-edit"></i> Tambah Data</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body elevation-4">
            <div class="table-responsive">
                <table id="example1" class="display table table-striped" style="width: 100%;">
                    <thead style="width: 100%;">
                        <tr class="table-primary">
                            <th>No.</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Profesi</th>
                            <th>Tipe Pelatihan</th>
                            <th>Nama Pelatihan</th>
                            <th>Bidang</th>
                            <th>Tgl Mulai</th>
                            <th>Tgl Selesai</th>
                            <th>Instansi Penyelenggara</th>
                            <th>Penerbit Sertifikat</th>
                            <th>No Sertfikat</th>
                            <th>No Surat Tugas</th>
                            <th>Th. Pelaksanaan</th>
                            <th>Triwulan</th>
                            <th>Dokumen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="" title="Detail" class="btn btn-info btn-sm mr-1">
                                <i class="fa fa-eye"></i>
                            </a>
                        </td>
                        <td>
                            <a href="" title="Ubah" class="btn btn-success btn-sm mr-1">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                        </td>

                    </tbody>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.content-header -->