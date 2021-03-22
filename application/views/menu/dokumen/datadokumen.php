<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dokumen Pegawai</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dokumen</a></li>
                        <li class="breadcrumb-item active">List Dokumen</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <div class="card card-green mx-3">
        <div class="card-header ">
            <h2 class="card-title mt-2"><i class="fa fa-users"></i> Dokumen Pegawai</h2>
            <a href="<?= base_url('dokumen'); ?>" class="btn btn-light float-right text-dark"><i class="fa fa-edit"></i> Tambah Data</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body elevation-4">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr class="table-primary">
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Tipe Dokumen</th>
                            <th>Deskripsi Dokumen</th>
                            <th>Tanggal Dokumen</th>
                            <th>Lihat Dokumen</th>
                            <th>Keterangan </th>
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
                        <td class="row justify-content-center">
                            <a href="<?= base_url(''); ?>" title="Ubah" class="btn btn-success btn-sm mr-1">
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