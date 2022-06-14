<?php 
require "../../koneksi.php";
require "../../tgl_indo.php";
	$bulan 		= $_REQUEST['bulan'];
	$tahun 		= $_REQUEST['tahun'];

	if($bulan AND $tahun ){
		$result = mysqli_query($kon, "SELECT * FROM tanammasuk INNER JOIN tanam ON tanammasuk.idtanam = tanam.idtanam WHERE MONTH(tgl) = '$bulan' AND YEAR(tgl) = '$tahun' ORDER BY tgl ASC");
	}else{
		$result = mysqli_query($kon, "SELECT * FROM tanammasuk INNER JOIN tanam ON tanammasuk.idtanam = tanam.idtanam ORDER BY tgl ASC");
	}

	if(mysqli_num_rows($result)==0){
		?> <script>alert('Data Tidak Ditemukan');window.location='../../laman/tanammasuk.php';</script> <?php
	}

	require('kepala.php');
?>
<style type="text/css" media="print"> @page { size: landscape; } </style>
<h3 style="text-align: center;">Laporan Data Barang Masuk</h3>
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
        <th>Tanggal</th>
        <th>Nama Barang</th>
        <th>Distributor</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Catatan</th>
      </tr>
    </thead>
<?php 
$i = 1;
while( $data = mysqli_fetch_array($result) ) : ?>
<tr class="text-center">
  	<td><?= $i++; ?></td>
  	<td><?= haribulantahun($data['tgl'],true)?></td>          
	  <td><?= $data['namatanam'] ?></td> 
	  <td><?= $data['sumber'] ?></td>
    <td>Rp. <?= number_format($data['hargamasuk'],0,',','.') ?> </td>                  
	  <td><?= $data['jumlah'] ?></td>
	  <td><?= $data['catatan'] ?></td>
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