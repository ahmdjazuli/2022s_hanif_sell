<?php 
require "../../koneksi.php";
require "../../tgl_indo.php";
	$bulan 		= $_REQUEST['bulan'];
	$tahun 		= $_REQUEST['tahun'];
	$namakurir = $_REQUEST['namakurir'];

	if($bulan AND $tahun AND $namakurir){
		$result = mysqli_query($kon, "SELECT * FROM kirim INNER JOIN beli ON kirim.idbeli = beli.idbeli INNER JOIN kurir ON kirim.idkurir = kurir.idkurir INNER JOIN user ON beli.id = user.id WHERE MONTH(tglbeli) = '$bulan' AND YEAR(tglbeli) = '$tahun' AND namakurir = '$namakurir' ORDER BY tglbeli DESC");

		$detail = mysqli_query($kon, "SELECT * FROM beliproduk INNER JOIN tanam ON beliproduk.idtanam = tanam.idtanam INNER JOIN beli ON beliproduk.idbeli = beli.idbeli INNER JOIN user ON beli.id = user.id INNER JOIN kirim ON kirim.idbeli = beliproduk.idbeli INNER JOIN kurir ON kirim.idkurir = kurir.idkurir WHERE MONTH(tglbeli) = '$bulan' AND YEAR(tglbeli) = '$tahun' AND namakurir = '$namakurir' ORDER BY tglbeli DESC");
	}else{
		?> <script>alert('Data Tidak Ditemukan');window.location='../../laman/kurir.php';</script> <?php
	}

	if(mysqli_num_rows($result)==0){
		?> <script>alert('Data Tidak Ditemukan');window.location='../../laman/kurir.php';</script> <?php
	}

	require('kepala.php');
?>
<style type="text/css" media="print"> @page { size: landscape; } </style>
<h3 style="text-align: center;">Laporan Aktivitas Kurir</h3>
<h4 class="text-center"><b><?= $namakurir ?></b></h4>
<h5 class="text-center">
	<?php 
	if($bulan AND $tahun AND $namakurir){
		echo "Periode bulan ".$namabulan.' '.$tahun;
	}?>
</h5>
<br>
<div class="container-fluid">
  <table class="table table-sm" border="1px" style="font-weight: 400;">
    <thead class="text-center">
      <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Pembeli</th>
        <th>Tujuan</th>
        <th>Penerima</th>
        <th>Keterangan</th>
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
	  <td><?= $data['alamat'] ?></td>           
	  <td><?= $data['penerima'] ?></td>           
	  <td><?= $data['ket'] ?></td>           
	  <td><?= $data['status'] ?></td>
</tr>
<?php endwhile; ?>
  </table>
<!-- akhir table -->
</div>

<h3 style="text-align: center;">Detail Produk yang dibeli</h3>
<div class="container-fluid">
  <table class="table table-sm" border="1px" style="font-weight: 400;">
    <thead class="text-center">
      <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Pembeli</th>
        <th>Nama Barang</th>
        <th>Kategori</th>
        <th>Jumlah</th>
        <th>Harga</th>
      </tr>
    </thead>
<?php 
$i = 1;

while( $data = mysqli_fetch_array($detail) ) :
 ?> 
<tr class="text-center">
  	<td><?= $i++; ?></td>
  	<td><?= haribulantahun($data['tglbeli'],true)?></td>          
	  <td><?= $data['nama'] ?></td>           
	  <td><?= $data['namatanam'] ?></td>           
    <td><?= $data['kategori'] ?></td>          
    <td><?= $data['jumlah'] ?></td>           
    <td>Rp. <?= number_format($data['harga'],0,',','.') ?> </td>
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