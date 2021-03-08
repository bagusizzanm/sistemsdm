<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('homepage'); ?>" class="brand-link">
        <img src="<?= base_url(); ?>assets/img/logo.png" alt="logo" class="brand-image">
        <span class="brand-text font-weight-light">FIT TEL-U</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="form-inline my-3">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="<?= base_url('homepage'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('pegawai'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Data Pegawai
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('pelatihan'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Data Pelatihan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('dokumen'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Data Dokumen</p>
                    </a>
                </li>
                <li class="nav-item my-3">
                    <a href="<?= base_url('auth/logout'); ?>" class="nav-link text-danger" onclick="return confirm('Apakah anda yakin akan keluar?')">
                        <i class="nav-icon far fa-circle"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>