<?php 
	require_once("koneksi.php"); 
	require_once("delete.php"); 
	error_reporting(0); 
	session_start(); 
	date_default_timezone_set('Asia/Kuala_Lumpur');
	$level      = $_SESSION['level'];
    $username   = $_SESSION['username'];
    $query      = mysqli_query($kon,"SELECT * FROM user WHERE level='$level' AND username = '$username'");
    $memori       = mysqli_fetch_array($query);
    $_SESSION['id'] = $memori['id'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<title>Hanif Komputer</title>
<link href="assets/fonts/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
<link rel="shortcut favicon" href="assets/icon/logo.ico">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/icon/hanif.jfif" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/icon/hanif.jfif" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/icon/hanif.jfif" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/icon/hanif.jfif" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="assets/icon/hanif.jfif" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="assets/icon/hanif.jfif" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="assets/icon/hanif.jfif" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="assets/icon/hanif.jfif" />
<link rel="icon" type="image/png" href="assets/icon/hanif.jfif" sizes="196x196" />
<link rel="icon" type="image/png" href="assets/icon/hanif.jfif" sizes="96x96" />
<link rel="icon" type="image/png" href="assets/icon/hanif.jfif" sizes="32x32" />
<link rel="icon" type="image/png" href="assets/icon/hanif.jfif" sizes="16x16" />
<link rel="icon" type="image/png" href="assets/icon/hanif.jfif" sizes="128x128" />
<meta name="application-name" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="assets/icon/hanif.jfif" />
<meta name="msapplication-square70x70logo" content="assets/icon/hanif.jfif" />
<meta name="msapplication-square150x150logo" content="assets/icon/hanif.jfif" />
<meta name="msapplication-wide310x150logo" content="assets/icon/hanif.jfif" />
<meta name="msapplication-square310x310logo" content="assets/icon/hanif.jfif" />
</head>
<body>
<header class="item header margin-top-0">
<div class="wrapper">
<nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
<div class="container">
	<div class="navbar-header">
		<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
		<i class="fa fa-bars"></i>
		<span class="sr-only">Toggle navigation</span>
		</button>
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
		<ul class="nav navbar-nav navbar-right">
			<li class="propClone"><a href="index.php">Halaman Depan</a></li>
			<?php if($memori['level']=='pelanggan'){ ?>
				<li class="propClone"><a href="favorit.php">Favorit</a></li>
				<li class="propClone"><a href="keranjang.php">Troli</a></li>
				<li class="propClone"><a href="cek.php">Tas Belanja</a></li>
				<li class="propClone"><a href="profil.php">Profil</a></li>
				<li class="propClone"><a href="riwayatbeli.php">Riwayat Pembelian</a></li>
				<li class="propClone"><a href="pengiriman.php">Cek Pengiriman</a></li>
				<li class="propClone"><a href="logout.php">Logout</a></li><?php
			}else{ ?>
				<li class="propClone"><a href="login.php">Login</a></li>
			<?php } ?>
		</ul>
	</div>
	</div>
	
</div>
</nav>

