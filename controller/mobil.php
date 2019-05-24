<?php
include_once "database.php";

class mobil extends database{

	function run($a){
		$b = $this->aksi->query($a) or die($this->aksi->error);
		if($b){
			return $b;
		}
		else{
			header('location:error.php?err=3');
		}
	}
    
    function run2($a){
		$b = $this->aksi->query($a) or die($this->aksi->error);
		if($b){
            $data = $b->fetch_array();
			return $data;
		}
		else{
			header('location:error.php?err=3');
		}
	}

	function getAll(){
		$a = "SELECT * FROM tbl_mobil INNER JOIN tbl_jenis ON tbl_mobil.id_jenis = tbl_jenis.id_jenis ORDER BY tgl_buat DESC";
		$b = $this->aksi->query($a);
		if($b){
			return $b;
		}
		else{
            echo $this->aksi->error;
		}
	}
    
	function getById($a){
		$a = "SELECT * FROM tbl_mobil INNER JOIN tbl_jenis ON tbl_mobil.id_jenis = tbl_jenis.id_jenis WHERE id_mobil = '".$a."'";
		$hasil = $this->aksi->query($a) or die($this->aksi->error);
		if($hasil){
			$data = $hasil->fetch_array();
			return $data;
		}else{
			return $hasil;
		}
	}

	function addMobil($id, $a, $b, $c, $d, $e, $f){
		$a = "INSERT INTO tbl_mobil VALUES('$id', '$a', '$b', '$c', '$d', '$e', '$f', CURRENT_TIMESTAMP)";
		$hasil = $this->aksi->query($a) or die($this->aksi->error);
		if($hasil){
			return true;
		}else{
			return $hasil;
		}
	}

	function putMobil($a, $b, $c, $d, $e, $id){
		$a = "UPDATE tbl_mobil SET nama_mobil = '$a', id_jenis = '$b', keterangan = '$c', no_polisi = '$d', biaya_sewa = '$e' WHERE id_mobil = '$id'";
		$hasil = $this->aksi->query($a);
		if($hasil){
			return true;
		}else{
			return false;
		}
	}
    
    function deleteMobil($a){
        $b = "DELETE FROM tbl_mobil WHERE id_mobil = '$a'";
        $hasil = $this->aksi->query($b) or die($this->aksi->error);
        if($hasil){
			return true;
		}else{
			return $hasil;
		}
        
    }
    
    function addImg($lokasi, $file, $src){
	 	if(!file_exists($lokasi."/".$file)){
			move_uploaded_file($src,$lokasi.$file);
		}
	 }

    
    function putImg($id, $imgOld, $imgNew){

		 //file_exist untuk cek keberadaan file
		 if(file_exists("../assets/img/mobil/".$id.$imgOld)){
			unlink($imgOld); //untuk menghapus file gambar
		 }

		 $upload = move_uploaded_file($imgNew, $location."/".$filebaru);
		 if($upload){
		$tgl_edit = date('Y-m-d H:i:s');// mencatat terakhir diedit
	 	$query = "UPDATE tbl_barang set gambar = '".$file."' where id_barang = '".$id_barang."'";
	//menjalankan perintah query
	 	$hasil = $this->aksi->query($query) or die($this->aksi->error);
		if($hasil){
			return true;
		}else{
			return false;
	 	     }
		   }
	 }
    
    function deleteImg($img, $id){
        if(!file_exists('../assets/img/mobil/'.$id.'/'.$img)){
			unlink($img);
		}
    }

	function sewaMobil($a, $b, $c, $d){
		$a = "INSERT INTO tbl_sewa VALUES('', '$a', '$b', '$c', '$d')";
		$hasil = $this->aksi->query($a) or die($this->aksi->error);
		if($hasil){
			return true;
		}else{
			return $hasil;
			header('location:?page=home');
		}
	}
	function getSewa(){
		$a = "SELECT * FROM tbl_sewa INNER JOIN tbl_pelanggan ON tbl_pelanggan.username = tbl_sewa.username INNER JOIN tbl_mobil ON tbl_mobil.id_mobil = tbl_sewa.id_mobil";
		$b = $this->aksi->query($a) or die($this->aksi->error);
		if($b){
			return true;
		}
		else{
			return  $b;
		}
	}
    
    function addLaporan($a, $b, $c, $d, $e, $f, $g){
        $a = "INSERT INTO tbl_laporan VALUES('', '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', CURRENT_TIMESTAMP)";
        $b = $this->aksi->query($a) or die($this->aksi->error);
        if($b){
            return true;
        }else{
            return $b;
        }
    }
    
    function getLaporan(){
        $a = "SELECT * FROM tbl_laporan INNER JOIN tbl_mobil ON tbl_laporan.id_mobil = tbl_mobil.id_mobil 
                INNER JOIN tbl_pelanggan ON tbl_laporan.username = tbl_pelanggan.username";
        $b = $this->aksi->query($a) or die($this->aksi->error);
        if($b){
            return true
        }else{
            return $b;
        }
    }

}
?>