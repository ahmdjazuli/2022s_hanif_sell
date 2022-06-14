<?php require('headernya.php');
	$idpengeluaran = $_GET['idpengeluaran'];
	$query = mysqli_query($kon, "SELECT * FROM pengeluaran WHERE idpengeluaran = '$idpengeluaran'");
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
                <h2 style="display:inline;"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Ubah"><i class="fas fa-edit"></i></button> Data Pengeluaran</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" value="<?= $data['tgl'] ?>" class="form-control" name="tgl">
                  </div>
                  <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" value="<?= $data['ket'] ?>" class="form-control" name="ket">
                  </div>
                  <div class="form-group">
                    <label>Biaya</label>
                    <input type="number" class="form-control" value="<?= $data['total'] ?>" name="total">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="far fa-handshake"></i></button>
                  <button type="button" onclick="window.location='pengeluaran.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger float-right">
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
    $ket    = $_REQUEST['ket'];
    $tgl = $_REQUEST['tgl'];
    $total = $_REQUEST['total'];

    $ubah = mysqli_query($kon,"UPDATE pengeluaran SET ket='$ket', tgl='$tgl', total='$total' WHERE idpengeluaran = '$idpengeluaran'");
    if($ubah){
      ?> <script>alert('Berhasil Diperbaharui');window.location='pengeluaran.php';</script> <?php
    }else{
      ?> <script>alert('Gagal Diperbaharui');window.location='pengeluaran_edit.php?idpengeluaran=<?=$idpengeluaran?>';</script> <?php
    }
  }
 ?>