<?php require('headernya.php');
	$notransaksi = $_GET['notransaksi'];
	$query = mysqli_query($kon, "SELECT * FROM transaksi WHERE notransaksi = '$notransaksi'");
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
                <h2 style="display:inline;"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Ubah"><i class="fas fa-edit"></i></button> Transaksi Service</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="tgl" value="<?= $data['tgl'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Catatan</label>
                    <input type="text" class="form-control" name="catatan" value="<?= $data['catatan'] ?>">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="far fa-handshake"></i></button>
                  <button type="button" onclick="window.location='transaksi.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger float-right">
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
    $catatan = $_REQUEST['catatan'];
    $tgl     = $_REQUEST['tgl'];

    $ubah = mysqli_query($kon,"UPDATE transaksi SET tgl='$tgl', catatan='$catatan' WHERE notransaksi = '$notransaksi'");
    if($ubah){
      ?> <script>alert('Berhasil Diperbaharui');window.location='transaksi.php';</script> <?php
    }else{
      ?> <script>alert('Gagal Diperbaharui');window.location='transaksi_edit.php?notransaksi=<?=$notransaksi?>';</script> <?php
    }
  }
 ?>