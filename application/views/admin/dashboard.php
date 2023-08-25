<div class="container-fluid">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/slider_admin.jpg') ?>" class="d-block w-100" height="450px" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Selamat Datang</h5>
        <p>Di Halaman Admin</p>
      </div>
    </div>
  </div>
</div>

                        <div class="row mt-3">

                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body btn btn-primary btn-sm"><a class="nav-link" href="<?php echo base_url('admin/data_barang') ?>">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                                Data Barang</div>
                                            <div class="h5 mb-0 font-weight-bold text-white"><?php echo $jumlahbarang; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fw fa-box fa-2x text-white"></i>
                                        </div>
                                    </div></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body btn btn-warning btn-sm"><a class="nav-link" href="<?php echo base_url('admin/invoice') ?>">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-sm font-weight-bold text-white text-uppercase mb-1">
                                                Invoice</div>
                                            <div class="h5 mb-0 font-weight-bold text-white"><?php echo $jumlahinvoice; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fw fa-clipboard-list fa-2x text-white"></i>
                                        </div>
                                    </div></a>
                                </div>
                            </div>
                        </div>

                       <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body btn btn-info btn-sm"><a class="nav-link" href="<?php echo base_url('admin/akun_user') ?>">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-sm font-weight-bold text-white text-uppercase mb-1">
                                                Akun User</div>
                                            <div class="h5 mb-0 font-weight-bold text-white"><?php echo $jumlahuser; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fw fa-users fa-2x text-white"></i>
                                        </div>
                                    </div></a>
                                </div>
                            </div>
                        </div>