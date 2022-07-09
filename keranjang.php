<?php require('koneksi.php'); require('header.php');
	session_start();

	if(empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang']) ){
		?><script>alert('Troli Belanja Kosong, Silahkan Berbelanja!');
	window.location = 'index.php';</script><?php
	}
?>

<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
						 Troli
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>

<!-- CONTENT =============================-->
<section class="item content">
<div class="container toparea">
	<div class="underlined-title">
		<div class="editContent">
			<h1 class="text-center latestitems">Periksa Item yang ingin dibeli</h1>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>
	<div id="edd_checkout_wrap" class="col-md-10 col-md-offset-1">
		<form id="edd_checkout_cart_form" method="post">
			<div id="edd_checkout_cart_wrap">
				<table id="edd_checkout_cart" class="ajaxed">
				<thead>
				<tr class="edd_cart_header_row">
					<th> Nama Produk </th>
					<th> Harga </th>
					<th> Jumlah </th>
					<th> Sub Harga </th>
					<th> Aksi </th>
				</tr>
				</thead>
				<tbody>
				<?php 
					foreach ($_SESSION['keranjang'] as $idtanam => $jumlah) :
				    $tanam = mysqli_query($kon, "SELECT * FROM tanam WHERE idtanam = '$idtanam'"); 
					$pecah = mysqli_fetch_assoc($tanam); ?>
					<tr class="edd_cart_item" id="edd_cart_item_0_25" data-download-id="25">
						<td class="edd_cart_item_name">
							<div class="edd_cart_item_image">
								<img width="50" height="50" src="img/<?= $pecah['gambar'] ?>">
							</div>
							<span class="edd_checkout_cart_item_title"><?= $pecah['namatanam'] ?></span>
						</td>
						<td>Rp. <?php if($memori['level']=='reseller'){ 
							echo number_format($pecah['harga_r'],0,',','.'); 
						}else{ 
							echo number_format($pecah['harga'],0,',','.'); 
						} ?></td>
						<td><input type="number" name="jumlahnya" min="1" max="<?= $pecah['stok'] ?>" value="<?= $jumlah ?>" class="form-control"></td>
						<td>Rp. <?php if($memori['level']=='reseller'){ 
							echo number_format($pecah['harga_r']*$jumlah,0,',','.'); 
						}else{ 
							echo number_format($pecah['harga']*$jumlah,0,',','.'); 
						} ?></td>
						<td><button type="submit" name="ubah" class="btn" style="background-color: #9ad8fe; color: black;"><i class="fas fa-pencil-alt"></i></button> <a class="btn" style="background-color: #4169e1;color: white;" href="hapuskeranjang.php?idtanam=<?= $idtanam ?>"><i class="fas fa-trash"></i></a> </td>
					</tr>
				<?php endforeach ?>
				</tbody>
				</table>
				<a class="btn" style="background-color: #9ad8fe; color: black;" href="belanja.php">Kembali Belanja</a>
				<a class="btn btn-primary" href="cek.php">Lanjut Pilih Ongkir</a>
			</div>
		</form>
	</div>
</div>
</section>

<!-- CALL TO ACTION =============================-->
<section class="content-block" style="background-color:#4169e1;">
<div class="container text-center">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="item" data-scrollreveal="enter top over 0.4s after 0.1s">
				<h1 class="callactiontitle"> Jika anda merasa yakin, klik tombol <span class="callactionbutton"><i class="fa fa-gift"></i> CHECKOUT</span>
				</h1>
			</div>
		</div>
	</div>
</div>
</section>

<?php 
require('footer.php');
 	if (isset($_POST['ubah'])) {
    	$jumlahnya    = $_REQUEST['jumlahnya'];
    	$jumlah 	  = $jumlahnya;
    	$_SESSION['keranjang'][$idtanam]=$jumlah;
    ?> <script>window.location='keranjang.php';</script> <?php
} ?>