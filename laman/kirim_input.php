<?php require('headernya.php');
  $idbeli = $_GET['idbeli'];
  $query = mysqli_query($kon, "SELECT * FROM beli INNER JOIN user ON beli.id = user.id WHERE idbeli = '$idbeli'");
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
                <h2 style="display:inline;"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><i class="fas fa-folder-plus"></i></button> Pengiriman</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>No. Pembelian</label>
                    <input type="number" class="form-control" name="idbeli" value="<?= $idbeli ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Nama Pembeli</label>
                    <input type="text" class="form-control" value="<?= $data['nama'] ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Pilih Kurir</label>
                    <select name="idkurir" class="form-control" required>
                      <option value="">-</option>
                    <?php
                      $ahay = mysqli_query($kon, "SELECT * FROM kurir ORDER BY namakurir ASC");
                        while($baris = mysqli_fetch_array($ahay)) {
                          echo "<option value='$baris[idkurir]'>$baris[namakurir]</option>";
                        } 
                      ?>
                  </select>
                  </div>
                  <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control" name="ket"></textarea>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="far fa-handshake"></i></button>
                  <button type="button" onclick="window.location='beli.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger float-right">
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
    $idkurir    = $_REQUEST['idkurir'];
    $ket = $_REQUEST['ket'];
    $idbeli = $_REQUEST['idbeli'];

    $tambah = mysqli_query($kon,"INSERT INTO kirim(idkurir, ket, idbeli, statuskirim) VALUES ('$idkurir','$ket','$idbeli','Menunggu')");
    if($tambah){
      ?> <script>alert('Berhasil Disimpan');window.location='kirim.php';</script> <?php
    }else{
      ?> <script>alert('Gagal');window.location='kirim_input.php?idbeli=<?= $idbeli ?>';</script> <?php
    }
  }
 ?>