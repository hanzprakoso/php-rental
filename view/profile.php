<?php
session_start();
$auth = new auth;
$auth->isLogin();
$user = $auth->getUser($_SESSION['user']);
?>
<div>
	<pre>
		Nama Lengkap : <?php echo $user['nama_lengkap'] ?>
		Username	 : <?php echo $user['username'] ?>
		Email		 : <?php echo $user['email'] ?>
		No Telp		 : <?php echo $user['no_telp'] ?>
		Alamat		 : <?php echo $user['alamat'] ?>
	</pre>
</div>