<?php
$db = new mobil;
$a = "SELECT * FROM tbl_jenis";
$jenis = $db->run($a);
$uniqid = uniqid();
$id = substr($uniqid, 4, 9);
if(isset($_POST['submit'])){
	$a = $_POST['nama_mobil'];
	$b = $_POST['id_jenis'];
	$c = $_POST['keterangan'];
	$d = $_POST['no_polisi'];
	$e = $_POST['biaya_sewa'];
	$id = strtolower(trim($a," "));
    $f = $id.".".pathinfo($_FILES['img']['name'],PATHINFO_EXTENSION);
	$input = $db->addMobil($id, $a, $b, $c, $d, $e, $f);
    if($input){
        if(!file_exists("../assets/img/mobil/".$id."/")){
            mkdir("../assets/img/mobil/".$id."/");
            $db->addImg("../assets/img/mobil/".$id."/",$f,$_FILES['img']['tmp_name']);
        }else{
            $db->addImg("../assets/img/mobil/".$id."/",$f,$_FILES['img']['tmp_name']);
        }
    }else{
        echo $input;
    }
}
?>
<div class="card-panel">
    <h4 class="header2">Tambah Mobil</h4>
    <div class="row">
        <form class="col s12" method='post' enctype="multipart/form-data">
            <div class="row">
                <div class="input-field col s12">
                    <input id="nama_mobil" name='nama_mobil' type="text">
                    <label for="nama_mobil">Nama Mobil</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <select id="jenis" name='id_jenis'>
                        <option value='1' disabled selected>Pilih Jenis Mobil</option>
                        <?php foreach($jenis as $v){ ?>
                        <option value="<?php echo $v['id_jenis']?>"><?php echo $v['jenis']?></option>
                        <?php } ?>
                    </select>
                    <label for="jenis">Jenis Mobil</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="keterangan" name="keterangan" class="materialize-textarea"></textarea>
                    <label for="keterangan">Keterangan</label>
                </div>
            </div>
            <div class="row">
                <div class="file-field input-field">
                    <div class='btn'>
                        <span>Browse</span>
                        <input type="file" name='img' />
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Pilih Thumbnail" readonly />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input type='text' id="no_polisi" name='no_polisi'>
                    <label for="no_polisi">No Polisi</label>
                </div>
                <div class="input-field col s12">
                    <input type='number' id="biaya_sewa" name='biaya_sewa'>
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
