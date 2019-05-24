<?php
$db = new mobil;
$auth = new auth;
$auth->isLogin();
$tampil = $db->getById($_GET['id']);
$user = $auth->getUser($_SESSION['user']);
if(isset($_POST['submit'])){
    $a = $_GET['id'];
    $b = $_SESSION['user'];
    $c = $_POST['tgl_mulai'];
    $d = $_POST['tgl_selesai'];
	$input = $db->sewaMobil($a, $b, $c, $d);
    if(!$input){
        echo $input;
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col s12 m6 l6 xl6">
            <h5 class="header">Informasi Mobil</h5>
            <br>
            <div class="row">
                <div class="col s2">Nama Mobil</div>
                <div class="col s10"><?php echo $tampil['nama_mobil'] ?></div>
            </div>
            <div class="row">
                <div class="col s2">Jenis</div>
                <div class="col s10"><?php echo $tampil['jenis'] ?></div>
            </div>
            <div class="row">
                <div class="col s2">Keterangan</div>
                <div class="col s10"><?php echo $tampil['keterangan'] ?></div>
            </div>
            <div class="row">
                <div class="col s2">Biaya Sewa</div>
                <div class="col s10">Rp. <?php echo number_format($tampil['biaya_sewa']) ?>,-</div>
            </div>
        </div>
        <div class="col s12 m6 l6 xl6">
            <h5 class="header">Informasi Pelanggan</h5>
            <br>
            <div class="row">
                <div class="col s2">Nama Lengkap</div>
                <div class="col s10"><?php echo $user['nama_lengkap'] ?></div>
            </div>
            <div class="row">
                <div class="col s2">Email</div>
                <div class="col s10"><?php echo $user['email'] ?></div>
            </div>
            <div class="row">
                <div class="col s2">No Telp</div>
                <div class="col s10"><?php echo $user['no_telp'] ?></div>
            </div>
            <div class="row">
                <div class="col s2">Alamat</div>
                <div class="col s10">
                    <pre style="margin: 0"><?php echo $user['alamat'] ?></pre>
                </div>
            </div>
        </div>
    </div>
    <h5>Waktu Penyewaan</h5>
    <form method="post">
        <div class="row">
            <div class="col s2">Tanggal Menyewa</div>
            <div class="col s10"><input type="date"  name="tgl_mulai"></div>
        </div>
        <div class="row">
            <div class="col s2">Tanggal Mengembalikan</div>
            <div class="col s10"><input type="date"  name="tgl_selesai"></div>
        </div><input type="submit" name="submit" value="Sewa Sekarang">
    </form>
</div>
