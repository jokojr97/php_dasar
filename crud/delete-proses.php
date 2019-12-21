<?php
	// Start the session
	session_start();
	//memanggil koneksi
	include("koneksi.php");
	//nangkap kiriman data
    $nama=$_GET['id'];	

	//salah
		//memasukkan data
		$query=mysql_query("DELETE FROM user where nama='$nama'");
		header('location:ui-halaman-admin.php');
	
?>