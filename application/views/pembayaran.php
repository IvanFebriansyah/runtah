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

			<form method="post" action="<?php echo base_url(). 'dashboard/proses_pesanan'?> ">

				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" placeholder=" Masukkan Nama Lengkap Anda"
					class="form-control">
				</div>

				<div class="form-group">
					<label>Alamat Tujuan</label>
					<input type="text" name="alamat" placeholder="Masukkan Alamat Anda"
					class="form-control">
				</div>

				<div class="form-group">
					<label>No. Telepon</label>
					<input type="text" name="no_telepon" placeholder="Masukkan Nomor Telepon"
					class="form-control">
				</div>

				<div class="form-group">
					<label>Jasa Penngiriman</label>
					<select class="form-control">
						<option>JNE</option>
						<option>J&T</option>
						<option>POS Indonesia</option>
						<option>GOJEK</option>
						<option>GRAB</option>
					</select>
				</div>

				<div class="form-group">
					<label>Pilih Pembayaran</label>
					<select class="form-control">
						<option>BRI - XXXXXX</option>
						<option>BNI - XXXXXX</option>
						<option>BCA - XXXXXX</option>
						<option>MANDIRI - XXXXXX</option>
					</select>
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