<div class="container-fluid">

	<div class="card">
		<h5 class="card-header">Detail Produk</h5>
  		<div class="card-body">

  		<?php foreach($barang as $brg): ?>
    	<div class="row">
    		<div class="col-md-4">
    		<img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top">
    	    </div>
    		<div class="col-md-8">
    			<table class="table">
    				<tr>
    					<td>Nama Produk</td>
    					<td><strong><?php echo $brg->nama_brg ?></strong></td>
    				</tr>

    				<tr>
    					<td>Keterangan</td>
    					<td><strong><?php echo $brg->keterangan ?></strong></td>
    				</tr>

    				<tr>
    					<td>Kategori</td>
    					<td><strong><?php echo $brg->kategori ?></strong></td>
    				</tr>

    				<tr>
    					<td>Stok</td>
    					<td><?php 
                                if($brg->stok <= 1 ){
                                    echo '<div class="btn btn-sm btn-danger">Stok Habis</div';
                                } else {
                                    echo '<div class="btn btn-sm btn-info">'.$brg->stok.'</div>';
                            }?> </td>
    				</tr>

    				<tr>
    					<td>Harga</td>
    					<td><strong><div class="btn btn-sm btn-success">
    						Rp. <?php echo number_format($brg->harga,0,',','.') ?></strong></td>
    				</tr>

                    <tr>
                        <td>Exp Date</td>
                        <td><strong><div class="btn btn-sm btn-danger">
                        <strong><?php echo $brg->exp_date ?></strong></td>
                    </tr>

    			</table>

    			<?php
                            if($brg->stok < "1") {
                                echo "<span class='btn btn-sm btn-danger'><i class='fas fa-times mr-1'></i>Barang Habis</span>";
                            }else {
                                echo anchor('user/dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary"><i class="fas fa-plus mr-1"></i>Tambah Keranjang</div>');
                            }
                            ?>
				<?php echo anchor('user/welcome',
					'<div class="btn btn-sm btn-warning">Kembali</div>') ?>
    		</div>   		
    	</div>
    <?php endforeach; ?>
	    </div>
	</div>
</div>