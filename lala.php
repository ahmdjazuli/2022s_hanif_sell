<?php require('koneksi.php'); require('header.php');
	session_start();

	if(empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang']) ){
		?><script>alert('Troli Belanja Kosong, Silahkan Berbelanja!');
	window.location = 'belanja.php';</script><?php
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
			<h1 class="text-center latestitems">Lakukan Pembayaran</h1>
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
					if($_SESSION['idflash']){
						echo $_SESSION['idflash'];
					}else{
						echo "no";
					}
					foreach ($_SESSION['keranjang'] as $idtanam => $jumlah) :
				    $tanam = mysqli_query($kon, "SELECT * FROM tanam WHERE idtanam = '$idtanam'"); 
					$pecah = mysqli_fetch_assoc($tanam); ?>
					<tr class="edd_cart_item" id="edd_cart_item_0_25" data-download-id="25">
						<td class="edd_cart_item_name">
							<div class="edd_cart_item_image">
								<img width="25" height="25" src="img/scorilo2-70x70.jpg" alt="">
							</div>
							<span class="edd_checkout_cart_item_title"><?= $pecah['namatanam'] ?></span>
						</td>
						<td><?php if($_SESSION['idflash']){
							echo "Rp. $pecah[hasil]";
						}else{
							echo "Rp. $pecah[harga]";
						} ?> </td>
						<td><?= $jumlah ?> </td>
						<td>Rp. <?= $pecah['harga']*$jumlah ?></td>
						<td> <a class="btn btn-danger" href="hapuskeranjang.php?idtanam=<?= $idtanam ?>">Hapus</a> </td>
					</tr>
				<?php endforeach ?>
				</tbody>
				</table>
				<a class="btn btn-success" href="belanja.php">Lanjutkan Belanja</a>
				<a class="btn btn-primary" href="cek.php">Checkout</a>
			</div>
		</form>
	</div>
</div>
</section>

<!-- CALL TO ACTION =============================-->
<section class="content-block" style="background-color:#00bba7;">
<div class="container text-center">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="item" data-scrollreveal="enter top over 0.4s after 0.1s">
				<h1 class="callactiontitle"> Promote Items Area Give Discount to Buyers <span class="callactionbutton"><i class="fa fa-gift"></i> WOW24TH</span>
				</h1>
			</div>
		</div>
	</div>
</div>
</section>

<?php require('footer.php') ?>