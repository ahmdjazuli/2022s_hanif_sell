<?php require('headernya.php');  error_reporting(0); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content --><br>
<div class="modal fade" id="modal-sm">
        <div class="modal-dialog modal-default">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Filter Cetak</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="../assets/report/rpendapatan1.php" target="_blank" method="post">
                <div class="input-group input-group-mb" style="margin-bottom: 10px">
                <div class="input-group-prepend" style="width: 50%">
                    <span class="input-group-text" style="width: 100%">Bulan</span>
                </div>
                <select name="bulan" class="form-control" required>
                  <option value="">Pilih</option>
                  <?php
                    $ahay = mysqli_query($kon, "SELECT DISTINCT MONTH(tglbeli) as bulan FROM `beli` ORDER BY bulan ASC");
                    while($baris = mysqli_fetch_array($ahay)) {
                    $bulan = $baris['bulan']; 
                      if($bulan == 1){ $namabulan = "Januari";
                        }else if($bulan == 2){ $namabulan = "Februari";
                        }else if($bulan == 3){ $namabulan = "Maret";
                        }else if($bulan == 4){ $namabulan = "April";
                        }else if($bulan == 5){ $namabulan = "Mei";
                        }else if($bulan == 6){ $namabulan = "Juni";
                        }else if($bulan == 7){ $namabulan = "Juli";
                        }else if($bulan == 8){ $namabulan = "Agustus";
                        }else if($bulan == 9){ $namabulan = "September";
                        }else if($bulan == 10){ $namabulan = "Oktober";
                        }else if($bulan == 11){ $namabulan = "November";
                        }else if($bulan == 12){ $namabulan = "Desember";
                        } ?><option value="<?= $baris[bulan] ?>"><?= $namabulan; ?></option> 
                      }
                    <?php } ?>
                </select>
              </div>
                <div class="input-group input-group-mb" style="margin-bottom: 10px">
                    <div class="input-group-prepend" style="width: 50%">
                        <span class="input-group-text" style="width: 100%">Tahun</span>
                    </div>
                <select name="tahun" class="form-control">
                <?php
                    $ahay = mysqli_query($kon, "SELECT DISTINCT YEAR(tglbeli) as tahun FROM `beli` ORDER BY tahun ASC");
                    while($baris = mysqli_fetch_array($ahay)) {
                    $tahun = $baris['tahun']; 
                        ?><option value="<?= $baris[tahun] ?>"><?= $tahun; ?></option> 
                <?php } ?>
                </select>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="reset" class="btn btn-danger"><i class="fas fa-sync-alt"></i></button>
              <button type="submit" class="btn btn-dark"><i class="fas fa-file-pdf"></i></button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 style="display:inline;">Pendapatan Bulanan</h2>
                <button style="float: right" class="btn btn-dark" type="button" data-toggle="modal" data-target="#modal-sm" title="Cetak"><i class="fas fa-file-pdf"></i></button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTables" class="table table-bordered table-hover table-sm">
                  <thead class="table-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Periode</th>
                        <th>Transaksi Penjualan</th>
                        <th>Transaksi Service</th>
                        <th>Laba Kotor</th>
                        <th>Barang Masuk</th>
                        <th>Pengeluaran</th>
                        <th>Laba Bersih</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      $query = mysqli_query($kon, "SELECT tglbeli, MONTH(tglbeli) as bulan, YEAR(tglbeli) as tahun FROM `beli` WHERE status = 'Diterima' GROUP BY bulan ORDER BY tglbeli ASC");
                      while($data = mysqli_fetch_array($query)){
                        $bulan = $data['bulan'];
                        $tahun = $data['tahun'];
                        $woy = mysqli_fetch_array(mysqli_query($kon, "SELECT SUM(total) as total FROM beli INNER JOIN user ON beli.id = user.id WHERE MONTH(tglbeli) = '$bulan' AND YEAR(tglbeli) = '$tahun'"));
                        $woy1 = mysqli_fetch_array(mysqli_query($kon, "SELECT SUM(total) as total FROM transaksi JOIN user ON transaksi.id = user.id WHERE MONTH(tgl) = '$bulan' AND YEAR(tgl) = '$tahun'"));
                        $woy2 = mysqli_fetch_array(mysqli_query($kon, "SELECT SUM(hargamasuk*jumlah) as total FROM tanammasuk WHERE MONTH(tgl) = '$bulan' AND YEAR(tgl) = '$tahun'"));
                        $woy3 = mysqli_fetch_array(mysqli_query($kon, "SELECT SUM(total) as total FROM pengeluaran WHERE MONTH(tgl) = '$bulan' AND YEAR(tgl) = '$tahun'"));
                        ?>
                          <tr class="text-center">
                          <td><?= $no++ ?></td> 
                          <td><?php 
                            if($data['bulan'] == 6){echo 'Juni'.' - '. $data['tahun']; }
                            else if($data['bulan'] == 7){echo 'Juli'.' - '. $data['tahun']; }
                            else if($data['bulan'] == 8){echo 'Agustus'.' - '. $data['tahun']; }
                            else if($data['bulan'] == 9){echo 'September'.' - '. $data['tahun']; }
                            else if($data['bulan'] == 10){echo 'Oktober'.' - '. $data['tahun']; }
                            else if($data['bulan'] == 11){echo 'November'.' - '. $data['tahun']; }
                            else if($data['bulan'] == 12){echo 'Desember'.' - '. $data['tahun']; }
                            else if($data['bulan'] == 1){echo 'Januari'.' - '. $data['tahun']; }
                            else if($data['bulan'] == 2){echo 'Februari'.' - '. $data['tahun']; }
                            else if($data['bulan'] == 3){echo 'Maret'.' - '. $data['tahun']; }
                            else if($data['bulan'] == 4){echo 'April'.' - '. $data['tahun']; }
                            else if($data['bulan'] == 5){echo 'Mei'.' - '. $data['tahun']; }
                          ?></td>
                          <td>Rp. <?= number_format($woy['total'],0,'.','.') ?></td>
                          <td>Rp. <?= number_format($woy1['total'],0,'.','.') ?></td>
                          <td>Rp. <?= number_format($woy['total']+$woy1['total'],0,'.','.') ?></td>
                          <td>Rp. <?= number_format($woy2['total'],0,'.','.') ?></td>
                          <td>Rp. <?= number_format($woy3['total'],0,'.','.') ?></td>
                          <td>Rp. <?= number_format($woy['total']+$woy1['total']-$woy2['total']-$woy3['total'],0,'.','.') ?></td>
                        <?php 
                      }
                    ?>
                  </tbody>
                </table>
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
