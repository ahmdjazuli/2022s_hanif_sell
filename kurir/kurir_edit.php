<?php require('headernya.php');
	$idkurir = $_GET['idkurir'];
	$query = mysqli_query($kon, "SELECT * FROM kurir WHERE idkurir = '$idkurir'");
	$data  = mysqli_fetch_array($query);
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br><br>
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h2 style="display:inline;"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Ubah"><i class="fas fa-edit"></i></button> Data Kurir</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="namakurir" value="<?= $data['namakurir'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" value="<?= $data['username'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" value="<?= $data['password'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Kontak</label>
                    <input type="text" class="form-control" name="kontakkurir" value="<?= $data['kontakkurir'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamatkurir"><?= $data['alamatkurir'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <?php if($data['jkkurir']==1){ ?> 
                      <input type="radio" name="jkkurir" value="0" > Laki-Laki
                      <input type="radio" name="jkkurir" value="1" checked> Perempuan<br> 
                    <?php }else if($data['jkkurir']==0){ ?>
                      <input type="radio" name="jkkurir" value="0" checked> Laki-Laki
                      <input type="radio" name="jkkurir" value="1" > Perempuan<br> 
                    <?php } ?>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="far fa-handshake"></i></button>
                  <button type="button" onclick="window.location='kurir.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger float-right">
                    <i class="far fa-window-close"></i></button>
                </div>
            	</div>
            </div>
        </div> <!-- /.row -->
      </section>
  </div> <!-- /.content-wrapper -->
<?php require('footernya.php') ?>

<?php 
  require('../koneksi.php');
  if (isset($_POST['simpan'])) {
    $alamatkurir    = $_REQUEST['alamatkurir'];
    $namakurir    = $_REQUEST['namakurir'];
    $username    = $_REQUEST['username'];
    $password    = $_REQUEST['password'];
    $kontakkurir    = $_REQUEST['kontakkurir'];
    $jkkurir    = $_REQUEST['jkkurir'];

    $ubah = mysqli_query($kon,"UPDATE kurir SET alamatkurir='$alamatkurir', namakurir='$namakurir', username = '$username', password = '$password', kontakkurir = '$kontakkurir', jkkurir = '$jkkurir' WHERE idkurir = '$idkurir'");
    if($ubah){
      ?> <script>alert('Berhasil Diperbaharui');window.location='kurir.php';</script> <?php
    }else{
      ?> <script>alert('Gagal Diperbaharui');window.location='kurir_edit.php?idkurir=<?=$idkurir?>';</script> <?php
    }
  }
 ?>