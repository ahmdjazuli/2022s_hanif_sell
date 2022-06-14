<?php require('headernya.php'); error_reporting(0); 
  $notransaksi = $_GET['notransaksi'];
  $detail = mysqli_query($kon, "SELECT * FROM detail WHERE notransaksi = '$notransaksi' ORDER BY nservice1 ASC");
  $transaksi = mysqli_query($kon, "SELECT * FROM transaksi WHERE notransaksi = '$notransaksi' ");
  $esteh = mysqli_fetch_array($transaksi);
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- filter --><br>
    <div class="modal fade" id="modal-sm">
        <div class="modal-dialog modal-default">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Cetak Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="../assets/report/rtransaksi.php" target="_blank" method="post">
              <div class="input-group input-group-mb" style="margin-bottom: 10px">
                <div class="input-group-prepend" style="width: 50%">
                    <span class="input-group-text" style="width: 100%">Bulan</span>
                </div>
                <select name="bulan" class="form-control">
                  <option value="">Pilih</option>
                  <?php
                    $ahay = mysqli_query($kon, "SELECT DISTINCT MONTH(tgl) as bulan FROM `transaksi` ORDER BY bulan ASC");
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
                    $ahay = mysqli_query($kon, "SELECT DISTINCT YEAR(tgl) as tahun FROM `transaksi` ORDER BY tahun DESC");
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 style="display:inline;">Transaksi Service</h2>
                <button style="float: right;margin-left: 5px" class="btn btn-dark" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><a href="transaksi_input.php" class="text-white"><i class="fas fa-folder-plus"></i></a>
                </button>
                <button style="float: right" class="btn btn-dark" type="button" data-toggle="modal" data-target="#modal-sm" title="Cetak"><i class="fas fa-file-pdf"></i></button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTables" class="table table-bordered table-sm">
                  <thead class="table-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>No. Transaksi</th>
                        <th>Pelanggan</th>
                        <th>Barang</th>
                        <th>Catatan</th>
                        <th>Total</th>
                        <th class="hide"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      $query = mysqli_query($kon, "SELECT * FROM transaksi JOIN user ON transaksi.id = user.id ORDER BY tgl DESC");
                      while($data = mysqli_fetch_array($query)){
                        ?>
                          <tr class="text-center">
                          <td><?= $no++ ?></td>
                          <td><?= tgl_indo($data['tgl'])?></td>          
                          <td>
                            <a href="transaksi.php?notransaksi=<?= $data['notransaksi'] ?>"><?= $data['notransaksi'] ?></a>
                          </td>            
                          <td><?= $data['nama']?></td>          
                          <td><?= $data['barang']?></td>          
                          <td><?= $data['catatan'] ?></td>
                          <td>Rp. <?= number_format($data['total'],0,',','.') ?> </td>         
                          <td>
                            <button class="btn bg-dark" type="button"><a href="transaksi_edit.php?notransaksi=<?= $data['notransaksi'] ?>" class="text-white"><i class="far fa-edit"></i></a></button>
                            <button class="btn bg-dark" onclick="yakin = confirm('Apakah Kamu yakin ingin Menghapus?'); if(yakin){ window.location = 'hapus.php?notransaksi=<?= $data['notransaksi'] ?>&level=reseller';
                              }" type="button"><i class="fas fa-trash"></i></button>
                          </td>
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
    <?php 
    if(mysqli_num_rows($detail)> 0){ ?>
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 style="display:inline;"><button class="btn btn-dark" onclick="window.location='transaksi.php'">Tutup</button> Detail</h2>
              </div>
              <div class="card-body">
                <table id="dataTables1" class="table table-bordered table-sm">
                  <thead class="table-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Service</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      while($data = mysqli_fetch_array($detail)){
                        ?>
                          <tr class="text-center">
                          <td><?= $no++ ?></td>
                          <td><?= $data['nservice1'] ?></td>           
                          <td><?= $data['ket1'] ?></td>          
                          <td><?= $data['jumlah1'] ?></td>           
                          <td>Rp. <?= number_format($data['harga1'],0,',','.') ?> </td>
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
    <?php }?>
  </div> <!-- /.content-wrapper -->
<?php require('footernya.php') ?>
