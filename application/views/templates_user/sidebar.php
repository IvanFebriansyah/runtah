<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-store"></i>
                </div>
                <div class="sidebar-brand-text mx-3">TOKO SNACK Tetap ASLI Ny.Sutrisno</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('user/welcome') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                KATEGORI
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('user/kategori/snack_kering') ?>">
                    <span>Snack Kering</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('user/kategori/snack_basah') ?>">
                    <span>Snack Basah</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('user/kategori/minuman') ?>">
                    <span>Minuman</span></a>
            </li>

            <div class="sidebar-heading">
                Info Pesanan
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('user/dashboard/detail_keranjang') ?>">
                    <span>Keranjang Pesanan</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('user/invoice') ?>">
                    <span>Pesanan Saya</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('user/dashboard/Info') ?>">
                    <span>Cotact Person</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form action="<?php echo base_url('user/dashboard/cari_barang'); ?>"
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                        method="get">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

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

                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <?php
                                    $keranjang = '<i class="fas fa-clipboard mr-1"></i>Keranjang : '.$this->cart->total_items
                                      (). ' Produk ' 
                                    ?>

                                    <?php echo anchor('user/dashboard/detail_keranjang', $keranjang)  ?>
                                </li>
                            </ul>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <ul class="na navbar-nav navbar-right">
                            <?php if($this->session->userdata('username')) { ?>
                            <li><div><?php echo $this->session->userdata('username') ?></div></li>
                           </ul>
                            <ul class="na navbar-nav navbar-right ml-4">
                            <div class="btn-danger btn-sm"><a class="nav-link" href="<?php echo base_url('auth/logout') ?>">
                                <i class="fas fa-fw fa-sign-in-alt text-white"></i>
                                <span class="text-white">Logout</span></a></div>
                            <?php } else { ?>
                            <div class="btn-primary btn-sm"><a class="nav-link" href="<?php echo base_url('auth/login') ?>">
                                <i class="fas fa-fw fa-sign-in-alt text-white"></i>
                                <span class="text-white">Login</span></a></div>

                            <?php } ?>
                                                        
                            </ul>

                        </div>
                       
                    </ul>

                </nav>