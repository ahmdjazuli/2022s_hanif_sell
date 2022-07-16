<?php 
require "../../koneksi.php";
require "../../tgl_indo.php";
	$bulan 		= $_REQUEST['bulan'];
	$tahun 		= $_REQUEST['tahun'];
	$nama 		= $_REQUEST['nama'];

	if($bulan AND $tahun AND empty($nama) ){
		$result = mysqli_query($kon, "SELECT * FROM favorit JOIN tanam ON favorit.idtanam = tanam.idtanam JOIN user ON favorit.id = user.id WHERE MONTH(tgl) = '$bulan' AND YEAR(tgl) = '$tahun' ORDER BY tgl DESC");
	}else if($bulan AND $tahun AND $nama ){
		$result = mysqli_query($kon, "SELECT * FROM favorit JOIN tanam ON favorit.idtanam = tanam.idtanam JOIN user ON favorit.id = user.id WHERE MONTH(tgl) = '$bulan' AND YEAR(tgl) = '$tahun' AND nama = '$nama' ORDER BY tgl DESC");
	}else{
		$result = mysqli_query($kon, "SELECT * FROM favorit JOIN tanam ON favorit.idtanam = tanam.idtanam JOIN user ON favorit.id = user.id ORDER BY tgl DESC");
	}

	if(mysqli_num_rows($result)==0){
		?> <script>alert('Data Tidak Ditemukan');window.location='../../laman/favorit.php';</script> <?php
	}

	require('kepala.php');
?>
<style type="text/css" media="print"> @page { size: landscape; } </style>
<h3 style="text-align: center;">Laporan Favorit</h3>
<h5 class="text-center">
	<?php 
	if($bulan AND $tahun AND empty($nama)){
		echo "Periode bulan ".$namabulan.' '.$tahun;
	}else if($bulan AND $tahun AND $nama){
		echo "Periode bulan ".$namabulan.' '.$tahun.' dengan nama '.$nama;
	}?>
</h5>

<div class="container-fluid">
  <table class="table table-sm" border="1px" style="font-weight: 400;">
    <thead class="text-center">
      <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Nama Pelanggan</th>
        <th>Nama Barang</th>
        <th>Kategori</th>
      </tr>
    </thead>
<?php 
$i = 1;
while( $data = mysqli_fetch_array($result) ) : ?>
<tr class="text-center">
  	<td><?= $i++; ?></td>
  	<td><?= tgl_indo($data['tgl']) ?></td>
    <td><?= $data['nama'] ?></td>
    <td><?= $data['namatanam'] ?></td>
    <td><?= $data['kategori'] ?></td>
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