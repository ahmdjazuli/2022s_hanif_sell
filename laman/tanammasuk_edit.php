<?php require('headernya.php');
	$idtanammasuk = $_GET['idtanammasuk'];
	$query = mysqli_query($kon, "SELECT * FROM tanammasuk INNER JOIN tanam ON tanammasuk.idtanam = tanam.idtanam INNER JOIN supplier ON tanammasuk.idsupplier = supplier.idsupplier WHERE idtanammasuk = '$idtanammasuk'");
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
                <h2 style="display:inline;"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Ubah"><i class="fas fa-edit"></i></button> Barang Masuk</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="tgl" value="<?= $data['tgl'] ?>">
                  </div>
                  <td>
                  <div class="form-group">
                    <label>Nama Barang (Harganya)</label>
                    <input type="text" class="form-control" value="<?= $data['namatanam'].' (Rp. '.$data['hargamasuk'].')' ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Nama Supplier</label>
                    <select name="idsupplier" class="form-control" required>
                      <option value="<?= $data['idsupplier'] ?>"><?= $data['nsupplier'] ?></option>
                    <?php
                      $okelah = mysqli_query($kon, "SELECT * FROM supplier ORDER BY nsupplier ASC");
                        while($bisa = mysqli_fetch_array($okelah)) {
                          echo "<option value='$bisa[idsupplier]'>$bisa[nsupplier]</option>";
                        } 
                      ?>
                  </select>
                  </div>
                  <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" value="<?= $data['jumlah'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Catatan</label>
                    <textarea class="form-control" name="catatan"><?= $data['catatan'] ?></textarea>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="far fa-handshake"></i></button>
                  <button type="button" onclick="window.location='tanammasuk.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger float-right">
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
    $jumlah    = $_REQUEST['jumlah'];
    $tgl    = $_REQUEST['tgl'];
    $catatan    = $_REQUEST['catatan'];
    $idsupplier    = $_REQUEST['idsupplier'];

    $ubah = mysqli_query($kon,"UPDATE tanammasuk SET jumlah='$jumlah', tgl='$tgl', catatan = '$catatan', idsupplier = '$idsupplier' WHERE idtanammasuk = '$idtanammasuk'");
    if($ubah){
      ?> <script>alert('Berhasil Diperbaharui');window.location='tanammasuk.php';</script> <?php
    }else{
      ?> <script>alert('Gagal Diperbaharui');window.location='tanammasuk_edit.php?idtanammasuk=<?=$idtanammasuk?>';</script> <?php
    }
  }
 ?>