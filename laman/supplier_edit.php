<?php require('headernya.php');
	$idsupplier = $_GET['idsupplier'];
	$query = mysqli_query($kon, "SELECT * FROM supplier WHERE idsupplier = '$idsupplier'");
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
                <h2 style="display:inline;"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Ubah"><i class="fas fa-edit"></i></button> Data Supplier</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nsupplier" value="<?= $data['nsupplier'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?= $data['alamat'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Telp</label>
                    <input type="tel" class="form-control" name="telp" value="<?= $data['telp'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="<?= $data['email'] ?>">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="far fa-handshake"></i></button>
                  <button type="button" onclick="window.location='supplier.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger float-right">
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
    $nsupplier = $_REQUEST['nsupplier'];
    $alamat      = $_REQUEST['alamat'];
    $telp    = $_REQUEST['telp'];
    $email    = $_REQUEST['email'];

    $ubah = mysqli_query($kon,"UPDATE supplier SET nsupplier='$nsupplier', alamat='$alamat', telp = '$telp', email = '$email' WHERE idsupplier = '$idsupplier'");
    if($ubah){
      ?> <script>alert('Berhasil Diperbaharui');window.location='supplier.php';</script> <?php
    }else{
      ?> <script>alert('Gagal Diperbaharui');window.location='supplier_edit.php?idsupplier=<?=$idsupplier?>';</script> <?php
    }
  }
 ?>