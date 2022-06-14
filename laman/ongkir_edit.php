<?php require('headernya.php');
	$idongkir = $_GET['idongkir'];
	$query = mysqli_query($kon, "SELECT * FROM ongkir WHERE idongkir = '$idongkir'");
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
                    <label>Nama Kota/Wilayah</label>
                    <input type="text" class="form-control" name="kota" value="<?= $data['kota'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Tarif</label>
                    <input type="text" class="form-control" name="tarif" value="<?= $data['tarif'] ?>">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="far fa-handshake"></i></button>
                  <button type="button" onclick="window.location='ongkir.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger float-right">
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
    $tarif    = $_REQUEST['tarif'];
    $kota    = $_REQUEST['kota'];

    $ubah = mysqli_query($kon,"UPDATE ongkir SET tarif='$tarif', kota='$kota' WHERE idongkir = '$idongkir'");
    if($ubah){
      ?> <script>alert('Berhasil Diperbaharui');window.location='ongkir.php';</script> <?php
    }else{
      ?> <script>alert('Gagal Diperbaharui');window.location='ongkir_edit.php?idongkir=<?=$idongkir?>';</script> <?php
    }
  }
 ?>