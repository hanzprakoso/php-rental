<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

if(isset($_GET['err'])){
	$a = $_GET['err'];
}else{
	$a = 'aman';
}

switch ($a) {
	case '1':
		echo '<h1>Gagal Connect Database</h1>';
		break;
	case '2':
		echo '<h1>Gagal Tampil Data</h1>';
		break;
	case '3':
		echo '<h1>Gagal Run SQL</h1>';
		break;
	case '4':
		echo '<h1>Gagal Tambah atau Update</h1>';
		break;
	case 'auth':
		echo '<h1>Gagal Login</h1>';
		break;
	case '403-forbidden':
		echo '<h1>403 FORBIDDEN</h1>';
		break;
	case 'aman':
		echo '<h1>Tidak Ada Masalah</h1>';
		break;
	default:
		echo "aman";
		break;
}
?>
</body>
</html>
