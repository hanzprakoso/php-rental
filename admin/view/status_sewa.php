<?php
$db = new mobil;
$a = "SELECT * FROM tbl_sewa INNER JOIN tbl_pelanggan ON tbl_pelanggan.username = tbl_sewa.username INNER JOIN tbl_mobil ON tbl_mobil.id_mobil = tbl_sewa.id_mobil";
$tampil = $db->run($a);
?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Mobil</th>
            <th>Plat Nomer</th>
            <th>Nama Penyewa</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
		$no = 0;
		foreach($tampil as $val){
			$no++;
	?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $val['nama_mobil'] ?></td>
            <td><?php echo $val['no_polisi'] ?></td>
            <td><?php echo $val['nama_lengkap'] ?></td>
            <td><?php echo $val['no_telp'] ?></td>
            <td>
                <pre style="margin: 0"><?php echo $val['alamat'] ?></pre>
            </td>
            <td><?php echo $val['tgl_mulai'] ?></td>
            <td><?php echo $val['tgl_selesai'] ?></td>
            <td><a href="?page=transaksi&id=<?php echo $val['id_sewa'] ?>">Selesai</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php

//$begin = new DateTime( '2012-08-01 00:00:00' );
//$end = new DateTime( '2012-08-01 10:00:00' );
//$end = $end->modify( '+1 hour' ); 
//
//$interval = new DateInterval('P1D');
//$daterange = new DatePeriod($begin, $interval ,$end);
//
//foreach($daterange as $date){
//    echo $date->format("Ymd") . "<br>";
//}
?>
