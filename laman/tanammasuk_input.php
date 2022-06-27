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
                <h2 style="display:inline;"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><i class="fas fa-folder-plus"></i></button> Barang Masuk</h2>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="tgl" value="<?= date('Y-m-d') ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Nama Barang</label>
                    <select name="idtanam" class="form-control" onchange='ubah(this.value)' required>
                      <option value="">-Pilih-</option>
                    <?php
                      $ahay = mysqli_query($kon, "SELECT * FROM tanam ORDER BY namatanam ASC");
                      $b    = "var hargamasuk = new Array();\n;";
                        while($baris = mysqli_fetch_array($ahay)) {
                          echo "<option value='$baris[idtanam]'>$baris[namatanam]</option>";
                          $b .= "hargamasuk['" . $baris['idtanam'] . "'] = {hargamasuk:'" . addslashes($baris['modal'])."'};\n";
                        } 
                      ?>
                  </select>
                  </div>
                  <div class="form-group">
                    <label>Harga</label>
                    <input type="number" class="form-control" id="hargamasuk" name="hargamasuk" readonly name="hargamasuk">
                  </div>
                  <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" required>
                  </div>
                  <div class="form-group">
                    <label>Catatan</label>
                    <textarea class="form-control" name="catatan"></textarea>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="far fa-handshake"></i></button>
                  <button type="button" onclick="window.location='tanammasuk.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger float-right">
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
    $idtanam    = $_REQUEST['idtanam'];
    $tgl = $_REQUEST['tgl'];
    $jumlah = $_REQUEST['jumlah'];
    $catatan = $_REQUEST['catatan'];
    $hargamasuk = $_REQUEST['hargamasuk'];

      $tambah = mysqli_query($kon,"INSERT INTO tanammasuk(tgl, jumlah, idtanam, catatan, hargamasuk) VALUES ('$tgl','$jumlah','$idtanam','$catatan','$hargamasuk')");
      if($tambah){
        ?> <script>alert('Berhasil Disimpan');window.location='tanammasuk.php';</script> <?php
      }else{
        ?> <script>alert('Gagal');window.location='tanammasuk_input.php';</script> <?php
      }
  }
 ?>
 <script type="text/javascript">   
  <?php echo $b; ?>
  function ubah(id){  
      document.getElementById('hargamasuk').value = hargamasuk[id].hargamasuk; 
  };   
</script> 