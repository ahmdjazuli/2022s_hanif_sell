<?php 
require "../../koneksi.php";
require "../../tgl_indo.php";
	$bulan 		= $_REQUEST['bulan'];
	$tahun 		= $_REQUEST['tahun'];

	if($bulan AND $tahun ){
		$result = mysqli_query($kon, "SELECT * FROM transaksi JOIN user ON transaksi.id = user.id WHERE MONTH(tgl) = '$bulan' AND YEAR(tgl) = '$tahun' ORDER BY tgl ASC");
	}

	if(mysqli_num_rows($result)==0){
		?> <script>alert('Data Tidak Ditemukan');window.location='../../laman/transaksi.php';</script> <?php
	}

	require('kepala.php');
?>

<style type="text/css" media="print"> @page { size: landscape; } </style>
<h3 style="text-align: center;">Laporan Data Transaksi Service</h3>
<h5 class="text-center">
	<?php 
	if($bulan AND $tahun){
		echo "Periode bulan ".$namabulan.' '.$tahun;
	}?>
</h5>
<br>
	<!-- container form inputan -->
<div class="container-fluid">
  <!-- tabel buat nampilin data -->
  <table class="table table-sm" border="1px" style="font-weight: 400;">
    <thead class="text-center">
      <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>No. Transaksi</th>
        <th>Pelanggan</th>
        <th>Barang</th>
        <th>Catatan</th>
        <th>Total</th>
      </tr>
    </thead>
<?php 
$i = 1;

while( $data = mysqli_fetch_array($result) ) :
 ?> 
<tr class="text-center">
  	<td><?= $i++; ?></td>
  	<td><?= tgl_indo($data['tgl'])?></td>          
    <td> <?= $data['notransaksi'] ?></a> </td>
    <td><?= $data['nama']?></td>          
    <td><?= $data['barang']?></td>          
    <td><?= $data['catatan'] ?></td>
    <td>Rp. <?= number_format($data['total'],0,',','.') ?> </td>   
</tr>
<?php endwhile; ?>
  </table>
<!-- akhir table -->
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