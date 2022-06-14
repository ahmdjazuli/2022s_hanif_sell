<?php require('headernya.php');
	$idkirim = $_GET['idkirim'];
	$query = mysqli_query($kon, "SELECT * FROM kirim INNER JOIN kurir ON kirim.idkurir = kurir.idkurir WHERE idkirim = '$idkirim'");
	$data  = mysqli_fetch_array($query);
  $idbeli = $data['idbeli'];
  $beli = mysqli_query($kon, "SELECT * FROM beli INNER JOIN user ON beli.id = user.id WHERE idbeli = '$idbeli'");
  $row  = mysqli_fetch_array($beli);
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
                <h2 style="display:inline;"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Ubah"><i class="fas fa-edit"></i></button> Pengiriman</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>No. Pembelian</label>
                    <input type="number" class="form-control" name="idbeli" value="<?= $row['idbeli'] ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Nama Pembeli</label>
                    <input type="text" class="form-control" value="<?= $row['nama'] ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Pilih Kurir</label>
                    <select name="idkurir" class="form-control" required>
                      <option value="<?= $data['idkurir'] ?>"><?= $data['namakurir'] ?></option>
                    <?php
                      $ahay = mysqli_query($kon, "SELECT * FROM kurir ORDER BY namakurir ASC");
                        while($baris = mysqli_fetch_array($ahay)) {
                          echo "<option value='$baris[idkurir]'>$baris[namakurir]</option>";
                        } 
                      ?>
                  </select>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="far fa-handshake"></i></button>
                  <button type="button" onclick="window.location='kirim.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger float-right">
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
    $idkurir    = $_REQUEST['idkurir'];

    $ubah = mysqli_query($kon,"UPDATE kirim SET idkurir='$idkurir' WHERE idkirim = '$idkirim'");
    if($ubah){
      ?> <script>alert('Berhasil Diperbaharui');window.location='kirim.php';</script> <?php
    }else{
      ?> <script>alert('Gagal Diperbaharui');window.location='kirim_edit.php?idkirim=<?=$idkirim?>';</script> <?php
    }
  }
 ?>