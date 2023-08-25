<div class="container-fuild">
	<div class="card shadow mb-4">
      	<div class="card-header py-3 font-weight-bold bg-primary text-white">
        <h6 class="m-0 font-weight-bold"><i class="fas fa-clipboard-list mr-2"></i>List Keranjang Belanja</h6>
      	</div>
      	<div class="card-body">
	<?php echo form_open('user/dashboard/update'); ?>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>NO</th>
			<th>Nama Produk</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Sub-Total</th>
			<th>Aksi</th>
		</tr>

		<?php
		$no=1;
		$i = 1;
		foreach ($this->cart->contents() as $items) :
			$barang = $this->model_barang->find($items['id']); // Ambil informasi stok barang : 
	?>
		
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $items['name']?></td>
				<td>
					<input
						type="number"
						class="form-control"
						name="quantity[<?php echo $items['rowid']; ?>]"
						value="<?php echo $items['qty']; ?>"
						min="1"
						max="<?php echo $barang->stok; ?>" 
					>
    			</td>
				<td align="left">Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
				<td align="left">Rp. <?php echo number_format($items['subtotal'], 0,',','.') ?></td>
				<td>
				<a href="<?php echo base_url ('user/dashboard/delete/'. $items['rowid']) ?>"class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
			<?php $i++; ?>

		<?php endforeach; ?>

			<tr>
				<td colspan="4" align="right">Total</td>
				<td align="left">Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?></td>
			</tr>

	</table>

	<div align="right">
		<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>Update</button>
		<a href="<?php echo base_url('user/dashboard/hapus_keranjang') ?>">
		<div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
		<a href="<?php echo base_url('user/welcome') ?>">
		<div class="btn btn-sm btn-primary">Kembali Belanja</div></a>
		<a href="<?php echo base_url('user/dashboard/pembayaran') ?>">
		<div class="btn btn-sm btn-success">Pembayaran</div></a>
	</div>
	<?php echo form_close(); ?>
</div>
</div>
</div>