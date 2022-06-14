<?php require('header.php') ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-homeimage">
					<div class="maintext-image" data-scrollreveal="enter right over 1.5s after 0.1s" >
						 <p style="font-size:65px;">HanifKomputer</p> 
					</div>
					<div class="subtext-image" data-scrollreveal="enter left over 1.7s after 0.3s">
						 <p style="font-size:30px;">Penjual Sparepart Laptop dan Komputer Terbaik .</p> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>


<!-- STEPS =============================-->
<section class="item content">
<div class="container toparea">
	<div class="underlined-title">
		<div class="editContent">



<!-- <a href="index.php"><img src="img/hanif.jfif" width="100px" style="padding-top:1px"></a> -->
<marquee><h3>Selamat Datang di Hanif Komputer</h3></marquee>
 




			<h1 class="text-center latestitems">Produk Terbaru</h1>

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
	$tanam = mysqli_query($kon, "SELECT * FROM tanam ORDER BY idtanam DESC");
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
							<a href="action.php?idtanam=<?= $data['idtanam'] ?>" class="learn-more detailslearn"><i class="fa fa-star"></i> Favorit</a>
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
					<span class="edd_price">Rp.<?= number_format($data['harga'],0,',','.'); ?></span>
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