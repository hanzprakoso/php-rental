<?php
$db = new mobil;
$tampil = $db->getById($_GET['id']);
?>
<div class="container">
    <div class="row">
        <div class="col xl6 l6 m6 s12">
            <img src="assets/img/mobil/<?php echo ($tampil['thumbnail'] == '0') ? 'default.jpg' : $tampil['id_mobil'].'/'.$tampil['thumbnail']?>">
        </div>
        <div class="card col xl6 l6 m6 s12">
            <div class="row">
                <div class="col s12 m3 l3 xl3">Nama Mobil<span class="right">:</span></div>
                <div class="col s12 m9 l9 xl9"><?php echo $tampil['nama_mobil'] ?></div>
            </div> 
            <div class="row">
                <div class="col s12 m3 l3 xl3">Jenis<span class="right">:</span></div>
                <div class="col s12 m9 l9 xl9"><?php echo $tampil['jenis'] ?></div>
            </div>
            <div class="row">
                <div class="col s12 m3 l3 xl3">Keterangan<span class="right">:</span></div>
                <div class="col s12 m9 l9 xl9"><pre style="margin: 0"><?php echo $tampil['keterangan'] ?></pre></div>
            </div>
            <div class="row">
                <div class="col s12 m3 l3 xl3">Biaya Sewa<span class="right">:</span></div>
                <div class="col s12 m9 l9 xl9">Rp. <?php echo number_format($tampil['biaya_sewa']) ?>,-</div>
            </div>
            <div class="row">
                <a href="?page=sewa_mobil&id=<?php echo $tampil['id_mobil'] ?>">Sewa Sekarang</a>
            </div>
        </div>
    </div>
</div>
