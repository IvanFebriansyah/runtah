<div class="container-fuild">
	<h4>Keranjang Belanja</h4>

	<?php echo form_open('dashboard/update'); ?>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>NO</th>
			<th>Nama Produk</th>
			<th width="50px">Jumlah</th>
			<th>Harga</th>
			<th>Sub-Total</th>
			<th>Aksi</th>
		</tr>

		<?php
		$no=1;
		$i = 1;
		foreach ($this->cart->contents() as $items) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $items['name'] ?></td>
				<td><?php echo form_input(array(
						'name' => $i . '[qty]',
						'value' => $items['qty'],
						'maxlength' => '3',
						'min' => '0',
						'size' => '5',
						'type' => 'number',
						'class' => 'form-control'
					)); ?>
				</td>

				<td align="right">Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
				<td align="right">Rp. <?php echo number_format($items['subtotal'], 0,',','.') ?></td>
				<td>
				<a href="<?php echo base_url ('dashboard/delete/'. $items['rowid']) ?>"class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
			<?php $i++; ?>

		<?php endforeach; ?>

			<tr>
				<td colspan="4"></td>
				<td align="right">Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?></td>
			</tr>

	</table>

	<div align="right">
		<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>Update</button>
		<a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
		<div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
		<a href="<?php echo base_url('welcome') ?>">
		<div class="btn btn-sm btn-primary">Kembali Belanja</div></a>
		<a href="<?php echo base_url('dashboard/pembayaran') ?>">
		<div class="btn btn-sm btn-success">Pembayaran</div></a>
	</div>
	<?php echo form_close(); ?>
</div>
