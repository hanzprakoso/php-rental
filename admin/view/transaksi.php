<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    echo "<script>window.location = '?page=status_sewa'</script>";
}
$db = new mobil;
$a = "SELECT * FROM tbl_sewa INNER JOIN tbl_pelanggan ON tbl_pelanggan.username = tbl_sewa.username INNER JOIN tbl_mobil ON tbl_mobil.id_mobil = tbl_sewa.id_mobil WHERE id_sewa = '$id'";
$tampil = $db->run2($a);

if(isset($_POST['submit'])){
    $a = $_POST['username'];
    $b = $_POST['id_mobil'];
    $c = $_POST['tgl_mulai'];
    $d = $_POST['tgl_selesai'];
    $e = $_POST['tgl_pengembalian'];
    $f = $_POST['denda'];
    $g = $_POST['total'];
    $h = $_POST['bayar'];
    $input = $db->addLaporan($a, $b, $c, $d, $e, $f, $g, $h);
}
?>
<div>
    <form class="col s12" method='post'>
        <div class="row">
            <div class="input-field col s12">
                <input name='username' type="hidden" value="<?php echo $tampil['username'] ?>">
                <input id="nama_lengkap" name='nama_lengkap' type="text" value="<?php echo $tampil['nama_lengkap'] ?>" readonly>
                <label for="nama_lengkap">Nama Lengkap</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="nama_mobil" name='nama_mobil' type="text" value="<?php echo $tampil['nama_mobil'] ?>" readonly>
                <input type="hidden" name="id_mobil" value="<?php echo $tampil['id_mobil'] ?>">
                <label for="nama_mobil">Nama Mobil</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="no_polisi" name='no_polisi' type="text" value="<?php echo $tampil['no_polisi'] ?>" readonly>
                <label for="no_polisi">No Polisi</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="biaya_sewa" name='biaya_sewa' type="text" value="<?php echo $tampil['biaya_sewa'] ?>" readonly>
                <label for="biaya_sewa">Biaya Sewa</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="tgl_mulai" name='tgl_mulai' type="text" value="<?php echo $tampil['tgl_mulai'] ?>" readonly>
                <label for="tgl_mulai">Tanggal Mulai</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="tgl_selesai" name='tgl_selesai' type="text" value="<?php echo $tampil['tgl_selesai'] ?>" readonly>
                <label for="tgl_selesai">Tanggal Selesai</label>
            </div>
        </div>
        <!--        isi manual-->
        <div class="row">
            <div class="input-field col s12">
                <input id="tgl_pengembalian" name='tgl_pengembalian' class="validate" placeholder="" type="date" onblur="hitungDenda();" required>
                <label for="tgl_pengembalian">Tanggal Pengembalian</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="denda" name='denda' type="number" readonly>
                <label for="denda">Denda</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="total" name='total' type="number" readonly>
                <label for="total">Total</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="bayar" name='bayar' type="number" required>
                <label for="bayar">Bayar</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <button class="btn waves-effect waves-light right" type="submit" name="submit">Submit
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
    </form>
</div>
<script>
    const hitungDenda = () =>{
        let cost = document.getElementById('biaya_sewa').value;
        let denda = document.getElementById('denda');
        let total = document.getElementById('total');
        let a = document.getElementById('tgl_mulai').value;
        let b = document.getElementById('tgl_selesai').value;
        let c = document.getElementById('tgl_pengembalian').value;
        let date1 = new Date(a);
        let date2 = new Date(b);
        let date3 = new Date(c);
        let hari = (date2 - date1)/86400000
        let x = (date2 - date1)/3600000;
        let y = ((date3 - date1) - 25200000)/3600000 ;
        let z = ((date3 - date2) - 25200000)/3600000 ;
        if(x < y){
            Math.floor(y);
            denda.value = ((cost * (10/100)) * z)/2;
            total.value = (((cost * (10/100)) * z)/2) + (cost * Math.floor(hari));
        }else{
            denda.value = 0;
        }
    }
</script>
