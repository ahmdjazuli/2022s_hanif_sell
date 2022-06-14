<?php 
	error_reporting(0);
	session_start();
	$idtanam = $_REQUEST['idtanam'];
	$jumlah = $_REQUEST['jumlah'];

	if($_SESSION['level']==""){
    	?><script>alert('Login Terlebih Dahulu!');
		window.location = 'login.php';</script><?php
  	}else{
  		if(isset($_SESSION['keranjang'][$idtanam])){
			$_SESSION['keranjang'][$idtanam]+=$jumlah;
		}else{
			$_SESSION['keranjang'][$idtanam]=$jumlah;
		}

		?><script>alert('Produk telah Masuk ke Keranjang Belanja');
		window.location = 'keranjang.php';</script><?php 
  	}

?>

