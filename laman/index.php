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

<?php 
  $grafik = mysqli_query($kon, "SELECT MONTH(tglbeli) as bulan, MONTH(tglbeli) as angka, SUM(total) as total FROM beli WHERE status = 'Diterima' GROUP BY bulan");

  $grafik1 = mysqli_query($kon, "SELECT namatanam, terjual FROM tanam ORDER BY terjual DESC LIMIT 0,5");

  $total = [];
  $bulan = [];
  $namatanam = [];
  $terjual = [];

  while($baris=mysqli_fetch_array($grafik)){
    if($baris['bulan']==7){
      $baris['bulan'] = 'Juli';
    }else if($baris['bulan']==8){
      $baris['bulan'] = 'Agustus';
    }else if($baris['bulan']==6){
      $baris['bulan'] = 'Juni';
    }else if($baris['bulan']==1){
      $baris['bulan'] = 'Januari';
    }else if($baris['bulan']==2){
      $baris['bulan'] = 'Februari';
    }else if($baris['bulan']==3){
      $baris['bulan'] = 'Maret';
    }else if($baris['bulan']==4){
      $baris['bulan'] = 'April';
    }else if($baris['bulan']==5){
      $baris['bulan'] = 'Mei';
    }else if($baris['bulan']==9){
      $baris['bulan'] = 'September';
    }else if($baris['bulan']==10){
      $baris['bulan'] = 'Oktober';
    }else if($baris['bulan']==11){
      $baris['bulan'] = 'November';
    }else if($baris['bulan']==12){
      $baris['bulan'] = 'Desember';
    }
    $total[] = (float)$baris['total'];
    $bulan[] = (string)$baris['bulan'];
  } 

  while($baris1=mysqli_fetch_array($grafik1)){
    $namatanam[] = (string)$baris1['namatanam'];
    $terjual[] = (float)$baris1['terjual'];
  }
?>

<script src="../assets/plugins/chart.js/Chart.min.js"></script>
<script>
  $(function () {
  'use strict'

  var ticksStyle = {
    fontColor: '#495057',
    fontStyle: 'bold'
  }

  var mode      = 'index'
  var intersect = true

  var $salesChart = $('#statistik')
  var salesChart  = new Chart($salesChart, {
    type   : 'bar',
    data   : {
      labels  : <?php echo json_encode($bulan); ?>,
      datasets: [
        {
          backgroundColor: '<?= $se[warna_grafik] ?>',
          borderColor    : '#fd7e14',
          data           : <?php echo json_encode($total); ?>
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      tooltips           : {
        mode     : mode,
        intersect: intersect
      },
      hover              : {
        mode     : mode,
        intersect: intersect
      },
      legend             : {
        display: false
      },
      scales             : {
        yAxes: [{
          // display: false,
          gridLines: {
            display      : true,
            lineWidth    : '4px',
            color        : 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks    : $.extend({
            beginAtZero: false,
            callback: function (value, index, values) {
              if (value >= 1) {
                value /= 1
              }
              return 'Rp. ' + value
            }
          }, ticksStyle)
        }],
        xAxes: [{
          display  : true,
          gridLines: {
            display: false
          },
          ticks    : ticksStyle
        }]
      }
    }
  })
});

  $(function () {
  'use strict'

  var ticksStyle = {
    fontColor: '#495057',
    fontStyle: 'bold'
  }

  var mode      = 'index'
  var intersect = true

  var $salesChart = $('#statistik1')
  var salesChart  = new Chart($salesChart, {
    type   : 'horizontalBar',
    data   : {
      labels  : <?php echo json_encode($namatanam); ?>,
      datasets: [
        {
          backgroundColor: '<?= $se['background_grafik1'] ?>',
          borderColor    : '<?= $se['background_grafik'] ?>',
          borderWidth: 1.5,
          data           : <?php echo json_encode($terjual); ?>
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      tooltips           : {
        mode     : mode,
        intersect: intersect
      },
      hover              : {
        mode     : mode,
        intersect: intersect
      },
      legend             : {
        display: false
      },
      scales             : {
        yAxes: [{
          // display: false,
          gridLines: {
            display      : true,
            lineWidth    : '4px',
            color        : 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks    : $.extend({
            beginAtZero: false
          }, ticksStyle)
        }],
        xAxes: [{
          display  : true,
          gridLines: {
            display: false
          },
          ticks    : ticksStyle
        }]
      }
    }
  })
})
</script>
