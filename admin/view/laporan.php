<?php
$db = new mobil;
$tampil = $db->getLaporan();
$no = 0;
?>
<table class="striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Nama Mobil</th>
			<th>No Polisi</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
			<th>Tanggal Pengembalian</th>
            <th>Denda</th>
            <th>Total</th>
            <th>Bayaran</th>
			<th>Tanggal Transaksi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($tampil as $val){
		$no++ ?>
		<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $val['username'] ?></td>
			<td><?php echo $val['nama_mobil'] ?></td>
			<td><?php echo $val['no_polisi'] ?></td>
			<td><?php echo $val['tgl_mulai'] ?></td>
            <td><?php echo $val['tgl_selesai'] ?></td>
			<td><?php echo $val['tgl_pengembalian'] ?></td>
            <td><?php echo $val['denda'] ?></td>
            <td><?php echo $val['total'] ?></td>
            <td><?php echo $val['bayaran'] ?></td>
            <td><?php echo $val['tgl_buat'] ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>