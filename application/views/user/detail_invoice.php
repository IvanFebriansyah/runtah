<div class="container-fluid">
	<h4>Detail Pesanan <div class="btn btn-sm btn-success">No. Invoice: 
		<?php echo $invoice->kode_transaksi ?></div></h4>
	<table>
		<tr>
			<td>Pelanggan</td>
			<td>: <?php echo $invoice->nama_lengkap ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>: <?php echo $invoice->alamat ?></td>
		</tr>
		<tr>
			<td>No.Telepon</td>
			<td>: <?php echo $invoice->nomer_tlp ?></td>
		</tr>
		<tr>
			<td>Jasa Pengiriman</td>
			<td>: <?php echo $invoice->jasa_kirim ?></td>
		</tr>
		<tr>
			<td>Pilih Pembayaran</td>
			<td>: <?php echo $invoice->pilih_pembayaran ?></td>
		</tr>
		<tr>
			<td>Tanggal Pesan</td>
			<td>: <?php echo $invoice->tgl_pesan ?></td>
		</tr>
		<tr>
			<td>Batas Pembayaran</td>
			<td>: <?php echo $invoice->batas_bayar ?></td>
		</tr>
		
	</table>

	<table class="table table-bordered table-hover table-striped">

		<tr>
			<th>ID BARANG</th>
			<th>NAMA PRODUK</th>
			<th>JUMLAH PESANAN</th>
			<th>HARGA SATUAN</th>
			<th>SUB-TOTAL</th>
		</tr>

		<?php
		$total = 0;
		foreach ($pesanan as $psn) :
			$subtotal = $psn->jumlah * $psn->harga;
			$total += $subtotal;
		 ?>

		 <tr>
		 	<td><?php echo $psn->id_brg ?></td>
		 	<td><?php echo $psn->nama_brg ?></td>
		 	<td><?php echo $psn->jumlah ?></td>
		 	<td><?php echo number_format($psn->harga,0,',','.') ?></td>
		 	<td><?php echo number_format($subtotal,0,',','.') ?></td>
		 </tr>

		<?php endforeach; ?>

		<tr>
			<td colspan="4" align="right">Grand Total</td>
			<td align="right">Rp. <?php echo number_format($total,0,',','.') ?></td>
		</tr>
		
	</table>

	<a href="<?php echo base_url('user/invoice/index') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>
</div>