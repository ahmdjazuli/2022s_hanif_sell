<?php 
require "../../koneksi.php";
require "../../tgl_indo.php";
	$bulan 		= $_REQUEST['bulan'];
	$tahun 		= $_REQUEST['tahun'];

	if($bulan AND $tahun ){
		$result = mysqli_query($kon, "SELECT * FROM ulasan JOIN tanam ON ulasan.idtanam = tanam.idtanam JOIN user ON ulasan.id = user.id WHERE MONTH(waktu) = '$bulan' AND YEAR(waktu) = '$tahun' ORDER BY waktu ASC");
	}else{
		$result = mysqli_query($kon, "SELECT * FROM ulasan JOIN tanam ON ulasan.idtanam = tanam.idtanam JOIN user ON ulasan.id = user.id ORDER BY waktu ASC");
	}

	if(mysqli_num_rows($result)==0){
		?> <script>alert('Data Tidak Ditemukan');window.location='../../laman/ulasan.php';</script> <?php
	}

	require('kepala.php');
?>
<style type="text/css" media="print"> @page { size: landscape; } </style>
<h3 style="text-align: center;">Laporan Ulasan</h3>
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
	      <th>Waktu (WITA)</th>
	      <th>Pembeli</th>
	      <th>Nama Barang</th>
	      <th>Kategori</th>
	      <th>Ulasan</th>
      </tr>
    </thead>
<?php 
$i = 1;
while( $data = mysqli_fetch_array($result) ) : ?>
<tr class="text-center">
  	<td><?= $i++; ?></td>
  	<td><?= format_harijam($data['waktu'],true)?></td>                      
                          <td><?= $data['nama'] ?></td>           
                          <td><?= $data['namatanam'] ?></td>        
                          <td><?= $data['kategori'] ?></td>        
                          <td><?= $data['ulasannya'] ?></td>
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