<?php require('headernya.php');
	$idkirim = $_GET['idkirim'];
	$query = mysqli_query($kon, "SELECT * FROM kirim WHERE idkirim = '$idkirim'");
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
                <h2 style="display:inline;"><button class="btn btn-default" type="button" data-toggle="tooltip" data-placement="bottom" title="Ubah"><i class="fas fa-edit"></i></button> Data Pengiriman</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Penerima</label>
                    <input type="text" class="form-control" name="penerima" value="<?= $data['penerima'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="file" class="form-control" name="gambar" required>
                  </div>
                  <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" name="ket" value="<?= $data['ket'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <select name="statuskirim" class="form-control">
                        <option value="<?= $data['statuskirim'] ?>"><?= $data['statuskirim'] ?></option>
                        <?php 
                          if($data['statuskirim']=="Menunggu"){
                            ?> <option value="Selesai">Selesai</option> <?php
                          }else if($data['statuskirim']=="Selesai"){
                            ?> <option value="Menunggu">Menunggu</option> <?php
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
            </form>
            </div>
        </div> <!-- /.row -->
      </section>
  </div> <!-- /.content-wrapper -->
<?php require('footernya.php') ?>

<?php 
  require('../koneksi.php');
  if (isset($_POST['simpan'])) {
    $penerima    = $_REQUEST['penerima'];
    $ket    = $_REQUEST['ket'];
    $statuskirim    = $_REQUEST['statuskirim'];

    $ekstensi_diperbolehkan = array('png','jpg','jpeg');
    $namafoto = $_FILES['gambar']['name'];
    $x = explode('.', $namafoto);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['gambar']['size'];
    $file_tmp = $_FILES['gambar']['tmp_name'];

    $user = mysqli_query($kon,"SELECT * FROM `beli` INNER JOIN user ON beli.id = user.id WHERE idbeli = '$data[idbeli]'");
    $row = mysqli_fetch_array($user);

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
      if($ukuran < 2048000){  
        $namabaru = rand(1000,9999).preg_replace("/[^a-zA-Z0-9]/", ".", $namafoto);   
        move_uploaded_file($file_tmp, '../img/'.$namabaru);
        
        $ubah = mysqli_query($kon,"UPDATE kirim SET penerima='$penerima', ket='$ket', statuskirim = '$statuskirim', foto = '$namabaru' WHERE idkirim = '$idkirim'");

          ?> <script>alert('Berhasil Diperbaharui');window.open("https://wa.me/?phone=<?= $row['telp'] ?>&text=Halo, <?= $row['nama'] ?>.%20Kami%20dari%20Lithastuff%20memberitahukan%20bahwa%0A%0APengiriman%20Anda%20dengan%20_No.Transaksi%20:%20<?= $row['idbeli'] ?>_%20telah%20*SAMPAI*.");window.location='kirim.php';</script> <?php
      }else{
        ?> <script>alert('Gagal, Ukuran File Maksimal 2MB!'); window.location = 'kirim_edit.php?idkirim=<?=$idkirim?>';</script><?php
      }
    }else{
      ?> <script>alert('Gagal, File yang diupload format jpg, jpeg atau png!'); window.location = 'kirim_edit.php?idkirim=<?=$idkirim?>';</script><?php
    }  
  } 
?>