<?php 
  require('headernya.php');
  error_reporting(1);
  $kirim1  = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM kirim WHERE idkurir = '$hohoho[idkurir]' AND statuskirim = 'Menunggu'"));
  $kirim2  = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM kirim WHERE idkurir = '$hohoho[idkurir]' AND statuskirim = 'Selesai'"));
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br><br>
    <div class="content">
      <div class="container">
        <div class="row">
           <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-dark">
              <span class="info-box-icon" style="font-size: 50px">
                <i class="fas fa-user-astronaut"></i></span>
              <div class="info-box-content">
                <span class="info-box-text"><b>Data Kurir</b></span>
                <span class="info-box-number">1</span>
                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  <a href="kurir.php" class="text-white"><small>Lihat Selengkapnya</small></a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-dark">
              <span class="info-box-icon" style="font-size: 50px">
                <i class="fas fa-shipping-fast"></i></span>
              <div class="info-box-content">
                <span class="info-box-text"><b>Pengiriman</b> <i class='fas fa-clock'></i></span>
                <span class="info-box-number"><?= $kirim1 ?></span>
                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  <a href="kirim.php" class="text-white"><small>Lihat Selengkapnya</small></a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-dark">
              <span class="info-box-icon" style="font-size: 50px">
                <i class="fas fa-shipping-fast"></i></span>
              <div class="info-box-content">
                <span class="info-box-text"><b>Pengiriman</b> <i class='fas fa-check'></i></span>
                <span class="info-box-number"><?= $kirim2 ?></span>
                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  <a href="kirim.php" class="text-white"><small>Lihat Selengkapnya</small></a>
                </span>
              </div>
            </div>
          </div>

        </div> <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> 
</div><!-- /.content wrapper -->

<?php require('footernya.php') ?>