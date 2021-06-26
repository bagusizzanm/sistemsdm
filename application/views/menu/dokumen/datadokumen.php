<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="ml-1"><i class="fa fa-users mr-2"></i>Data Dokumen</h1>
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

    <?= $this->session->flashdata('message');?>

    <div class="card card-cyan mx-3">
        <div class="card-header ">
            <a href="<?= base_url('dokumen/tambah_dokumen'); ?>" class="btn btn-light text-dark"><i class="fa fa-edit"></i> Tambah Data</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body elevation-4">
            <div class="table-responsive">
                <table id="example1" class="display table table-bordered table-striped">
                    <thead>
                                            <tr class="table-primary" style="text-align: center;">
                                                <th>No.</th>
                                                <th>Tipe</th>
                                                <th>Deskripsi</th>
                                                <th>Tanggal</th>
                                                <th>Keterangan</th>
                                                <th>Foto</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        
                                            <tbody>
                                                <?php
                                        $no = 1;
                                        foreach ($datadokumen as $row) { ?>
                                            <tr>
                                                <td style="text-align: center;background-color: white;"><?= $no++; ?></td>
                                                <td style="background-color: white;"><?= $row['dok_tipe']?></td>
                                                <td style="background-color: white;"><?= $row['dok_deskripsi']?></td>
                                                <td style="background-color: white;"><?= date('d-m-Y', strtotime($row['dok_tanggal']))?></td>
                                                <td style="background-color: white;"><?= $row['dok_keterangan']?></td>
                                                <td style="background-color: white;"><img src="<?php echo base_url()?>assets/img/dokumen/<?= $row['dok_foto']?>" style="height:30px;"></td>
                                                <td style="text-align: center;background-color: white;">
                                                    <a href="<?= base_url() ?>Dokumen/p_delete_dokumen_pegawai/<?=$row['fk_pe_nip']?>/<?=$row['dok_id']?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                            <?php } ?>
                                        </tbody>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.content-header -->