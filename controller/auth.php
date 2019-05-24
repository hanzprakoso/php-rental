<?php
include_once 'database.php';

class auth extends database{

	function register($a, $b, $c, $d, $e, $f, $g){
		$sql = "INSERT INTO tbl_pelanggan VALUES('$a', '$b', '$c', '$d,' '$e', '$f', '$g')";
		$hasil = $this->aksi->query($sql);
		if(!hasil){
			header('location:error.php?err=auth');
		}
	}

	function login($a, $b){
		$sql = "SELECT * FROM tbl_pelanggan WHERE username = '".$a."' OR email = '".$a."' AND password = '".$b."'";
		$login = $this->aksi->query($sql);
		if($login->num_rows > 0){
			session_start();
			$_SESSION['status'] = 'login';
			$_SESSION['user'] = $a;
			header("location:?page=home");
		}else{
			header("location:auth.php");
		}
	}

	function loginAdmin($a, $b){
		$sql = "SELECT * FROM tbl_admin WHERE username = '".$a."' OR email = '".$a."' AND password = '".$b."'";
		$login = $this->aksi->query($sql);
		if($login->num_rows > 0){
			session_start();
			$_SESSION['status'] = 'login';
			$_SESSION['user'] = $a;
			$_SESSION['admin'] = '1';
			header("location:admin/?page=home");
		}else{
			header("location:auth.php?username atau password salah");
		}
	}

	function isLogin(){
		session_start();
		if($_SESSION['status'] != 'login'){
			header("location:auth.php");
		}
	}

	function getUser($u){
		$sql = "SELECT * FROM tbl_pelanggan WHERE username = '$u'";
		$hasil = $this->aksi->query($sql);
		if($hasil){
			$data = $hasil->fetch_array();
			return $data;
		}
	}

	function restrict(){
		session_start();
		if($_SESSION['status'] != 'login' || $_SESSION['admin'] !='1'){
			header("location:error.php?error=403-FORBIDDEN");
		}
	}

	function logout(){
		session_start();
		session_destroy();
		header('location:auth.php');
	}
}
?>