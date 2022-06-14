<?php 
	session_start();
	$idtanam = $_GET['idtanam'];
	unset($_SESSION['keranjang'][$idtanam]);

	?><script>alert('Produk dihapus dari Troli Belanja');
	window.location = 'keranjang.php';</script><?php
?>