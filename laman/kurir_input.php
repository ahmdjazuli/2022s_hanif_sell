<?php require('headernya.php');  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br><br>
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h2 style="display:inline;"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><i class="fas fa-folder-plus"></i></button> Data Kurir</h2>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="namakurir">
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username">
                  </div>
                  <div class="form-group">
                    <label>Layanan</label>
                    <select name="layanan" class="form-control">
                      <option value="JNE">JNE</option>
                      <option value="J&T Express">J&T Express</option>
                      <option value="SiCepat Ekspress">SiCepat Ekspress</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <input type="radio" name="jk" value="0" checked> Laki-Laki
                    <input type="radio" name="jk" value="1"> Perempuan<br>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="far fa-handshake"></i></button>
                  <button type="button" onclick="window.location='user.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger float-right">
                    <i class="far fa-window-close"></i></button>
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
    $namakurir    = $_REQUEST['namakurir'];
    $username = $_REQUEST['username'];
    $jk = $_REQUEST['jk'];
    $layanan = $_REQUEST['layanan'];

    $cek = mysqli_query($kon, "SELECT * FROM kurir WHERE username='$username'");

    if(mysqli_num_rows($cek)>0){
        ?> <script>alert('Nama username Sudah Digunakan');window.location='kurir_input.php';</script> <?php
    }else{
        $tambah = mysqli_query($kon,"INSERT INTO kurir(username, namakurir, password, jkkurir, layanan) VALUES ('$username','$namakurir','$username','$jk','$layanan')");
        if($tambah){
          ?> <script>alert('Berhasil Disimpan');window.location='kurir.php';</script> <?php
        }else{
          ?> <script>alert('Gagal');window.location='kurir_input.php';</script> <?php
        }
    }
  }
 ?>