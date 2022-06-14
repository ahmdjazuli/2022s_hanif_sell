<?php require('headernya.php');
	$idflash = $_GET['idflash'];
	$query = mysqli_query($kon, "SELECT * FROM flashsale INNER JOIN tanam ON flashsale.idtanam = tanam.idtanam WHERE idflash = '$idflash'");
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
                <h2 style="display:inline;"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Ubah"><i class="fas fa-edit"></i></button> Data Flash Sale</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>Waktu</label>
                    <input type="datetime-local" name="waktu" class="form-control" 
                        value="<?php echo date('Y-m-d\TH:i',strtotime($data['waktu'])) ?>">
                  </div>
                  <div class="form-group">
                    <label>Harga Awal</label>
                    <input type="number" id="hargaawal" onKeyup="hitung();" class="form-control" name="hargaawal" value="<?= $data['hargaawal'] ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Diskon</label>
                    <input type="number" id="diskon" onKeyup="hitung();" class="form-control" max="90" min="0" name="diskon" value="<?= $data['diskon'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Hasil</label>
                    <input type="number" id="hasil" required class="form-control">
                    <input type="hidden" id="hasillagi" name="hasil" class="form-control">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="far fa-handshake"></i></button>
                  <button type="button" onclick="window.location='flashsale.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger float-right">
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
    $hargaawal    = $_REQUEST['hargaawal'];
    $waktu    = $_REQUEST['waktu'];
    $diskon    = $_REQUEST['diskon'];
    $hasil    = $_REQUEST['hasil'];

    $ubah = mysqli_query($kon,"UPDATE flashsale SET hargaawal='$hargaawal', waktu='$waktu', diskon = '$diskon', hasil = '$hasil' WHERE idflash = '$idflash'");
    if($ubah){
      ?> <script>alert('Berhasil Diperbaharui');window.location='flashsale.php';</script> <?php
    }else{
      ?> <script>alert('Gagal Diperbaharui');window.location='flashsale_edit.php?idflash=<?=$idflash?>';</script> <?php
    }
  }
 ?>
 <script type="text/javascript">   

    function hitung() {
        var hargaawal = document.getElementById('hargaawal').value;
        var diskon = document.getElementById('diskon').value;

        var hasil = (parseInt(hargaawal)) * (100-(parseInt(diskon))) / 100;
        if (!isNaN(hasil)) {
           document.getElementById('hasil').value = hasil;
           document.getElementById('hasillagi').value = hasil;
        }
      }
</script> 