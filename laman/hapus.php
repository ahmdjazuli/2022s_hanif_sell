<?php
	session_start();
	error_reporting(0);
	require_once("../koneksi.php");
	?><script>alert('Data Berhasil Dihapus');</script><?php
	// user
	if (isset($_GET['id'])) {
		$query = mysqli_query($kon, "SELECT * FROM user WHERE id='$_REQUEST[id]'");
		$data = mysqli_fetch_array($query);
		unlink('../'.$data['foto']);
		mysqli_query($kon, "DELETE FROM user WHERE id='$_REQUEST[id]'"); 
		?><script>window.location='user.php'</script><?php
	// ongkir
	}else if (isset($_GET['idongkir'])) {
		mysqli_query($kon, "DELETE FROM ongkir WHERE idongkir='$_REQUEST[idongkir]'");
		?> <script>window.location='ongkir.php';</script> <?php
	// tanam
	}else if (isset($_GET['idtanam'])) {
		$query = mysqli_query($kon, "SELECT * FROM tanam WHERE idtanam='$_REQUEST[idtanam]'");
		$data = mysqli_fetch_array($query);
		unlink('../img/'.$data['gambar']);
		mysqli_query($kon, "DELETE FROM tanam WHERE idtanam='$_REQUEST[idtanam]'"); 
		?><script>window.location='tanam.php'</script><?php
	// tanammasuk
	}else if (isset($_GET['idtanammasuk'])) {
		mysqli_query($kon, "DELETE FROM tanammasuk WHERE idtanammasuk='$_REQUEST[idtanammasuk]'"); 
		?><script>window.location='tanammasuk.php'</script><?php
	// beli
	}else if (isset($_GET['idbeli']) AND $_GET['level'] == 'pelanggan') {
		$query = mysqli_query($kon, "SELECT * FROM beli WHERE idbeli='$_REQUEST[idbeli]'");
		$data = mysqli_fetch_array($query);
		unlink('../img/'.$data['bukti']);
		mysqli_query($kon, "DELETE FROM beli WHERE idbeli='$_REQUEST[idbeli]'"); 
		?><script>window.location='beli.php'</script><?php
	// transaksi
	}else if (isset($_GET['idbeli']) AND $_GET['level'] == 'reseller') {
		$query = mysqli_query($kon, "SELECT * FROM beli WHERE idbeli='$_REQUEST[idbeli]'");
		$data = mysqli_fetch_array($query);
		unlink('../img/'.$data['bukti']);
		mysqli_query($kon, "DELETE FROM beli WHERE idbeli='$_REQUEST[idbeli]'"); 
		?><script>window.location='transaksi.php'</script><?php
	// service
	}else if (isset($_GET['idservice'])) {
		mysqli_query($kon, "DELETE FROM service WHERE idservice='$_REQUEST[idservice]'"); 
		?><script>window.location='service.php'</script><?php
	// kurir
	}else if (isset($_GET['idkurir'])) {
		mysqli_query($kon, "DELETE FROM kurir WHERE idkurir='$_REQUEST[idkurir]'"); 
		?><script>window.location='kurir.php'</script><?php
	// pengeluaran
	}else if (isset($_GET['idpengeluaran'])) {
		mysqli_query($kon, "DELETE FROM pengeluaran WHERE idpengeluaran='$_REQUEST[idpengeluaran]'"); 
		?><script>window.location='pengeluaran.php'</script><?php
	// kirim
	}else if (isset($_GET['idkirim'])) {
		$query = mysqli_query($kon, "SELECT * FROM kirim WHERE idkirim='$_REQUEST[idkirim]'");
		$data = mysqli_fetch_array($query);
		unlink('../'.$data['foto']);
		mysqli_query($kon, "DELETE FROM kirim WHERE idkirim='$_REQUEST[idkirim]'"); 
		?><script>window.location='kirim.php'</script><?php
	}else if (isset($_GET['idtanamrusak'])) {
		mysqli_query($kon, "DELETE FROM tanamrusak WHERE idtanamrusak='$_REQUEST[idtanamrusak]'"); 
		?><script>window.location='tanamrusak.php'</script><?php
	// beli
	}
?>