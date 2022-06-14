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
                <h2 style="display:inline;"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><i class="fas fa-folder-plus"></i></button> Data Ongkir</h2>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>Nama Wilayah/Kota</label>
                    <input type="text" class="form-control" name="kota">
                  </div>
                  <div class="form-group">
                    <label>Tarif</label>
                    <input type="number" class="form-control" name="tarif">
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
    $tarif    = $_REQUEST['tarif'];
    $kota = $_REQUEST['kota'];

    $cek = mysqli_query($kon, "SELECT * FROM ongkir WHERE kota='$kota'");

    if(mysqli_num_rows($cek)>0){
        ?> <script>alert('Nama Kota Sudah Digunakan');window.location='ongkir_input.php';</script> <?php
    }else{
        $tambah = mysqli_query($kon,"INSERT INTO ongkir(kota, tarif) VALUES ('$kota','$tarif')");
        if($tambah){
          ?> <script>alert('Berhasil Disimpan');window.location='ongkir.php';</script> <?php
        }else{
          ?> <script>alert('Gagal');window.location='ongkir_input.php';</script> <?php
        }
    }
  }
 ?>