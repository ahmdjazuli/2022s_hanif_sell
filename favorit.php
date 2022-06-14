<?php require('header.php'); require('koneksi.php'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
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
			<h1 class="text-center latestitems">Favorit</h1>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>
	<div class="row">

<?php 
	$tanam = mysqli_query($kon, "SELECT * FROM tanam JOIN favorit ON tanam.idtanam = favorit.idtanam WHERE id = '$memori[id]' ORDER BY idfavorit DESC");
	while($data = mysqli_fetch_array($tanam)){ ?>
		<div class="col-md-4">
			<div class="productbox">
				<div class="fadeshop">
					<form action="beli.php" method="POST">
					<div class="captionshop text-center" style="display: none;">
						<h3><?= $data['kategori'] ?></h3>
						<p> <?= substr(strip_tags($data['deskripsi']),0,90).'...'; ?> </p>
						<p>
							<input type="hidden" name="idtanam" value="<?= $data['idtanam'] ?>" class="form-control">
							<input type="number" name="jumlah" placeholder="contoh : 1" max="<?= $data['stok'] ?>" class="form-control" required>
							<button type="submit" class="belilah"><i class="fa fa-shopping-cart"></i> Beli</button>
							<a href="detail.php?idtanam=<?= $data['idtanam'] ?>" class="learn-more detailslearn"><i class="fa fa-link"></i> Detail</a>
							<a href="actions.php?idfavorit=<?= $data['idfavorit'] ?>" class="learn-more detailslearn"><i class="fa fa-star"></i> Hapus Favorit</a>
						</p>
					</div>
					<span class="maxproduct"><img src="img/<?= $data['gambar'] ?>" alt=""></span>
					</form>
				</div>
				<div class="product-details">
					<a href="#">
					<h1><?= $data['namatanam'] ?></h1>
					</a>
					<span class="price">
					<span class="edd_price">Rp. <?= number_format($data['harga'],0,',','.'); ?></span>
					</span>
				</div>
			</div>
		</div>
<?php }  ?>
	</div>
</div>
</div>
</section>

<?php require('footer.php') ?>