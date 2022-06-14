<?php require('header.php'); require('koneksi.php');
	mysqli_query($kon, "DELETE FROM favorit WHERE idfavorit='$_REQUEST[idfavorit]'"); 
	?><script>alert('Berhasil Dihapus');window.location='index.php';</script> <?php
 ?>