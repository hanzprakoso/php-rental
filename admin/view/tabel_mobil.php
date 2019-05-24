<?php
$db = new mobil;
$tampil = $db->getAll();
if($tampil->num_rows > 0){
	$no = 0;
?>
<table class="striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Mobil</th>
			<th>Jenis Mobil</th>
			<th>No Polisi</th>
            <th>Biaya Sewa</th>
            <th>Tanggal Ditambah</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($tampil as $val){
		$no++ ?>
		<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $val['nama_mobil'] ?></td>
			<td><?php echo $val['jenis'] ?></td>
			<td><?php echo $val['no_polisi'] ?></td>
			<td><?php echo 'Rp.'.number_format($val['biaya_sewa']).',-' ?></td>
            <td><?php echo $val['tgl_buat'] ?></td>
			<td>
				<a href="?page=detail_mobil&id=<?php echo $val['id_mobil']?>">Detail</a>
				<a href="?page=edit_mobil&id=<?php echo $val['id_mobil']?>">Edit</a>
				<a onclick="return confirm('Yakin Akan Dihapus ?')" href="?page=hapus_mobil&id=<?php echo $val['id_mobil']?>">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<?php }else{
	echo "Data Kosong Atau Tidak Ditemukan";
} ?>