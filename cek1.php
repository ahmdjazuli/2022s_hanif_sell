<?php 
	require('header.php');
	if($_SESSION['level']==""){
    	?><script>alert('Login Terlebih Dahulu!');
		window.location = 'login.php';</script><?php
  	}

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
				</tr>
				</thead>
				<tbody>
				<?php 
					$totalbelanja = 0; $no = 1;
				    foreach ($_SESSION['keranjang'] as $idtanam => $jumlah) :
				    $tanam = mysqli_query($kon, "SELECT * FROM tanam WHERE idtanam = '$idtanam'"); 
					$pecah = mysqli_fetch_assoc($tanam);
					$subharga = $pecah['harga']*$jumlah;
					?>
					<tr class="edd_cart_item" id="edd_cart_item_0_25" data-download-id="25">
						<td class="edd_cart_item_name">
							<div class="edd_cart_item_image">
								<img width="50" height="50" src="img/<?= $pecah['gambar'] ?>">
							</div>
							<span class="edd_checkout_cart_item_title"><?= $pecah['namatanam'] ?></span>
						</td>
						<td><input type="number" id="harga<?= $no ?>" class="form-control" readonly onchange="hitung<?=$no?>()" value="<?= $pecah['harga'] ?>"></td>
						<td><input type="number" id="jumlah<?=$no?>" class="form-control" onchange="hitung<?=$no?>()" value="<?= $jumlah ?>"> </td>
						<td><input type="number" id="total<?=$no?>" class="form-control"  readonly></td>
					</tr>
					<script>
						var totalbelanja = 0;
						function hitung<?= $no ?>() {
					      var jumlah<?= $no ?>    = document.getElementById('jumlah<?= $no ?>').value;
					      var harga<?= $no ?>     = document.getElementById('harga<?= $no ?>').value;

					      var hasil<?= $no ?> = (parseInt(harga<?= $no ?>)) * (parseInt(jumlah<?= $no ?>));

					      if (!isNaN(hasil<?= $no ?>)) {
					         document.getElementById('total<?= $no ?>').value = hasil<?= $no ?>;
					      }

					      totalbelanja += (parseInt(hasil<?= $no ?>));

					      if (!isNaN(totalbelanja)) {
					         document.getElementById('totalbelanja').value = totalbelanja;

					      }
					    }
					</script>
				<?php $totalbelanja+=$subharga; $no++; ?>
				<?php endforeach ?>
				
				</tbody>
				<tfoot>
				<tr>
					<th colspan="3">Total: </th>
					<th >
					<span><input type="number" id="totalbelanja" onchange="hitung<?=$no?>()" readonly class="form-control"></span>
					</th>
				</tr>
				</tfoot>
				</table>
			</div>
		</form>
		<div id="edd_checkout_form_wrap" class="edd_clearfix">
			<form id="edd_purchase_form" class="edd_form" enctype="multipart/form-data" method="POST">
				<fieldset id="edd_checkout_user_info">
					<legend>Info Pembeli dan Pilih Ongkir</legend>
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<p><label>Nama Pelanggan *</label>
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
							<p><label>Foto Bukti Pembayaran *</label>
							<input type="file" name="bukti" class="form-control" required></p>
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
				</fieldset>
				<fieldset id="edd_purchase_submit">
					<input type="submit" class="edd-submit button" name="bayar" value="Bayar">
				</fieldset>
			</form>
		</div>
	</div>
</div>
</section>
<section class="content-block" style="background-color:#00bba7;">
<div class="container text-center">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="item" data-scrollreveal="enter top over 0.4s after 0.1s">
				<h1 class="callactiontitle"> Selesaikan Pembayaran melalui <span class="callactionbutton"><i class="fa fa-gift"></i> BANK BRI 137-061665-3275 AN. Fikriansyah </span>
				</h1>
			</div>
		</div>
	</div>
</div>
</section>
<?php 
	if(isset($_POST['bayar'])){
		$id = $_REQUEST['id'];
		$idongkir = $_REQUEST['idongkir'];
		$tglbeli = date('Y-m-d');

		$ongkirku = mysqli_query($kon, "SELECT * FROM ongkir WHERE idongkir = '$idongkir'");
		$tarifnya = mysqli_fetch_array($ongkirku);
		$total = $totalbelanja + $tarifnya['tarif'];

		$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
		$namafoto = $_FILES['bukti']['name'];
		$x = explode('.', $namafoto);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['bukti']['size'];
		$file_tmp = $_FILES['bukti']['tmp_name'];


		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
			if($ukuran < 2048000){	
				$namabaru = rand(1000,9999).preg_replace("/[^a-zA-Z0-9]/", ".", $namafoto);		
				move_uploaded_file($file_tmp, 'img/'.$namabaru);
				
				// tabel beli
				$ongkir = mysqli_query($kon, "SELECT * FROM ongkir WHERE idongkir = '$idongkir'");
				$row = mysqli_fetch_array($ongkir);
				$namakota = $row['kota'];
				$tarifnya = $row['tarif'];
				$alamat = $_REQUEST['alamat'];

				$hasil = mysqli_query($kon,"INSERT INTO beli (id,total,tglbeli,idongkir,status,bukti, namakota, tarifnya, alamat) VALUES ('$id','$total','$tglbeli','$idongkir','Menunggu','$namabaru','$namakota','$tarifnya','$alamat')");

				// tabel beliproduk
				$idbeli = $kon->insert_id;
				foreach ($_SESSION['keranjang'] as $idtanam => $jumlah) {
					$query = mysqli_query($kon, "SELECT * FROM tanam WHERE idtanam = '$idtanam'");
					$ambil = mysqli_fetch_array($query);

					$namanya = $ambil['namatanam'];
					$harganya = $ambil['harga'];
					$subharga = $ambil['harga']*$jumlah;

					mysqli_query($kon,"INSERT INTO beliproduk (idbeli, idtanam,jumlah, namanya, harganya, subharga) VALUES ('$idbeli','$idtanam','$jumlah','$namanya','$harganya','$subharga')");
				}

				if($hasil){
					?> <script>alert('Pembelian Sukses.'); window.location = 'riwayatbeli.php?idbeli=<?=$idbeli?>';</script><?php
					unset($_SESSION['keranjang']);
				}else{
					?> <script>alert('Gagal, cek kembali!.'); window.location = 'cek.php';</script><?php
				}
			}else{
				?> <script>alert('Gagal, Ukuran File Maksimal 2MB!'); window.location = 'cek.php';</script><?php
			}
		}else{
			?> <script>alert('Gagal, File yang diupload format jpg, jpeg atau png!'); window.location = 'cek.php';</script><?php
		}
	}
?>
<?php require('footer.php') ?>