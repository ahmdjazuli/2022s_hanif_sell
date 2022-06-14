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
                <h2 style="display:inline;"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><i class="fas fa-folder-plus"></i></button> Flashsale</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>Waktu</label>
                    <input type="datetime-local" name="waktu" class="form-control" value="<?php echo date('Y-m-d\TH:i') ?>">
                  </div>
                  <div class="form-group">
                    <label>Nama Barang</label>
                    <select name="idtanam" class="form-control" onchange='ubah(this.value)' required>
                      <option disabled selected>Pilih</option>
                    <?php
                      $epep = mysqli_query($kon, "SELECT * FROM tanam ORDER BY terjual ASC");
                      $b    = "var harga = new Array();\n;";
                        while($bocil = mysqli_fetch_array($epep)) {
                          echo "<option value='$bocil[idtanam]'>$bocil[namatanam]</option>";
                          $b .= "harga['" . $bocil['idtanam'] . "'] = {harga:'" . addslashes($bocil['harga'])."'};\n";
                        } 
                      ?>
                  </select>
                  </div>
                  <div class="form-group">
                    <label>Harga Awal</label>
                    <input type="number" class="form-control" id="harga" name="harga" readonly>
                  </div>
                  <div class="form-group">
                    <label>Diskon</label>
                    <input type="number" class="form-control" name="diskon" max="50" required>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="far fa-handshake"></i></button>
                  <button type="button" onclick="window.location='flashsale.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger float-right">
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
    $waktu      = $_REQUEST['waktu'];
    $diskon     = $_REQUEST['diskon'];
    $harga      = $_REQUEST['harga'];
    $hasil      = (100 - $diskon) * $harga / 100;

    $tambah = mysqli_query($kon,"INSERT INTO flashsale(waktu, idtanam, hasil, diskon, hargaawal) VALUES ('$waktu','$idtanam','$hasil','$diskon','$harga')");
    if($tambah){
      ?> <script>alert('Berhasil Disimpan');window.location='flashsale.php';</script> <?php
    }else{
      ?> <script>alert('Gagal');window.location='flashsale_input.php';</script> <?php
    }
  }
 ?>

<script type="text/javascript">   
  <?php echo $b; ?>
  function ubah(id){  
      document.getElementById('harga').value = harga[id].harga; 
  };   
</script> 