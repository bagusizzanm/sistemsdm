<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="ml-1"><i class="fa fa-users mr-2"></i>Data Pelatihan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" class="">Pelatihan</a></li>
                        <li class="breadcrumb-item active">List Data</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <div class="card card-lightblue mx-3">
        <div class="card-header ">
            <a href="<?= base_url('pelatihan/tambah_pelatihan'); ?>" class="btn btn-light text-dark"><i class="fa fa-edit"></i> Tambah Data</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body elevation-4">
            <div class="table-responsive">
                <table id="example1" class="display table table-striped">
                    <thead>
                        <tr class="table-primary" style="text-align: center;">
                            <th>No.</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Tipe Pelatihan</th>
                            <th>Nama Pelatihan</th>
                            <th>Tgl Mulai</th>
                            <th>Tgl Selesai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <td style="text-align: center;background-color: white;"></td>
                        <td style="background-color: white;"></td>
                        <td style="background-color: white;"></td>
                        <td style="background-color: white;"></td>
                        <td style="background-color: white;"></td>
                        <td style="background-color: white;"></td>
                        <td style="background-color: white;"></td>
                        <td style="background-color: white;" class="text-center">
                            <a href="<?= base_url('pelatihan/'); ?>" title="Detail" class="btn btn-info btn-sm mr-1">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="<?= base_url('pelatihan/'); ?>" title="Ubah" class="btn btn-success btn-sm mr-1">
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
<!-- /.content-header
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
 -->