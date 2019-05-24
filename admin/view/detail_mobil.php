<?php
$db = new mobil;
$tampil = $db->getById($_GET['id']);
?>
<p><?php echo $tampil['nama_mobil'] ?></p>
<p><?php echo $tampil['jenis'] ?></p>
<p><?php echo $tampil['no_polisi'] ?></p>
<pre><?php echo $tampil['keterangan'] ?></pre>
<p><?php echo number_format($tampil['biaya_sewa'])?></p>
<a href="?page=$id=<?php echo $tampil['id_mobil']?>">Edit</a>
<a href="?page=$id=<?php echo $tampil['id_mobil']?>">Hapus</a>