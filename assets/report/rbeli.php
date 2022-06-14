<?php 
require "../../koneksi.php";
require "../../tgl_indo.php";
	$bulan 		= $_REQUEST['bulan'];
	$tahun 		= $_REQUEST['tahun'];
	$status = $_REQUEST['status'];

	if($bulan AND $tahun AND empty($status) ){
		$result = mysqli_query($kon, "SELECT * FROM `beli` INNER JOIN ongkir ON beli.idongkir = ongkir.idongkir INNER JOIN user ON beli.id = user.id WHERE MONTH(tglbeli) = '$bulan' AND YEAR(tglbeli) = '$tahun' AND level = 'pelanggan' ORDER BY tglbeli ASC");
	}else if($bulan AND $tahun AND $status){
		$result = mysqli_query($kon, "SELECT * FROM `beli` INNER JOIN ongkir ON beli.idongkir = ongkir.idongkir INNER JOIN user ON beli.id = user.id WHERE MONTH(tglbeli) = '$bulan' AND YEAR(tglbeli) = '$tahun' AND status = '$status' AND level = 'pelanggan' ORDER BY tglbeli ASC");
	}else{
		?> <script>alert('Data Tidak Ditemukan');window.location='../../laman/beli.php';</script> <?php
	}

	if(mysqli_num_rows($result)==0){
		?> <script>alert('Data Tidak Ditemukan');window.location='../../laman/beli.php';</script> <?php
	}

	require('kepala.php');
?>

<style type="text/css" media="print"> @page { size: landscape; } </style>
<h3 style="text-align: center;">Laporan Data Pembelian</h3>
<h5 class="text-center">
	<?php 
	if($bulan AND $tahun AND empty($status)){
		echo "Periode bulan ".$namabulan.' '.$tahun;
	}else if($bulan AND $tahun AND $status){
		echo "Periode bulan ".$namabulan.' '.$tahun.' untuk status yang di'.$status;
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
	    <th>Pembeli</th>
	    <th>Total</th>
	    <th>Tujuan</th>
	    <th>Bukti Pembayaran</th>
	    <th>Status</th>
      </tr>
    </thead>
<?php 
$i = 1;

while( $data = mysqli_fetch_array($result) ) :
 ?> 
<tr class="text-center">
  	<td><?= $i++; ?></td>
  	<td><?= haribulantahun($data['tglbeli'],true)?></td>          
	  <td><?= $data['nama'] ?></td>           
	  <td>Rp. <?= number_format($data['total'],0,',','.') ?> </td>
	  <td><?= $data['namakota'] ?></td>           
	  <td><img src="../../img/<?= $data['bukti'] ?>" width='60px'></td>        
	  <td><?= $data['status'] ?></td>
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