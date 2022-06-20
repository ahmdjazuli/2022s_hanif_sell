<?php require('headernya.php');
	$idtanamrusak = $_GET['idtanamrusak'];
	$query = mysqli_query($kon, "SELECT * FROM tanamrusak INNER JOIN tanam ON tanamrusak.idtanam = tanam.idtanam WHERE idtanamrusak = '$idtanamrusak'");
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
                <h2 style="display:inline;"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Ubah"><i class="fas fa-edit"></i></button> Barang Rusak</h2>
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
                    <label>Nama Barang</label>
                    <input type="text" class="form-control" value="<?= $data['namatanam'] ?>" readonly>
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
                  <button type="button" onclick="window.location='tanamrusak.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger float-right">
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
    $jumlah  = $_REQUEST['jumlah'];
    $tgl     = $_REQUEST['tgl'];
    $catatan = $_REQUEST['catatan'];

    $ubah = mysqli_query($kon,"UPDATE tanamrusak SET jumlah='$jumlah', tgl='$tgl', catatan = '$catatan' WHERE idtanamrusak = '$idtanamrusak'");
    if($ubah){
      ?> <script>alert('Berhasil Diperbaharui');window.location='tanamrusak.php';</script> <?php
    }else{
      ?> <script>alert('Gagal Diperbaharui');window.location='tanamrusak_edit.php?idtanamrusak=<?=$idtanamrusak?>';</script> <?php
    }
  }
 ?>