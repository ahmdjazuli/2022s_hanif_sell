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
                <h2 style="display:inline;"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><i class="fas fa-folder-plus"></i></button> Data Supplier</h2>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nsupplier">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat">
                  </div>
                  <div class="form-group">
                    <label>Telp</label>
                    <input type="tel" class="form-control" name="telp">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="far fa-handshake"></i></button>
                  <button type="button" onclick="window.location='supplier.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger float-right">
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
    $nsupplier = $_REQUEST['nsupplier'];
    $alamat      = $_REQUEST['alamat'];
    $telp    = $_REQUEST['telp'];
    $email    = $_REQUEST['email'];

    $tambah = mysqli_query($kon,"INSERT INTO supplier(alamat, nsupplier, telp, email) VALUES ('$alamat','$nsupplier','$telp','$email')");
    if($tambah){
      ?> <script>alert('Berhasil Disimpan');window.location='supplier.php';</script> <?php
    }else{
      ?> <script>alert('Gagal');window.location='supplier_input.php';</script> <?php
    }
  }
 ?>