<?php require('header.php'); require('koneksi.php');
	$idtanam = $_REQUEST['idtanam'];
	$tgl = date('Y-m-d');
	$cek = mysqli_query($kon, "SELECT * FROM favorit WHERE idtanam = '$idtanam' AND id = '$memori[id]'");
	if (mysqli_num_rows($cek) > 0) {
		?><script>alert('Sudah Ada di Favoritmu');window.location='index.php';</script> <?php
	}else{
		mysqli_query($kon,"INSERT INTO favorit(tgl, idtanam, id) VALUES ('$tgl','$idtanam','$memori[id]')"); ?><script>alert('Berhasil Disimpan');window.location='favorit.php';</script> <?php
	}
 ?>