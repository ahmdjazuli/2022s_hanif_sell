<?php 
require "../../koneksi.php";
require "../../tgl_indo.php";
	$bulan 		= $_REQUEST['bulan'];
	$tahun 		= $_REQUEST['tahun'];

	if($bulan AND $tahun ){
		$result = mysqli_query($kon, "SELECT * FROM flashsale INNER JOIN tanam ON flashsale.idtanam = tanam.idtanam WHERE MONTH(waktu) = '$bulan' AND YEAR(waktu) = '$tahun' ORDER BY waktu ASC");
	}else{
		$result = mysqli_query($kon, "SELECT * FROM flashsale INNER JOIN tanam ON flashsale.idtanam = tanam.idtanam ORDER BY waktu ASC");
	}

	if(mysqli_num_rows($result)==0){
		?> <script>alert('Data Tidak Ditemukan');window.location='../../laman/flashsale.php';</script> <?php
	}

	require('kepala.php');
?>
<style type="text/css" media="print"> @page { size: landscape; } </style>
<h3 style="text-align: center;">Laporan Flash Sale</h3>
<h5 class="text-center">
	<?php 
	if($bulan AND $tahun){
		echo "Periode bulan ".$namabulan.' '.$tahun;
	} ?>
</h5>

<div class="container-fluid">
  <table class="table table-sm" border="1px" style="font-weight: 400;">
    <thead class="text-center">
      <tr>
        <th>No</th>
        <th>Waktu</th>
        <th>Nama </th>
        <th>Harga</th>
        <th>Diskon</th>
        <th>Hasil</th>
      </tr>
    </thead>
<?php 
$i = 1;
while( $data = mysqli_fetch_array($result) ) : ?>
<tr class="text-center">
  	<td><?= $i++; ?></td>
  	<td width="220px"><?= format_harijam($data['waktu'],true) ?></td>
	  <td><?= $data['namatanam'] ?></td>
	  <td>Rp. <?= number_format($data['hargaawal'],0,',','.') ?> </td>
	  <td><?= $data['diskon'] ?>%</td>
	  <td>Rp. <?= number_format($data['hasil'],0,',','.') ?> </td>
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