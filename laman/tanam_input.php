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
                <h2 style="display:inline;"><button class="btn btn-dark" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><i class="fas fa-plus"></i></button> Data Barang</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" class="form-control" name="namatanam">
                  </div>
                  <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="kategori">
                      <option value="Laptop ">Laptop </option>
                      <option value="PC Rakitan">PC Rakitan</option>
                      <option value="Monitor">Monitor</option>
                      <option value="Mouse">Mouse</option>
                      <option value="Flashdisk">Flashdisk</option>
                      <option value="Pembersih Laptop">Pembersih Laptop</option>
                      <option value="Casing PC">Casing PC</option>
                      <option value="Keyboard">Keyboard</option>
                      <option value="Cooling Procesor">Cooling Procesor</option>
                      <option value="Kabel Hdmi">Kabel Hdmi</option>
                      <option value="Speaker">Speaker</option>
                      <option value="RAM KOMPUTER">RAM KOMPUTER</option>
                      <option value="RAM LAPTOP">RAM LAPTOP</option>
                      <option value="PROCESOR PC">PROCESOR PC</option>
                      <option value="Power Supply">Power Supply</option>
                      <option value="MousePad">MousePad</option>
                      <option value="Kipas PC">Kipas PC</option>
                      <option value="Batrai Laptop">Batrai Laptop</option>
                      <option value="Lampu Tumbler">Lampu Tumbler</option>
                      <option value="Sparepart Laptop">Sparepart Laptop</option>
                      <option value="Sparepart PC">Sparepart PC</option>
                      <option value="Charger Laptop">Charger Laptop</option>
                      <option value="MotherBoard">MotherBoard</option>
                      <option value="Camera PC">Camera PC</option>
                      <option value="Headphone">Headphone</option>
                      <option value="Headshet">Headshet</option>
                      <option value="Tas Laptop">Tas Laptop</option>
                      <option value="Pasta for procesor">Pasta for procesor</option>
                      <option value="LCD Laptop">LCD Laptop</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Modal</label>
                    <input type="text" class="form-control" name="modal">
                  </div>
                  <div class="form-group">
                    <label>Harga Jual</label>
                    <input type="number" class="form-control" name="harga">
                  </div>
                </div>
              </div>
              </div>
              <div class="col-md-6 col-sm-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" rows="4"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" class="form-control" name="gambar">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="far fa-handshake"></i></button>
                  <button type="button" onclick="window.location='tanam.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger float-right">
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
    $namatanam = $_REQUEST['namatanam'];
    $kategori  = $_REQUEST['kategori'];
    $modal     = $_REQUEST['modal'];
    $harga     = $_REQUEST['harga'];
    $deskripsi = $_REQUEST['deskripsi'];

    $ekstensi_diperbolehkan = array('png','jpg','jpeg');
    $namafoto               = $_FILES['gambar']['name'];
    $x                      = explode('.', $namafoto);
    $ekstensi               = strtolower(end($x));
    $ukuran                 = $_FILES['gambar']['size'];
    $file_tmp               = $_FILES['gambar']['tmp_name'];

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
      if($ukuran < 2048000){  
        $namabaru = rand(1000,9999).preg_replace("/[^a-zA-Z0-9]/", ".", $namafoto);   
        move_uploaded_file($file_tmp, '../img/'.$namabaru);
        
        $hasil = mysqli_query($kon,"INSERT INTO tanam (namatanam, kategori, modal, harga, deskripsi, gambar) VALUES ('$namatanam','$kategori','$modal','$harga','$deskripsi','$namabaru')");

        if($hasil){
          ?> <script>alert('Berhasil Disimpan!'); window.location = 'tanam.php';</script><?php
        }else{
          ?> <script>alert('Gagal, cek kembali!.'); window.location = 'tanam_input.php';</script><?php
        }
      }else{
        ?> <script>alert('Gagal, Ukuran File Maksimal 2MB!'); window.location = 'tanam_input.php';</script><?php
      }
    }else{
      ?> <script>alert('Gagal, File yang diupload format jpg, jpeg atau png!'); window.location = 'tanam_input.php';</script><?php
    }    
}?>