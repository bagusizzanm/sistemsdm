<div class="content-wrapper">
    <div class="content">
        <ul class="nav nav-stacked md-tabs nav-tabs ">
            <li class="nav-item waves-effect waves-light" role="presentation">
                <a class="nav-link active" href="#datapegawai" data-toggle="tab">Data Pegawai</a>
            </li>
            <li class="nav-item waves-effect waves-light">
                <a class="nav-link " href="#datapendidikan" data-toggle="tab">Data Pendidikan</a>
            </li>
            <li class="nav-item waves-effect waves-light">
                <a class="nav-link" href="#datakeluarga" data-toggle="tab">Data Keluarga</a>
            </li>
            <li class="nav-item waves-effect waves-light">
                <a class="nav-link" href="#datapelatihan" data-toggle="tab">Data Pelatihan</a>
            </li>
            </li class="nav-item waves-effect waves-light">
            <li>
                <a class="nav-link" href="#dukumen" data-toggle="tab">Dokumen</a>
            </li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="datapegawai">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Detail Pegawai</h3>

                                <div class="card-tools">
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>NIP</b>
                                            </td>
                                            <td>:

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Nama</b>
                                            </td>
                                            <td>:

                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                <div class="card-footer">
                                    <a href="<?= base_url('datapegawai'); ?>" class="btn btn-warning">Kembali</a>

                                    <a href="" target=" _blank" title="Cetak Data Pegawai" class="btn btn-primary">Print</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-success">
                            <div class="card-header">
                                <center>
                                    <h3 class="card-title">
                                        Foto Pegawai
                                    </h3>
                                </center>

                                <div class="card-tools">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="<?= base_url() ?>assets/img/logo.png" width="50%" />
                                </div>

                                <h3 class="profile-username text-center">

                                    -

                                </h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="datapendidikan"></div>
            <div role="tabpanel" class="tab-pane" id="datakeluarga"></div>
            <div role="tabpanel" class="tab-pane" id="datapelatihan"></div>
            <div role="tabpanel" class="tab-pane" id="dokumen"></div>
        </div>
    </div>
</div>