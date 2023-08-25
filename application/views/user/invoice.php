<div class="container-fluid">

	<div class="card shadow mb-4">
      	<div class="card-header py-3 font-weight-bold bg-success text-white">
        	<h6 class="m-0 font-weight-bold"><i class="fas fa-fw fa-sign-in-alt mr-1"></i>Data Transaksi Pesanan Saya</h6>
      	</div>
      	<div class="card-body">
      		<a class="btn btn-sm btn-danger mb-3" href="<?php echo base_url('user/invoice/print_invoice') ?>"><i class="fa fa-print mr-1"></i>Cetak Data</a>
      	<div class="card-body">

	<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>No.</th>
			<th>Kode Transaksi</th>
			<th>Nama Pemesanan</th>
			<th width="200px">Alamat Pengiriman</th>
			<th>Tanggal Pemesanan</th>
			<th>Batas Pembayaran</th>
			<th width="200px">Status</th>
			<th width="200px">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$no=1;
		foreach ($invoice as $inv): ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $inv->kode_transaksi ?></td>
			<td><?php echo $inv->nama_lengkap ?></td>
			<td><?php echo $inv->alamat ?></td>
			<td><?php echo $inv->tgl_pesan ?></td>
			<td><?php echo $inv->batas_bayar ?></td>
			<td><?php 
						if($inv->status =='Belum Dibayar'){
						 	echo '<div class="btn btn-sm btn-danger">'.$inv->status.'</div>';
						}else if($inv->status =='Sedang Diproses'){
						 	echo '<div class="btn btn-sm btn-warning">'.$inv->status.'</div>';
						}else if($inv->status =='Pesanan Dikirim'){
						 	echo '<div class="btn btn-sm btn-primary">'.$inv->status.'</div>';
						}else{
						 	echo '<div class="btn btn-sm btn-success">'.$inv->status.'</div>';
						}?></td>
			<td><?php echo anchor('user/invoice/detail/'.$inv->id_invoice,
			'<div class="btn btn-sm btn-primary">Detail</div>') ?>
			<?php echo anchor('user/invoice/hapus/'.$inv->id_invoice,
			'<div class="btn btn-sm btn-danger">Delete</div>') ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
</div>
</div>
</div>
</div>