<?php require('headernya.php');
	$idkurir = $_GET['idkurir'];
	$query = mysqli_query($kon, "SELECT * FROM kurir WHERE idkurir = '$idkurir'");
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
                <h2 style="display:inline;"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Ubah"><i class="fas fa-edit"></i></button> Data Kurir</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="namakurir" value="<?= $data['namakurir'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Kontak</label>
                    <input type="text" class="form-control" name="kontakkurir" value="<?= $data['kontakkurir'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamatkurir"><?= $data['alamatkurir'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Layanan</label>
                    <select name="layanan" class="form-control">
                        <option value="<?= $data['layanan'] ?>"><?= $data['layanan'] ?></option>
                        <?php 
                          if($data['layanan']=="SiCepat Ekspress"){
                            ?> <option value="JNE">JNE</option> <?php
                            ?> <option value="J&T Express">J&T Express</option> <?php
                          }else if($data['layanan']=="JNE"){
                            ?> <option value="J&T Express">J&T Express</option> <?php
                            ?> <option value="SiCepat Ekspress">SiCepat Ekspress</option> <?php
                          }else if($data['layanan']=="J&T Express"){
                            ?> <option value="JNE">JNE</option> <?php
                            ?> <option value="SiCepat Ekspress">SiCepat Ekspress</option> <?php
                          }
                        ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <?php if($data['jkkurir']==1){ ?> 
                      <input type="radio" name="jkkurir" value="0" > Laki-Laki
                      <input type="radio" name="jkkurir" value="1" checked> Perempuan<br> 
                    <?php }else if($data['jkkurir']==0){ ?>
                      <input type="radio" name="jkkurir" value="0" checked> Laki-Laki
                      <input type="radio" name="jkkurir" value="1" > Perempuan<br> 
                    <?php } ?>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="far fa-handshake"></i></button>
                  <button type="button" onclick="window.location='kurir.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger float-right">
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
    $layanan    = $_REQUEST['layanan'];
    $namakurir    = $_REQUEST['namakurir'];
    $jkkurir    = $_REQUEST['jkkurir'];
    $kontakkurir    = $_REQUEST['kontakkurir'];
    $alamatkurir    = $_REQUEST['alamatkurir'];

    $ubah = mysqli_query($kon,"UPDATE kurir SET layanan='$layanan', namakurir='$namakurir', jkkurir = '$jkkurir', alamatkurir='$alamatkurir', kontakkurir = '$kontakkurir' WHERE idkurir = '$idkurir'");
    if($ubah){
      ?> <script>alert('Berhasil Diperbaharui');window.location='kurir.php';</script> <?php
    }else{
      ?> <script>alert('Gagal Diperbaharui');window.location='kurir_edit.php?idkurir=<?=$idkurir?>';</script> <?php
    }
  }
 ?>