<?php 
require "../../koneksi.php"; error_reporting(0);
require "../../tgl_indo.php";
	$kota 		= $_REQUEST['kota'];

	if($kota ){
		$result = mysqli_query($kon, "SELECT * FROM kurir INNER JOIN ongkir ON kurir.idongkir = ongkir.idongkir WHERE kota = '$kota' ORDER BY idkurir DESC");
	}else{
		$result = mysqli_query($kon, "SELECT * FROM kurir INNER JOIN ongkir ON kurir.idongkir = ongkir.idongkir ORDER BY idkurir DESC");
	}

	require('kepala.php'); 
?>
<style type="text/css" media="print"> @page { size: landscape; } </style>
<h3 style="text-align: center;">Laporan Kurir</h3>
<h5 class="text-center">
	<?php 
	if($kota){
		echo "Semua Kurir yang berada di Kota <b>".$kota."</b>";
	}else{
		echo "Semua Kurir di <b>Semua Kota</b>";
	} ?>
</h5>

<div class="container-fluid">
  <table class="table table-sm" border="1px" style="font-weight: 400;">
    <thead class="text-center">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Kontak</th>
        <th>Kota</th>
      </tr>
    </thead>
<?php 
$i = 1;
while( $data = mysqli_fetch_array($result) ) : ?>
<tr class="text-center">
  	<td><?= $i++; ?></td>
  	<td><?php 
      if($data['jkkurir'] == 0){
        echo $data['namakurir']." <svg style='width:22px;height:22px' viewBox='0 0 24 24'><path fill='currentColor' d='M9,9C10.29,9 11.5,9.41 12.47,10.11L17.58,5H13V3H21V11H19V6.41L13.89,11.5C14.59,12.5 15,13.7 15,15A6,6 0 0,1 9,21A6,6 0 0,1 3,15A6,6 0 0,1 9,9M9,11A4,4 0 0,0 5,15A4,4 0 0,0 9,19A4,4 0 0,0 13,15A4,4 0 0,0 9,11Z' /></svg>";
      }else if($data['jkkurir'] == 1){
        echo $data['namakurir']." <svg style='width:24px;height:24px' viewBox='0 0 24 24'><path fill='currentColor' d='M12,4A6,6 0 0,1 18,10C18,12.97 15.84,15.44 13,15.92V18H15V20H13V22H11V20H9V18H11V15.92C8.16,15.44 6,12.97 6,10A6,6 0 0,1 12,4M12,6A4,4 0 0,0 8,10A4,4 0 0,0 12,14A4,4 0 0,0 16,10A4,4 0 0,0 12,6Z' /></svg>";
      } ?></td>         
    <td><?= $data['username'] ?></td>           
    <td><?= $data['kontakkurir'] ?></td>           
    <td><?= $data['kota'] ?></td>
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