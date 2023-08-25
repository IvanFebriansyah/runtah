<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title ?></title>
</head>
<body class="hold-transition">
	<div class="container">
	<h1 style="text-align: center">Laporan Invoice</h1>
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
			<th width="200px">Kode Transaksi</th>
			<th width="150px">Nama Pemesanan</th>
			<th width="200px">Alamat Pengiriman</th>
			<th width="200px">Nomor Telepon</th>
			<th width="200px">Jasa Pengiriman</th>
			<th width="200px">Status</th>			
		</tr>
		</thead>
		<tbody>
		<?php
		$no=1;
		foreach($invoice as $inv) :?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $inv->kode_transaksi?></td>
			<td><?php echo $inv->nama_lengkap ?></td>
			<td><?php echo $inv->alamat ?></td>
			<td><?php echo $inv->nomer_tlp ?></td>
			<td><?php echo $inv->jasa_kirim ?></div></td>
			<td><?php echo $inv->status ?></div></td>
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