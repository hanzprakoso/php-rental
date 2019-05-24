<?php
$db = new mobil;
$a = "SELECT * FROM tbl_jenis";
$mobil = $db->getById($_GET['id']);
$jenis = $db->run($a);
if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $a = $_POST['nama_mobil'];
	$b = $_POST['id_jenis'];
	$c = $_POST['keterangan'];
	$d = $_POST['no_polisi'];
	$e = $_POST['biaya_sewa'];
    $imgOld = $_POST['img_old'];
	$input = $db->putMobil($a, $b, $c, $d, $e, $id);
    if($input){
        if(isset($img)){
            $img = $id.".".pathinfo($_FILES['img']['name'],PATHINFO_EXTENSION);
            if(!file_exists("../assets/img/mobil/".$id."/")){
                mkdir("../assets/img/mobil/".$id."/");
                $db->addImg("../assets/img/mobil/".$id."/",$img,$_FILES['img']['tmp_name']);
                $db->deleteImg($imgOld, $id);
                $db->run("UPDATE tbl_mobil SET thumbnail = '$img'");
            }else{
                $db->addImg("../assets/img/mobil/".$id."/",$img,$_FILES['img']['tmp_name']);
                $db->deleteImg($imgOld, $id);
                $db->run("UPDATE tbl_mobil SET thumbnail = '$img'");
            }
        }
    ;
    }else{
        echo '<script>window.location = "?page=tabel_mobil";</script>'; 
    }
}
?>
<div class="card-panel">
    <h4 class="header2">Tambah Mobil</h4>
    <div class="row">
        <form class="col s12" method='post' enctype="multipart/form-data">
            <div class="row">
                <div class="input-field col s12">
                    <input id="nama_mobil" name='nama_mobil' type="text" value="<?php echo $mobil['nama_mobil'] ?>">
                    <label for="nama_mobil">Nama Mobil</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <select name="id_jenis" id='jenis'>
                        <option value='1' disabled>Pilih Jenis Mobil</option>
                        <?php foreach($jenis as $val){ 
                            if($mobil['id_jenis'] == $val['id_jenis']){
                        ?>
                        <option value="<?php echo $val['id_jenis']?>" selected><?php echo $val['jenis']?></option>
                        <?php } else if($mobil['id_jenis'] != $val['id_jenis']){?>
                        <option value="<?php echo $val['id_jenis']?>"><?php echo $val['jenis']?></option>
                        <?php } } ?>
                    </select>
                    <label for="jenis">Jenis Mobil</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="keterangan" name="keterangan" class="materialize-textarea"><?php echo $mobil['keterangan'] ?></textarea>
                    <label for="keterangan">Keterangan</label>
                </div>
            </div>
            <div class="row">
                <div class="file-field input-field">
                    <div class='btn'>
                        <span>Browse</span>
                        <input type="file" name='img' />
                        <input type="hidden" name='img_old' value="<?php echo $mobil['thumbnail'] ?>"/>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path" type="text" placeholder="Pilih Thumbnail" value="<?php echo $mobil['thumbnail']  ?>"  readonly />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input type='text' id="no_polisi" name='no_polisi' value="<?php echo $mobil['no_polisi'] ?>">
                    <label for="no_polisi">No Polisi</label>
                </div>
                <div class="input-field col s12">
                    <input type='number' id="biaya_sewa" name='biaya_sewa' value="<?php echo $mobil['biaya_sewa'] ?>">
                    <label for="biaya_sewa">Biaya Sewa</label>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button class="btn waves-effect waves-light right" type="submit" name="submit">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>