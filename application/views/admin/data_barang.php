<div class="container-fluid">
	<div class="card shadow mb-4">
      <div class="card-header py-3 font-weight-bold bg-primary text-white">
        <h6 class="m-0 font-weight-bold"><i class="fas fa-fw fa-sign-in-alt mr-1"></i>Data Barang</h6>
      	</div>

        <!-- Fungsi Alert -->
        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('pesan') ?>"></div>
      	<div class="card-body">
          <div class="card-body">
          <a class="btn btn-sm btn-danger mb-3" href="<?php echo base_url('admin/data_barang/print_barang') ?>"><i class="fa fa-print mr-1"></i>Cetak Data</a>
	      <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang">
        <i class="fas fa-plus fa-sm"></i> Tambah Barang</button>

<div class="table-responsive">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
		<tr>
			<th>NO</th>
			<th>NAMA BARANG</th>
			<th>KATEGORI</th>
			<th>HARGA</th>
			<th>STOK</th>
      <th>EXP DATE</th>
			<th colspan="3">AKSI</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$no=1;
		foreach($barang as $brg) : ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $brg->nama_brg ?></td>
			<td><?php echo $brg->kategori ?></td>
			<td><?php echo $brg->harga ?></td>
			<td><?php echo $brg->stok ?></td>
      <td><?php echo $brg->exp_date ?></td>
			<td><?php echo anchor('admin/data_barang/detail/' .$brg->id_brg,
      '<div class="btn btn-primary btn-sm"><i class=" fas fa-eye"></i></div>') ?>
      <?php echo anchor('admin/data_barang/edit/' .$brg->id_brg,
      '<div class="btn btn-info btn-sm"><i class=" fas fa-edit"></i></div>') ?>
			<?php echo anchor('admin/data_barang/hapus/' .$brg->id_brg, 
      '<div class="btn btn-danger btn-sm"><i class=" fas fa-trash"></i></div>') ?></td>
		</tr>

	<?php endforeach; ?>
	</tbody>
	</table>
</div>
</div>
</div>
</div>

<!-- Form Input Produk -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PRODUK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        	<span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

      		<div class="form-group">
      			<label>Nama Barang</label>
      			<input type="text" name="nama_brg" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Keterangan</label>
      			<input type="text" name="keterangan" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Kategori</label>
      			<select class="form-control" name="kategori">
            <option>Snack Kering</option>
            <option>Snack Basah</option>
            <option>Minuman</option>   
            </select>
      		</div>

      		<div class="form-group">
      			<label>Harga</label>
      			<input type="text" name="harga" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Stok</label>
      			<input type="text" name="stok" class="form-control">
      		</div>

          <div class="form-group">
            <label>Exp Date</label>
            <input type="date" name="exp_date" class="form-control">
          </div>

      		<div class="form-group">
      			<label>Gambar Produk</label><br>
      			<input type="file" name="gambar" class="form-control">
      		</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Input Produk</button>
      </div>
      
      </form>
    </div>
  </div>
</div>