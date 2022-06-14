<?php 
require_once("koneksi.php"); session_start(); 

	$username 	= $_REQUEST['username'];
	$password	= $_REQUEST['password'];
	if(isset($_POST['go'])){
		$query = mysqli_query($kon, "SELECT * FROM user WHERE username='$username' AND password = '$password'");
		$cek  = mysqli_fetch_array($query);
		$kurirku = mysqli_query($kon, "SELECT * FROM kurir WHERE username='$username' AND password = '$password'");
		$yasin  = mysqli_fetch_array($kurirku);

		if($cek['level'] == 'admin'){
			$_SESSION['username'] = $username;
			$_SESSION['id'] = $cek['id'];
			$_SESSION['level'] = "admin";
			?> <script>window.location='laman/index.php'</script> <?php
		}else if($cek['level'] == 'pelanggan'){
			$_SESSION['username'] = $username;
			$_SESSION['id'] = $cek['id'];
			$_SESSION['level'] = "pelanggan";
			?> <script>window.location='index.php'</script> <?php
		}else if(mysqli_num_rows($kurirku) > 0){
			$_SESSION['username'] = $username;
			$_SESSION['idkurir'] = $yasin['idkurir'];
			?> <script>window.location='kurir/index.php'</script> <?php
		}else{
			?><script>window.location="login.php?m=gagal"; </script><?php
		}			
	}
?>