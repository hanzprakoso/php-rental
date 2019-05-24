<?php
include_once 'controller/auth.php';
$auth = new auth;

if(isset($_POST['login'])){
	$a = $_POST['username'];
	$b = $_POST['password'];
	$login = $auth->login($a, $b);
}else if(isset($_POST['register'])){
	$a = 'P_'.$_POST['username'];
	$b = $_POST['username'];
	$c = $_POST['password'];
	$d = $_POST['nama_lengkap'];
	$e = $_POST['email'];
	$f = $_POST['no_telp'];
	$g = $_POST['alamat'];
	$register = $auth->register($a, $b, $c, $d, $e, $f, $g);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/vendors/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/ionicons/css/ionicons.min.css">
	<script type="text/javascript" src="assets/vendors/jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/vendors/materialize/js/materialize.min.js"></script>
	<script type="text/javascript" src="assets/js/route.js"></script>
</head>
<body>
	<div class="main"></div>
</body>
<script>
    $(document).ready(function(){
	$(".link").click(function(){
		let a = $(this).attr('id');
		if(a == 'login'){
			$(".main").load("view/login.php");
		}
		else if(a == 'register'){
			$(".main").load("view/register.php");
		}
	});
	$(".main").load("view/login.php");
});
</script>
</html>