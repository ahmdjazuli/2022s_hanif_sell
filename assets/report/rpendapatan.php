<?php 
require "../../koneksi.php";
require "../../tgl_indo.php";
	$hari = $_REQUEST['hari'];

	if($hari){
		$result = mysqli_query($kon, "SELECT level, SUM(total) as total FROM beli INNER JOIN user ON beli.id = user.id WHERE DATE(tglbeli) = '$hari' GROUP BY DATE(tglbeli)");
	}

	if(mysqli_num_rows($result)==0){
		?> <script>alert('Data Tidak Ditemukan');window.location='../../laman/pendapatan.php';</script> <?php
	}

	require('kepala2.php');
?>
<style type="text/css" media="print"> @page { size: portrait; } </style>
<h3 style="text-align: center;">Laporan Pendapatan Harian</h3>
<h5 class="text-center">
	<?= "Dicetak pada hari ".haribulantahun($hari,true); ?>
</h5>

<div class="container">
  <table class="table table-sm" border="1px" style="font-weight: 400;">
    <thead class="text-center">
      <tr>
        <th>No</th>
        <th>Hari</th>
        <th>Transaksi Penjualan</th>
        <th>Transaksi Service</th>
        <th>Laba Kotor</th>
      </tr>
    </thead>
<?php 
$i = 1;
$total = 0;
while( $data = mysqli_fetch_array($result) ) :
  $pendapatan1 = mysqli_fetch_array(mysqli_query($kon, "SELECT level, SUM(total) as total FROM beli INNER JOIN user ON beli.id = user.id WHERE DATE(tglbeli) = '$hari'"));
  $pendapatan2 = mysqli_fetch_array(mysqli_query($kon, "SELECT level, SUM(total) as total FROM transaksi JOIN user ON transaksi.id = user.id WHERE DATE(tgl) = '$hari'"));
?> 
<tr class="text-center">
  	<td><?= $i++; ?></td>
  	<td><?= haribulantahun($hari,true)?></td>          
	  <td>Rp. <?= number_format($pendapatan1['total'],0,'.','.') ?></td>                   
	  <td>Rp. <?= number_format($pendapatan2['total'],0,'.','.') ?></td>                   
	  <td>Rp. <?= number_format($pendapatan1['total']+$pendapatan2['total'],0,'.','.') ?></td>                   
</tr>
<?php endwhile; ?>
  </table>
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