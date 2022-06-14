<?php require('header.php'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
						Lengkapi Profil Anda :)
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
			<h1 class="text-center latestitems"> <?= $data['kategori'] ?></h1>
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
	<div class="col-md-offset-1 col-md-6">
		<div class="properties-box">
		<div class="card">
          <div class="card-header">
            <h2 style="display:inline;"><i class="fas fa-user-circle"></i> Ubah Data Pengguna (<?= $memori['level'] ?>)</h2> </div>
          	<div class="card-body">
                <form action="" method="POST">
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="hidden" name="id" value="<?= $memori['id'] ?>">
                    <input type="text" class="form-control" name="nama" value="<?= $memori['nama'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" value="<?= $memori['username'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" value="<?= $memori['password'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <input type="radio" name="jk" value="0" required> Laki-Laki
					<input type="radio" name="jk" value="1" required> Perempuan
                  </div>
                  <div class="form-group">
                    <label>Telp</label>
                    <input type="number" class="form-control" name="telp" value="<?= $memori['telp'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="<?= $memori['email'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" required><?= $memori['alamat'] ?></textarea>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="ubah" class="btn" style="background-color: #4169e1" data-toggle="tooltip" data-placement="bottom" title="Ubah"><i class="far fa-handshake" style="color:white"></i></button>
                  <button type="reset" data-toggle="tooltip" style="background-color: #9ad8fe; color: black;" data-placement="bottom" title="Reset" class="btn float-right"> <i class="fas fa-sync-alt"></i></button>
                </div>
      			</form>
          	</div>
        </div>
	</div>
	<div class="col-md-4">
		<div class="properties-box">
			<ul class="unstyle">
				<h1>Tentang Anda</h1>
				<li><b class="propertyname">Nama Lengkap:</b> <?= $memori['nama'] ?></li>
				<li><b class="propertyname">Username:</b> <?= $memori['username'] ?></li>
				<li><b class="propertyname">Password:</b> <?= $memori['password'] ?></li>
				<li><b class="propertyname">Jenis Kelamin:</b> <?php 
					if($memori['jk'] == 0){
						echo "Laki-Laki";
					}else{
						echo "Perempuan";
					} ?></li>
				<li><b class="propertyname">Telp:</b> <?= $memori['telp'] ?></li>
				<li><b class="propertyname">Email:</b> <?= $memori['email'] ?></li>
				<li><b class="propertyname">Alamat:</b> <?= $memori['alamat'] ?></li><br>
				<li><a href="belanja.php" class="homebrowseitems">Kembali<div class="homebrowseitemsicon"><i class="fa fa-backward fa-spin"></i></div></a></li>
			</ul>
		</div>
	</div>
</div> <!-- row -->
<br>
</div> <!-- container -->
</section>

<?php require('footer.php') ?>
<?php 
	if (isset($_POST['ubah'])) {
    $nama    = $_REQUEST['nama'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $telp = $_REQUEST['telp'];
    $email = $_REQUEST['email'];
    $alamat = $_REQUEST['alamat'];
    $jk = $_REQUEST['jk'];
    $id = $_REQUEST['id'];

    $ubah = mysqli_query($kon,"UPDATE user SET nama='$nama', username='$username', password = '$password', telp = '$telp', email = '$email', alamat = '$alamat', jk = '$jk' WHERE id = '$id'");
    if($ubah){
      ?> <script>alert('Berhasil Diperbaharui');window.location='profil.php';</script> <?php
    }else{
      ?> <script>alert('Gagal Diperbaharui');window.location='profil.php';</script> <?php
    }
} ?>