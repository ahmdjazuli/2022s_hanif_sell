<?php require('header.php');
	$tanam = mysqli_query($kon, "SELECT * FROM tanam WHERE idtanam = '$_REQUEST[idtanam]'");
	$data  = mysqli_fetch_array($tanam);
?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
						 <?= $data['namatanam'] ?>
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
	<div class="row">
		<div class="col-md-8">
			<div class="productbox">
				<div class="text-center">
					<img src="img/<?= $data['gambar'] ?>" class='text-center'>
				</div>
				<div class="clearfix">
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="properties-box">
				<ul class="unstyle">
					<li><b class="propertyname">Kategori:</b> <?= $data['kategori'] ?></li>
					<li><b class="propertyname">Deskripsi:<br></b> <?= $data['deskripsi'] ?></li>
					<li><b class="propertyname">Harga:</b> Rp. <?= number_format($data['harga'],0,',','.') ?></li>
					<li><b class="propertyname">Stok Tersedia:</b> <?= $data['stok'] ?></li>
					<li><b class="propertyname">Terjual:</b> <?= $data['terjual'] ?></li><br>
					<li><a href="belanja.php" class="homebrowseitems">Kembali<div class="homebrowseitemsicon"><i class="fa fa-backward fa-spin"></i></div></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</section>

<?php require('footer.php') ?>