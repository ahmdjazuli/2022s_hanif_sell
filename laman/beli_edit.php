<?php require('headernya.php');
	$idbeli = $_GET['idbeli'];
	$query = mysqli_query($kon, "SELECT * FROM beli WHERE idbeli = '$idbeli'");
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
                <h2 style="display:inline;"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Ubah"><i class="fas fa-edit"></i></button> Transaksi Penjualan</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                      <option value="<?= $data['status'] ?>"><?= $data['status'] ?></option>
                      <option value="Diterima">Diterima</option>
                      <option value="Ditolak">Ditolak</option>
                    </select>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="far fa-handshake"></i></button>
                  <button type="button" onclick="window.location='beli.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger float-right">
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
    $status    = $_REQUEST['status'];
    $tgl       = date('Y-m-d');

    $ubah = mysqli_query($kon,"UPDATE beli SET status='$status' WHERE idbeli = '$idbeli'");
    $user = mysqli_query($kon,"SELECT * FROM `beli` INNER JOIN user ON beli.id = user.id WHERE idbeli = '$idbeli'");
    $row = mysqli_fetch_array($user);
    if($ubah){
      ?> <script>alert('Berhasil Diperbaharui');window.open("https://wa.me/?phone=<?= $row['telp'] ?>&text=Halo, <?= $row['nama'] ?>.%20Kami%20dari%20Lithastuff%20memberitahukan%20bahwa%0A%0APembeliaan%20Anda%20dengan%20_No.Transaksi%20:%20<?= $row['idbeli'] ?>_%20telah%20*DITERIMA*.");window.location='beli.php';</script> <?php
    }else{
      ?> <script>alert('Gagal Diperbaharui');window.location='beli_edit.php?idbeli=<?=$idbeli?>';</script> <?php
    }
  }
 ?>