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

		<?php foreach ($snack_basah as $brg) : ?>

			<div class="card ml-3 mb-3" style="width: 16rem;">
				<img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title mb-1"><?php echo $brg->nama_brg?></h5>
					<small><?php echo $brg->keterangan ?></small><br>
					<span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($brg->harga, 0,',','.') ?></span>
					<?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,
					'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
					<?php echo anchor('dashboard/detail/'.$brg->id_brg,
					'<div class="btn btn-sm btn-success">Detail</div>') ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>