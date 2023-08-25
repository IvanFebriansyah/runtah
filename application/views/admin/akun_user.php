<div class="container-fluid">
	<div class="card shadow mb-4">
      	<div class="card-header py-3 font-weight-bold bg-success text-white">
        	<h6 class="m-0 font-weight-bold"><i class="fas fa-users mr-2"></i>Data User</h6>
      	</div>

    <!-- Fungsi Notif Pada User -->
    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('pesan') ?>"></div>
    <div class="card-body">

  <!-- Fungsi Untuk Memunculkan Tabel User -->
	<div class="table-responsive">
    	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th class="text-center">Nama</th>
					<th class="text-center">Username</th>
					<th class="text-center">Password</th>
          <th class="text-center">Email</th>
					<th class="text-center">Nomer Telepon</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
			<?php $no=1; foreach ($akun as $ak) : ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $ak->nama ?></td>
					<td><?php echo $ak->username ?></td>
					<td><?php echo $ak->password ?></td>
          <td><?php echo $ak->email ?></td>
					<td><?php echo $ak->nomer_tlp ?></td>
					<td>
				  <center>
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#update<?php echo $ak->id_user; ?>">
            <div class="fa fa-edit"></div>Edit
            </button>
							<a href="<?php echo base_url('admin/akun_user/hapusData/').$ak->id_user; ?>" class="btn btn-danger btn-sm tombol-hapus" data-isiData="Ingin Menghapus Data ini!"><div class="fa fa-trash"></div></a>
						</center>
					</td>
				</tr>

				<?php endforeach; ?>
				</tbody>
			</table>
</div>

<?php foreach ($akun as $ak) { ?>
	<div class="modal fade" id="update<?php echo $ak->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
		<div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Form Edit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><div class="btn btn-danger btn-sm"><i class="fa fa-times"></i></div></button>  
        </div>

        <!-- Update Data Akun User -->
        	<form action="<?php echo base_url('admin/akun_user/updateData') ?>" method="POST">
        		<div class="modal-body">
        	    <div class="form-group">
              	<label>Nama</label>
              	<input type="hidden" name="id_user" value="<?php echo $ak->id_user; ?>">
                <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $ak->nama; ?>">
              </div>
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $ak->username; ?>">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password" placeholder="Password" value="<?php echo $ak->password; ?>">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $ak->email; ?>">
              </div>
              <div class="form-group">
                <label>No. Telepon</label>
                <input type="text" class="form-control" name="nomer_tlp" placeholder="Nomer Telepon" value="<?php echo $ak->nomer_tlp; ?>">
              </div>
            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-danger"><div class="fa fa-trash"></div> Reset</button>
              <button type="submit" class="btn btn-primary"><div class="fa fa-edit"></div> Update</button>
            </div>
            </form>
      </div>
    </div>
  </div>
<?php } ?>