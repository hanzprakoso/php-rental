<?php
include_once 'controller/auth.php';
$auth = new auth;
session_start();
if($_SESSION['user'] != 'admin' ){
	header('location:../');
}

if(isset($_POST['login'])){
	$a = $_POST['username'];
	$b = $_POST['password'];
	$login = $auth->loginAdmin($a, $b);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Dashboard</title>
</head>
<body>
	<div class="login">
	<form method="post">
		<label>Username</label>
		<input type="text" name="username" placeholder="Masukan Username Atau Email" required>
		<label>Password</label>
		<input type="password" name="password" placeholder="Masukan Password" required>
		<input type="submit" name="login" value="Login">
	</form>
</div>
</body>
</html>