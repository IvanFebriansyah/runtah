<div class="container-fluid">
	
	<h3>Edit Data Masuk</h3>
	<div class="card" style="width: 80%">
		 <!-- Fungsi Alert -->
          <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('pesan') ?>"></div>
		<div class="card-body">

	<?php foreach($invoice as $inv) : ?>

		<form method="post" action="<?php echo base_url(). 'admin/invoice/update1' ?>">

			<div class="far-group">
				<label>No. Transaksi</label>
				<input type="hidden" name="id_invoice" class="form-control"
				value="<?php echo $inv->id_invoice ?>">
				<input type="text" name="kode_transaksi" class="form-control"
				value="<?php echo $inv->kode_transaksi ?>" readonly>
			</div>

			<div class="form-group">
				<label>Nama Pelanggan</label>
				<input type="text" class="form-control" name="nama_lengkap" value="<?php echo $inv->nama_lengkap ?>" readonly>
			</div>

            <div class="form-group">
              	<label>Status Pembayaran</label>
                <select name="status" class="form-control">
                    <option value="<?php echo $inv->status ?>"><?php echo $inv->status ?></option>
                    <option value="Belum Dibayar">Belum Dibayar</option>
					<option value="Sedang Diproses">Sedang Diproses</option>
					<option value="Pesanan Dikirim">Pesanan Dikirim</option>
					<option value="Selesai">Selesai</option>
                </select>
            </div>

			<button type="submit" class="btn btn-primary btn-sm ">Simpan</button>
			<?php echo anchor('admin/invoice/index','<div class="btn btn-sm btn-danger">Kembali</div>') ?>

		</form>

	<?php endforeach; ?>
</div>
</div>
</div>
</div>