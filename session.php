<!-- cek apakah sudah login -->
	<?php
	session_start();
	include 'koneksi.php';
	$_SESSION['username'];
	if($_SESSION['status']!="login"){
		header("location:index.php?pesan=belum_login");
	}
	?>
