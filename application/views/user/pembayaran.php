<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php 
				$grand_total = 0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}

				echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total,0,',','.');
				 ?>
			</div><br><br>
			<h5>Input Alamat Pengiriman dan Pembayaran</h5>

			<form method="post" action="<?php echo base_url(). 'user/dashboard/proses_pesanan'?> ">

				<div class="form-group">
					<label>No. Transaksi</label>
					<input type="text" name="kode_transaksi" class="form-control" value="TR<?= time() ?>" readonly><?php echo form_error('kode_transaksik','<div class="text_small text-danger"></div>')?>
				</div>
				<div class="form-group">
					<label>Nama Pelanggan</label>
					<input type="text" name="nama_lengkap" class="form-control" value="<?php echo $this->session->userdata('nama') ?>">
				</div>
			
				<div class="form-group">
					<label>Alamat Tujuan</label>
					<input type="text" name="alamat" placeholder="Masukkan Alamat Anda"
					class="form-control">
				</div>

				<div class="form-group">
					<label>No. Telepon</label>
					<input type="text" name="nomer_tlp" placeholder="Masukkan Nomor Telepon"
					class="form-control">
				</div>

				<div class="form-group">
					<label>Jasa Pengiriman</label>
					<select class="form-control" name="jasa_kirim">
						<option value="JNE">JNE</option>
						<option value="J&T">J&T</option>
						<option value="POS Indonesia">POS Indonesia</option>
						<option value="GOJEK">GOJEK</option>
						<option value="GRAB">GRAB</option>
					</select>
				</div>

				<div class="form-group">
					<label>Pilih Pembayaran</label>
					<select class="form-control" name="pilih_pembayaran">
						<option value="BRI-12345">BRI - 12345</option>
						<option value="BNI-12345">BNI - 12345</option>
						<option value="BCA-12345">BCA - 12345</option>
						<option value="MANDIRI-12345">MANDIRI - 12345</option>
					</select>
				</div>

				<div class="form-group">
					<input type="hidden" name="status" class="form-control" value="Belum Di Bayar">
				</div>

				<?php echo anchor('welcome','<div class="btn btn-sm btn-danger mb-1">Kembali</div>') ?>
				<button type="submit" class="btn btn-sm btn-primary mb-1">Pesan</button>
				
			</form>

			<?php
		    } else
		    {
		    	echo "<h5>Keranjang Belanja Anda Masih Kosong";
		    }
		    ?>
		</div>

		<div class="col-md-2"></div>
	</div>
</div>