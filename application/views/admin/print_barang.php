<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title ?></title>
</head>
<body class="hold-transition">
	<div class="container">
	<h1 style="text-align: center">Laporan Data Barang</h1>
	<table>
        <tr>
            <td width="100px">Dicetak Oleh</td>
            <td width="15px">:</td>
            <td><?php echo $this->session->userdata('nama'); ?></td>
        </tr>
        <tr>
          	<td>Waktu</td>
            <td>:</td>
            <td>
                <?php
                    date_default_timezone_set('Asia/Jakarta');
                        echo date('d-M-Y H:i:s');
                ?>
            </td>
        </tr>
    </table>

	<table class="table table-bordered mt-3">
		<thead>
		<tr>
			<th width="10px">No.</th>
			<th width="200px">Nama Barang</th>
			<th width="150px">Kategori</th>
			<th width="200px">Harga</th>
			<th width="200px">Stok</th>
			<th width="200px">Exp Date</th>			
		</tr>
		</thead>
		<tbody>
		<?php
		$no=1;
		foreach($barang as $brg) :?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $brg->nama_brg ?></td>
			<td><?php echo $brg->kategori ?></td>
			<td><?php echo $brg->harga ?></td>
			<td><?php echo $brg->stok ?></td>
			<td><?php echo $brg->exp_date ?></div></td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>