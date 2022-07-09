<?php
  SESSION_START();
  require "../koneksi.php"; require('../tgl_indo.php');
  date_default_timezone_set('Asia/Kuala_Lumpur');
    // $level      = $_SESSION['level'];
    // $username   = $_SESSION['username'];
    // $query      = mysqli_query($kon,"SELECT * FROM user WHERE level='$level' AND username = '$username'");
    // $skuy       = mysqli_fetch_array($query);
    // $_SESSION['id'] = $skuy['id'];
    // $id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hanif Komputer</title>
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../assets/icon/hanif.jfif" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/icon/hanif.jfif" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/icon/hanif.jfif" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/icon/hanif.jfif" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="../assets/icon/hanif.jfif" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../assets/icon/hanif.jfif" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="../assets/icon/hanif.jfif" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../assets/icon/hanif.jfif" />
    <link rel="icon" type="image/png" href="../assets/icon/hanif.jfif" sizes="196x196" />
    <link rel="icon" type="image/png" href="../assets/icon/hanif.jfif" sizes="96x96" />
    <link rel="icon" type="image/png" href="../assets/icon/hanif.jfif" sizes="32x32" />
    <link rel="icon" type="image/png" href="../assets/icon/hanif.jfif" sizes="16x16" />
    <link rel="icon" type="image/png" href="../assets/icon/hanif.jfif" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="../assets/icon/hanif.jfif" />
    <meta name="msapplication-square70x70logo" content="../assets/icon/hanif.jfif" />
    <meta name="msapplication-square150x150logo" content="../assets/icon/hanif.jfif" />
    <meta name="msapplication-wide310x150logo" content="../assets/icon/hanif.jfif" />
    <meta name="msapplication-square310x310logo" content="../assets/icon/hanif.jfif" />
  <link rel="stylesheet" href="../assets/fonts/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
  <link rel="stylesheet" href="../assets/css/costum.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-select/css/searchPanes.dataTables.min.css">
  <link rel="stylesheet" href="../assets/plugins/sweetalert2/dark.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> 
</head>
<body class="hold-transition layout-top-nav text-md layout-fixed">
<div class="wrapper">
<!-- Navbar -->

<nav class="main-header navbar navbar-expand-md navbar-light navbar-black">
  <div class="container-fluid">
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <span class='badge bg-dark' style="font-size: 100%;"><span style="font-weight: normal;">admin</span></span>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php" data-toggle="tooltip" title="Home"><i class="fas fa-home"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tanam.php" data-toggle="tooltip" title="Data Barang"><i class="fas fa-laptop-code"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="supplier.php" data-toggle="tooltip" title="Data Supplier"><i class="fas fa-toolbox"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service.php" data-toggle="tooltip" title="Data Service"><i class="fab fa-servicestack"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ongkir.php" data-toggle="tooltip" title="Data Ongkir"><i class="fas fa-file-invoice-dollar"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pengeluaran.php" data-toggle="tooltip" title="Data Pengeluaran"><i class="fas fa-rocket"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user.php" data-toggle="tooltip" title="Data Pengguna"><i class="fas fa-user-astronaut"></i></a>
          </li>
          <li class="nav-item text-white"> <a class="nav-link" href="#">|</a> </li>
           <li class="nav-item">
            <a class="nav-link" href="kurir.php" data-toggle="tooltip" title="Kurir"><i class="fas fa-user-circle"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tanammasuk.php" data-toggle="tooltip" title="Barang Masuk"><i class="fas fa-inbox"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tanamrusak.php" data-toggle="tooltip" title="Barang Rusak"><i class="fas fa-file"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="favorit.php" data-toggle="tooltip" title="Favorit"><i class="fas fa-star"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="beli.php" data-toggle="tooltip" title="Transaksi Penjualan"><i class="fas fa-shopping-bag"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transaksi.php" data-toggle="tooltip" title="Transaksi Service"><i class="fab fa-flipboard"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kirim.php" data-toggle="tooltip" title="Pengiriman"><i class="fas fa-shipping-fast"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ulasan.php" data-toggle="tooltip" title="Ulasan"><i class="fas fa-star"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pendapatan1.php" data-toggle="tooltip" title="Pendapatan Bulanan"><i class="fas fa-medkit"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="grafik1.php" data-toggle="tooltip" title="Grafik Statistik Penjualan"><i class="fas fa-plus-square"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="grafik2.php" data-toggle="tooltip" title="Grafik Pendapatan Bulanan"><i class="fas fa-file-invoice-dollar"></i></a>
          </li>
        </ul>
      </div>
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item">
          <button class="button btn bg-dark" onclick="yakin = confirm('Apakah Kamu yakin ingin Keluar?'); if(yakin){ window.location = '../logout.php'; }" type="button">Keluar...</button>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->