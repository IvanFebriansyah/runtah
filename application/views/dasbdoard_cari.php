<div class="container-fluid">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  	<ol class="carousel-indicators">
	    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  	</ol>
	  	<div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="<?php echo base_url('assets/img/slider_toko.jpg') ?>" height="500px" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
        	<h5>Selamat Datang</h5>
        	<p>Di Halaman Toko</p>
      		</div>
	    </div>
	  </div>
	</div>

	<div class="row text-center mt-3">

		<?php foreach ($barang as $brg) : ?>

			<div class="card ml-3 mb-3" style="width: 16rem;">
				<img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title mb-1"><?php echo $brg->nama_brg?></h5><br>
					<h6><span><?php 
                                if($brg->stok <= 1 ){
                                    echo '<span class="badge badge-pill badge-danger mb-3">Stok Habis</span>';
                                } else {
                                    echo '<span class="badge badge-pill badge-info mb-3">Stok : '.$brg->stok.'</span>';
                            }?></span>
					<span class="badge badge-pill badge-success mb-3 font-weight-bold" >Harga Rp. <?php echo number_format($brg->harga, 0,',','.') ?></span>
					</h6>
					
					<div>
					<?php
							if($brg->stok < "1") {
								echo "<span class='btn btn-sm btn-danger'><i class='fas fa-times mr-1'></i>Barang Habis</span>";
							}else {
								echo anchor('user/dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary"><i class="fas fa-plus mr-1"></i>Tambah Keranjang</div>');
							}
							?>
					<?php echo anchor('user/dashboard/detail/'.$brg->id_brg,
					'<div class="btn btn-sm btn-success">Detail</div>') ?>
				</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>