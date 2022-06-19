<?php require('headernya.php');  error_reporting(0); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content --><br>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 style="display:inline;">Grafik Statistik Penjualan Terlaris</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header border-0">
                      <div class="d-flex justify-content-between">
                        <a color="black">2022</a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="position-relative mb-4">
                        <canvas id="statistik1" height="200"></canvas>
                      </div>
                    </div>
                  </div>  
                </div>
              </div>
              <!-- /.card-body -->
              <hr>
            </div> <!-- /.card -->
          </div> <!-- /.col -->
        </div> <!-- /.row -->
      </div> <!-- /.container-fluid -->
    </section> <!-- /.content -->
  </div> <!-- /.content-wrapper -->
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
