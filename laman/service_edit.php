<?php require('headernya.php');
	$idservice = $_GET['idservice'];
	$query = mysqli_query($kon, "SELECT * FROM service WHERE idservice = '$idservice'");
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
                <h2 style="display:inline;"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Ubah"><i class="fas fa-edit"></i></button> Data Ongkir</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nservice" value="<?= $data['nservice'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" name="ket" value="<?= $data['ket'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Harga</label>
                    <input type="number" class="form-control" name="total" value="<?= $data['total'] ?>">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="far fa-handshake"></i></button>
                  <button type="button" onclick="window.location='service.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger float-right">
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
    $nservice = $_REQUEST['nservice'];
    $ket      = $_REQUEST['ket'];
    $total    = $_REQUEST['total'];

    $ubah = mysqli_query($kon,"UPDATE service SET nservice='$nservice', ket='$ket', total = '$total' WHERE idservice = '$idservice'");
    if($ubah){
      ?> <script>alert('Berhasil Diperbaharui');window.location='service.php';</script> <?php
    }else{
      ?> <script>alert('Gagal Diperbaharui');window.location='service_edit.php?idservice=<?=$idservice?>';</script> <?php
    }
  }
 ?>