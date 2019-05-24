<?php
$db = new mobil;
$tampil = $db->getAll();

if($tampil->num_rows > 0){
?>

    <div class="row container">
        <?php foreach($tampil as $val){ ?>
        <div class="card col s6 m4 l4 xl3">
            <div class="card-image">
                <img class="thumbnail" src="assets/img/mobil/<?php echo ($val['thumbnail'] == '0') ? 'default.jpg' : $val['id_mobil'].'/'.$val['thumbnail']?>">
            </div>
            <div class="card-content">
                <p class="card-title home"><?php echo $val['nama_mobil']?></p>
            </div>
            <div class="card-action">
                <span>Rp. <?php echo number_format($val['biaya_sewa']) ?><sub>/Hari</sub></span>
                <a class="right" href="?page=detail_mobil&id=<?php echo $val['id_mobil'] ?>">Pilih</a>
            </div>
        </div>
        <?php } }else{ echo "Data Kosong"; } ?>
    </div>
