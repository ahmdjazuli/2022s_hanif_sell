<?php 
  require('headernya.php');
  error_reporting(1);

  $se= mysqli_fetch_array(mysqli_query($kon, "SELECT * FROM pengaturan WHERE id = 1"));
  $pengeluaran= mysqli_num_rows(mysqli_query($kon, "SELECT * FROM pengeluaran"));
   $kurir   = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM kurir"));
   $kirim = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM kirim"));
   $flashsale     = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM flashsale"));
   $pendapatan     = mysqli_num_rows(mysqli_query($kon, "SELECT DATE(tglbeli) as hari FROM beli GROUP BY hari"));
   $pendapatan1     = mysqli_num_rows(mysqli_query($kon, "SELECT MONTH(tglbeli) as bulan FROM beli GROUP BY bulan"));
   $ongkir   = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM ongkir"));
   $reseller   = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM `beli` INNER JOIN ongkir ON beli.idongkir = ongkir.idongkir INNER JOIN user ON beli.id = user.id WHERE level = 'reseller'"));
   $tanammasuk      = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM tanammasuk"));
   $beli   = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM `beli` INNER JOIN ongkir ON beli.idongkir = ongkir.idongkir INNER JOIN user ON beli.id = user.id WHERE level = 'pelanggan'"));
   $tanam      = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM tanam"));
   $user      = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM user WHERE NOT level='admin'"));
?>
  <!-- Content Wrapper. Contains page content -->
  <section id="about" class="home-section bg-black">
    <div class="container">
        <div class="row">
          <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
           <!-- <h2>VAMOS FC MATARAMAN</h2>
           <p> Kami telah berdiri sejak tahun 2010 sebagai team futsal terbaik di indonesia</p> -->
          
        

</div>
</div>
</div>
        <div class="Widget" id="product">
<div class="container">
  
  <div class="widget" id="about">
  <div class="pac-container">
<div class="alert alert-info">
  <center>
<strong><center>-------HALAMAN ADMIN-------</center></STRONG>
    <h2> SELAMAT DATANG DAN SELAMAT BEKERJA WAHAI ADMIN</h2>
    <p>-By Owner------</p>
  <div id="Ridhoslider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
      <li data-target="#Ridhoslider" data-slide-to="0" class="active"></li>
      <li data-target="#Ridhoslider" data-slide-to="1"></li>
      <li data-target="#Ridhoslider" data-slide-to="2"></li>
    </ol>
<div class="carousel-inner">

      <div class="item active">
        <img src="../img/admin1.png" alt="Fix laptop" style="width:40%;">
  <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>

        
      </div>
  
    </div>
        <a class="left carousel-control" href="#Ridhoslider" data-slide="prev">
      <span class=""></span>
      <span class="sr-only">Back</span>
    </a>
    <a class="right carousel-control" href="#Ridhoslider" data-slide="next">
      <span class=""></span>
      <span class="sr-only">Next</span>
      </center>
    </a>
  </div>
</div>
</div>
</div>
</div>
                </div>
        </div>        
      </div>    
    </section>

        </div> <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> 
</div><!-- /.content wrapper -->

<?php require('footernya.php') ?>