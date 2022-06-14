<?php require('headernya.php');
	$id = $_GET['id'];
	$query = mysqli_query($kon, "SELECT * FROM user WHERE id = '$id'");
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
                <h2 style="display:inline;"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Ubah"><i class="fas fa-edit"></i></button> Data Pengguna</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" value="<?= $data['username'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Telp</label>
                    <input type="number" class="form-control" name="telp" value="<?= $data['telp'] ?>">
                  </div>
                </div>
            	</div>
              </div>
              <div class="col-md-6 col-sm-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="<?= $data['email'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat"><?= $data['alamat'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <br>
                    <input type="radio" name="jk" value="0" checked> Laki-Laki &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="jk" value="1"> Perempuan
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="far fa-handshake"></i></button>
                  <button type="button" onclick="window.location='user.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger float-right">
                    <i class="far fa-window-close"></i></button>
                </div>
            	</div>
              </div> <!-- /.card-body -->
            </div> <!-- /.card -->
          </div> <!-- /.col -->
        </div> <!-- /.row -->
      </section>
  </div> <!-- /.content-wrapper -->
<?php require('footernya.php') ?>

<?php 
  require('../koneksi.php');
  if (isset($_POST['simpan'])) {
    $username    = $_REQUEST['username'];
    $alamat    = $_REQUEST['alamat'];
    $telp    = $_REQUEST['telp'];
    $email    = $_REQUEST['email'];
    $nama = $_REQUEST['nama'];
    $jk = $_REQUEST['jk'];

    $ubah = mysqli_query($kon,"UPDATE user SET username='$username', alamat='$alamat', telp='$telp', email='$email', nama='$nama', jk = '$jk' WHERE id = '$id'");
    if($ubah){
      ?> <script>alert('Berhasil Diperbaharui');window.location='user.php';</script> <?php
    }else{
      ?> <script>alert('Gagal Diperbaharui');window.location='user_edit.php?id=<?=$id?>';</script> <?php
    }
  }
 ?>