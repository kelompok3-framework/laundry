<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-house-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Laundry "XYZ"</div>
            </a>

              <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('pegawai/c_dashboard') ?>">
                   <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

             <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('pegawai/c_kategori') ?>">
                   <i class="fas fa-balance-scale"></i>
                    <span>Kategori Laundry</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('pegawai/c_pemesanan') ?>">
                   <i class="fas fa-fw fa-folder"></i>
                    <span>Data Pemesanan</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url() ?>">
                   <i class="fas fa-fw fa-folder"></i>
                    <span>Data Transaksi</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url() ?>">
                   <i class="far fa-file-alt"></i>
                    <span>Laporan Penjualan</span></a>
            </li>
            
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                       <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang <?php echo $this->session->userdata('username') ?></span>
                                 <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                    
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url('authorization/logout') ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
        

                    </ul>

                </nav>