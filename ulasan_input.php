<?php require('header.php'); require('tgl_indo.php'); $namatanam = $_GET['namatanam']; $idbeli = $_GET['idbeli'];
  $query = mysqli_query($kon, "SELECT * FROM beliproduk INNER JOIN tanam ON beliproduk.idtanam = tanam.idtanam WHERE namatanam = '$namatanam' AND idbeli = '$idbeli'"); $j = mysqli_fetch_array($query); ?>
<link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
						Berikan Ulasan
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>

<!-- CONTENT =============================-->
<section id="mu-course-content" style="padding-top: 0;">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <div class="mu-course-container mu-blog-single">
                  <div class="row">
<form action="" method="POST" autocomplete="off">
    <br>
  <div class="col-md-6">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="<?= $memori['nama']; ?>" class="form-control" readonly>
        <input type="hidden" name="id" value="<?= $memori['id']; ?>" class="form-control" required>
        <input type="hidden" name="idtanam" value="<?= $j['idtanam']; ?>" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Barang yang dibeli</label>
        <input type="text" value="<?= $j['namatanam']; ?>" class="form-control" readonly>
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <input type="text" value="<?= $j['kategori']; ?>" class="form-control" readonly>
    </div>
    <div class="form-group">
        <label>Jumlah</label>
        <input type="number" value="<?= $j['jumlah']; ?>" class="form-control" readonly>
    </div>
  </div>  
  <div class="col-md-6">
    <div class="form-group">
        <label>Foto</label><br>
        <img src="img/<?= $j['gambar'] ?>" width="118px">
    </div>
    <div class="form-group">
        <label>Ulasannya</label>
        <textarea class="form-control" name="ulasannya" required></textarea>
    </div>
    <div class="card-footer">
        <button type="submit" name="simpan" class="btn" style="background: #1ba5fb; color: white;">Simpan</button>
    </div>
  </div>                                 
</form>
                  </div>
                </div>
<!-- end contact content -->
       </div>
     </div>
   </div>
 </div>
</section>
<?php require('footer.php') ?>
<?php 
  if (isset($_POST['simpan'])) {
    $idtanam   = $_REQUEST['idtanam'];
    $id        = $_REQUEST['id'];
    $ulasannya = $_REQUEST['ulasannya'];

    $tambah = mysqli_query($kon,"INSERT INTO ulasan(id, idtanam, ulasannya) VALUES ('$id','$idtanam','$ulasannya')");
    if($tambah){
      ?> <script>alert('Berhasil Disimpan');window.location='ulasan.php';</script> <?php
    }else{
      ?> <script>alert('Gagal');window.location='ulasan.php';</script> <?php
    }
  }
?>