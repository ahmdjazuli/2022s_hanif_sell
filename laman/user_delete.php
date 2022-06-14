<?php
	error_reporting(0); 
	require('../koneksi.php');
	$chk = $_POST['checked'];
	$idBuku = $_REQUEST['idBuku'];
	$query = mysqli_query($kon, "SELECT * FROM stok WHERE idBuku='$idBuku'");
	$data = mysqli_fetch_array($query);
	unlink('../'.$data['foto']);
	mysqli_query($kon, "DELETE FROM stok WHERE idBuku='$idBuku'");
	?> <script>window.location='user.php?m=hapus';</script> <?php
?>