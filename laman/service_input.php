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
                <h2 style="display:inline;"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><i class="fas fa-folder-plus"></i></button> Data Service</h2>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nservice">
                  </div>
                  <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" name="ket">
                  </div>
                  <div class="form-group">
                    <label>Harga</label>
                    <input type="number" class="form-control" name="total">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="far fa-handshake"></i></button>
                  <button type="button" onclick="window.location='service.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger float-right">
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
    $nservice = $_REQUEST['nservice'];
    $ket      = $_REQUEST['ket'];
    $total    = $_REQUEST['total'];

    $tambah = mysqli_query($kon,"INSERT INTO service(ket, nservice, total) VALUES ('$ket','$nservice','$total')");
    if($tambah){
      ?> <script>alert('Berhasil Disimpan');window.location='service.php';</script> <?php
    }else{
      ?> <script>alert('Gagal');window.location='service_input.php';</script> <?php
    }
  }
 ?>