<?php 
	require('koneksi.php');

	if(isset($_POST['daftar'])){
		$username 		= $_REQUEST['username'];
		$password 	    = $_REQUEST['password'];
		$nama 	        = $_REQUEST['nama'];
		$telp 			= $_REQUEST['telp'];
		$email 			= $_REQUEST['email'];
		$jk 			= $_REQUEST['jk'];
		$alamat 	    = $_REQUEST['alamat'];

		$cek = mysqli_query($kon, "SELECT * FROM user WHERE username = '$username'");

		if(mysqli_num_rows($cek)==0){
			$hasil = mysqli_query($kon,"INSERT INTO user (username, password, nama, telp, email, jk,alamat,level) VALUES ('$username','$password','$nama','$telp','$email','$jk','$alamat','pelanggan')");
			if($hasil){
				?> <script>alert('Akun Berhasil Dibuat, Silahkan Login');window.location='login.php';</script> <?php
			}else{ 
				?> <script>alert('Gagal Membuat Akun!');window.location='login.php';</script> <?php
			}
		}else{
			?> <script>alert('Username Sudah Digunakan');window.location='login.php';</script> <?php
		}
	}

	mysqli_close($kon);
?>

