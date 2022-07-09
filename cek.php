<?php 
	require('header.php');
	if($_SESSION['level']==""){
    	?><script>alert('Login Terlebih Dahulu!');
		window.location = 'login.php';</script><?php
  	}

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
						 Checkout
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
			<h1 class="text-center latestitems">Pilih Ongkir</h1>
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
				</tr>
				</thead>
				<tbody>
				<?php 
					$totalbelanja = 0; $no = 1;
				    foreach ($_SESSION['keranjang'] as $idtanam => $jumlah) :
				    $tanam = mysqli_query($kon, "SELECT * FROM tanam WHERE idtanam = '$idtanam'"); 
					$pecah = mysqli_fetch_assoc($tanam);
						if($memori['level']=='reseller'){ 
							$bisajadi = $pecah['harga_r']; 
						}else{ 
							$bisajadi = $pecah['harga']; 
						}
					$subharga = $bisajadi*$jumlah;
					?>
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
						<td><?= $jumlah ?> </td>
						<td>Rp. <?php if($memori['level']=='reseller'){ 
							echo number_format($pecah['harga_r']*$jumlah,0,',','.'); 
						}else{ 
							echo number_format($pecah['harga']*$jumlah,0,',','.'); 
						} ?></td>
					</tr>
				<?php $totalbelanja+=$subharga; $no++; ?>
				<?php endforeach ?>
				
				</tbody>
				<tfoot>
				<tr>
					<th colspan="3">Total: </th>
					<th >
					<span>Rp. <?= number_format($totalbelanja,0,',','.'); ?></span>
					</th>
				</tr>
				</tfoot>
				</table>
			</div>
		</form>
		<div id="edd_checkout_form_wrap" class="edd_clearfix">
			<form id="edd_purchase_form" class="edd_form" method="POST" action="cekfinish.php">
				<fieldset id="edd_checkout_user_info">
					<legend>Info Pembeli dan Pilih Ongkir</legend>
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<p><label>Nama <?php if($memori['level']=='reseller'){ 
							echo 'Reseller';  
						}else{ 
							echo 'Pelanggan'; 
						} ?> *</label>
							<input type="hidden" name="id" value="<?= $memori['id'] ?>">
							<input class="form-control" type="text" value="<?= $memori['nama'] ?>" readonly></p>
						</div>
						<div class="col-md-6 col-sm-12">
							<p><label>Email *</label>
							<input class="form-control" type="email" value="<?= $memori['email'] ?>" readonly></p>
						</div>
						<div class="col-md-6 col-sm-12">
							<p><label>Telp *</label>
							<input class="form-control" type="text" value="<?= $memori['telp'] ?>" readonly></p>
						</div>
						<div class="col-md-6 col-sm-12">
							<p><label>Alamat *</label>
							<textarea class="form-control" name="alamat" readonly><?= $memori['alamat'] ?></textarea></p>
						</div>
						<div class="col-md-6 col-sm-12">
							<p><label>Pilih Ongkos Kirim *</label>
							<select name="idongkir" class="form-control" required>
							<option value="">Pilih</option>
		                    <?php
		                      $ahay = mysqli_query($kon, "SELECT * FROM ongkir ORDER BY kota DESC");
		                        while($baris = mysqli_fetch_array($ahay)) {
		                          echo "<option value='$baris[idongkir]'>$baris[kota] - Rp. $baris[tarif]</option>";
		                        } 
		                      ?>
		                  	</select></p>
						</div>

					</div>
					<a class="btn" style="background-color: #9ad8fe; color: black;" href="keranjang.php">Kembali Ke Keranjang</a>
					<button class="btn btn-primary" type="submit">Lakukan Pembayaran</button>L
				</fieldset>
			</form>
		</div>
	</div>
</div>
</section>
<?php require('footer.php') ?>