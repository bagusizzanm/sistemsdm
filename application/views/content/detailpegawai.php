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
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-header bg-white border-bottom py-3">
                            <h6 class="m-0 text-dark text-uppercase font-weight-bolder">Info Pegawai</h6>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" accept-charset="utf-8">
                                <div class="row">

                                    <div class="col-lg-9 mt-3">
                                        <table class="table table-borderless table-striped table-responsive" style="font-size: 14px;">
                                            <tr>
                                                <td style="width: 10%;">NIP</td>
                                                <td style="width: 1%;">:</td>
                                                <td style="width: 29%;" class="text-capitalize">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td style="width: 15%;">Nama</td>
                                                <td style="width: 1%;">:</td>
                                                <td class="text-capitalize" style="width: 39%;">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-lg-3 m-0">
                                        <img class="rounded-circle" style="width: 100%;" src="<?= base_url() ?>assets/img/logo.png" alt="foto.jpg">
                                    </div>
                                </div>
                            </form>
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