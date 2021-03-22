<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pegawai</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Pegawai</a></li>
                        <li class="breadcrumb-item active">List Pegawai</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <div class="card card-blue mx-3">
        <div class="card-header ">
            <h2 class="card-title mt-2"><i class="fa fa-users"></i> Data Pegawai</h2>
            <a href="<?= base_url('pegawai/addPegawai'); ?>" class="btn btn-light float-right text-dark"><i class="fa fa-edit"></i> Tambah Data</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body elevation-4">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr class="table-primary" style="text-align: center;">
                            <th>No.</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Lokasi Kerja</th>
                            <th>Profesi</th>
                            <th>Jabatan Struktural</th>
                            <th>Jabatan Fungsional</th>
                            <th>Status Kepegawaian</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    foreach ($datapegawai as $row) { ?>
                        <tbody>
                            <td style="text-align: center;"><?= $no++; ?></td>
                            <td><?= $row->nip; ?></td>
                            <td><?= $row->nama; ?></td>
                            <td><?= $row->lokasi; ?></td>
                            <td><?= $row->profesi; ?></td>
                            <td><?= $row->jstruktur; ?></td>
                            <td><?= $row->jfungsi; ?></td>
                            <td><?= $row->status; ?></td>
                            <td style="text-align: center;">
                                <a href="<?= base_url('pegawai/detailPegawai'); ?>" title="Detail" class="btn btn-info btn-sm mr-1">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="<?= base_url('pegawai/editPegawai'); ?>" title="Ubah" class="btn btn-success btn-sm mr-1">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                            </td>

                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.content-header-->