<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="ml-1"><i class="fa fa-users mr-2"></i>Data Pegawai</h1>
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
            <a href="<?= base_url('pegawai/addPegawai'); ?>" class="btn btn-light text-dark"><i class="fa fa-edit"></i> Tambah Data</a>
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
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($datapegawai as $row) { ?>
                            <tr>
                                <td style="text-align: center;background-color: white;"><?= $no++; ?></td>
                                <td style="background-color: white;"><?= $row['pe_nip']?></td>
                                <td style="background-color: white;"><?= $row['pe_nama']?></td>
                                <td style="background-color: white;"><?= $row['kpe_lokasi_kerja']?></td>
                                <td style="background-color: white;"><?= $row['kpe_profesi']?></td>
                                <td style="background-color: white;"><?= $row['kpe_jabatan_struktural']?></td>
                                <td style="background-color: white;"><?= $row['kpe_jabatan_fungsional']?></td>
                                <td style="background-color: white;"><?= $row['kpe_status']?></td>
                                <td style="text-align: center;background-color: white;">
                                    <a href="<?= base_url("pegawai/detailPegawai/");?><?= $row['pe_nip']?>" title="Detail" class="btn btn-info btn-sm">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <!-- <a href="<?= base_url('pegawai/editPegawai'); ?>" title="Ubah" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </a> -->
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.content-header-->