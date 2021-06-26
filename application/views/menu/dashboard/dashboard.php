<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 col-4">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?= $total_pegawai?><sup style="font-size: 20px"> Pegawai</sup></h3>
                            <p style="font-size: 16px">Jumlah Pegawai</p>
                        </div>
                        <div class="icon">
                            <i class="far fa fa-user"></i>
                        </div>
                        <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-4">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?= $total_pelatihan?><sup style="font-size: 20px"> Pelatihan</sup></h3>

                            <p style="font-size: 16px">Pelatihan Diikuti Pegawai</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-4">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?=$total_dokumen?><sup style="font-size: 20px"> Dokumen</sup></h3>

                            <p style="font-size: 16px">Total Dokumen Pegawai Tersimpan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                    </div>
                </div>

                <div class="col-xxl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-success">
                      <div class="card-header">
                        <h3 class="card-title">Rekap Jumlah Pegawai Per Lokasi Kerja</h3>

                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-xxl-6 col-lg-6 col-md-6 col-sm-6">
                    

                    <div class="card card-danger">
                      <div class="card-header">
                        <h3 class="card-title">Rekap Jumlah Pegawai Berdasarkan Profesi</h3>

                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                      </div>
                      <div class="card-body">
                        <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      </div>
                    </div>
                </div>
                <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                    <!-- Daftar Stock-->
                    <div class="card card-lightblue mb-4">
                        <div class="card-header">Rekap Jumlah Pegawai Berdasarkan Jabatan Fungsional Pegawai per Lokasi Kerja
                        </div>
                        <div class="card-body">
                            <table id="example1" class="display table table-bordered table-striped">
                    <thead>
                        <tr class="table-primary" style="text-align: center;">
                            <th>No.</th>
                            <th>Jabatan Fungsional</th>
                            <th>Lokasi</th>
                            <th>Jumlah Pegawai</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            $no = 1;
                            foreach ($tabel_pegawai_jabatan_f_n_lokasi as $row) { ?>
                        <tr>
                            <td style="text-align: center;background-color: white;"><?= $no++; ?></td>
                            <td style="background-color: white;"><?= $row['fungsional']?></td>
                            <td style="background-color: white;"><?= $row['lokasi']?></td>
                            <td style="background-color: white;"><?= $row['total']?></td>
                        </tr>
                        <?php } ?>
                    </tbody>

                    </tfoot>
                </table>
                        </div>
                        <div class="card-footer small text-muted"></div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </section>


</div>