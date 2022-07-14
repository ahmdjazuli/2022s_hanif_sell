<?php 
require "../../koneksi.php";
require "../../tgl_indo.php";
	$bulan 		= $_REQUEST['bulan'];
	$tahun 		= $_REQUEST['tahun'];

	if($bulan AND $tahun ){
		$woy = mysqli_fetch_array(mysqli_query($kon, "SELECT SUM(total) as total FROM beli INNER JOIN user ON beli.id = user.id WHERE MONTH(tglbeli) = '$bulan' AND YEAR(tglbeli) = '$tahun'"));
    $woy2 = mysqli_fetch_array(mysqli_query($kon, "SELECT SUM(hargamasuk*jumlah) as total FROM tanammasuk WHERE MONTH(tgl) = '$bulan' AND YEAR(tgl) = '$tahun'"));
    $woy3 = mysqli_fetch_array(mysqli_query($kon, "SELECT SUM(total) as total FROM pengeluaran WHERE MONTH(tgl) = '$bulan' AND YEAR(tgl) = '$tahun'"));
	}

	require('kepala.php');
?>
<style type="text/css" media="print"> @page { size: portrait; margin: minimum; } </style>
<style>th{text-align:left;}</style>
<h3 class="text-center">Laporan Pendapatan Bulanan</h3>
<h5 class="text-center">
	<?php 
	if($bulan){
		echo "Periode bulan <b>".$namabulan." ".$tahun."</b>";
	}?>
</h5>
<br>
<div class="container">
<div class="row">
  <div class="col-md-4">
  <table class="table table-striped table-bordered table-responsive">
  	<tr>
			<th style="font-weight: normal;">Transaksi Penjualan</th>
			<td style="font-weight: normal;">Rp. <?php echo number_format($woy['total'],0,'.','.') ?></td>
		</tr>
		<tr>
			<th style="font-weight: normal;">Barang Masuk</th>
			<td style="font-weight: normal;">Rp. <?php echo number_format($woy2['total'],0,'.','.') ?></td>
		</tr>
		<tr>
			<th style="font-weight: normal;">Pengeluaran</th>
			<td style="font-weight: normal;">Rp. <?php echo number_format($woy3['total'],0,'.','.') ?></td>
		</tr>
		<tr>
			<th style="font-weight: normal;"><b>Laba Bersih</b></th>
			<td style="font-weight: normal;"><b>Rp. <?php echo number_format($woy['total']-$woy2['total']-$woy3['total'],0,'.','.') ?></b></td>
		</tr>
	</table>
	</div>
</div>
</div>
<div id="kiri"></div>
<div id="kanan">
	Mengetahui,<br><br><br>
	Pemilik Toko
</div>
<script>
	window.print();
</script> 	
</body>
</html>