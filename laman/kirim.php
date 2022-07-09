<?php require('headernya.php'); error_reporting(0); 
  $idbeli = $_GET['idbeli'];
  $beliproduk = mysqli_query($kon, "SELECT * FROM beliproduk INNER JOIN tanam ON beliproduk.idtanam = tanam.idtanam WHERE idbeli = '$idbeli' ORDER BY namatanam ASC");
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
              <form action="../assets/report/rkirim.php" target="_blank" method="post">
              <div class="input-group input-group-mb" style="margin-bottom: 10px">
                <div class="input-group-prepend" style="width: 50%">
                    <span class="input-group-text" style="width: 100%">Bulan</span>
                </div>
                <select name="bulan" class="form-control">
                  <option value="">Pilih</option>
                  <?php
                    $ahay = mysqli_query($kon, "SELECT DISTINCT MONTH(tglbeli) as bulan FROM kirim INNER JOIN beli ON kirim.idbeli = beli.idbeli ORDER BY bulan ASC");
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
                    $ahay = mysqli_query($kon, "SELECT DISTINCT YEAR(tglbeli) as tahun FROM kirim INNER JOIN beli ON kirim.idbeli = beli.idbeli ORDER BY tahun ASC");
                    while($baris = mysqli_fetch_array($ahay)) {
                    $tahun = $baris['tahun']; 
                        ?><option value="<?= $baris[tahun] ?>"><?= $tahun; ?></option> 
                <?php } ?>
                </select>
                </div>
                <div class="input-group input-group-mb">
                    <div class="input-group-prepend" style="width: 50%">
                        <span class="input-group-text" style="width: 100%">Status</span>
                    </div>
                <select name="status" class="form-control">
                    <option value="">Semua</option>
                    <option value="Selesai">Selesai</option> 
                    <option value="Menunggu">Menunggu</option> 
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
                <h2 style="display:inline;">Pengiriman</h2>
                <button style="float: right" class="btn btn-dark" type="button" data-toggle="modal" data-target="#modal-sm" title="Cetak"><i class="fas fa-file-pdf"></i></button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTables" class="table table-bordered table-sm">
                  <thead class="table-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Pembeli</th>
                        <th>Tujuan</th>
                        <th>Kurir</th>
                        <th>Penerima</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th class="hide"></th>
                    </tr>
                  </thead>
                  <tfoot class="table-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Pembeli</th>
                        <th>Tujuan</th>
                        <th>Kurir</th>
                        <th>Penerima</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th class="hide"></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                      $no = 1;
                      $query = mysqli_query($kon, "SELECT * FROM kirim INNER JOIN beli ON kirim.idbeli = beli.idbeli INNER JOIN kurir ON kirim.idkurir = kurir.idkurir INNER JOIN user ON beli.id = user.id");
                      while($data = mysqli_fetch_array($query)){
                        ?>
                          <tr class="text-center">
                          <td><?= $no++ ?></td>
                          <td><?= haribulantahun($data['tglbeli'],true)?></td>          
                          <td>
                            <a href="kirim.php?idbeli=<?= $data['idbeli'] ?>"><?= $data['nama'] ?></a>
                          </td>             
                          <td><?= $data['alamat'] ?></td>           
                          <td><?= $data['namakurir'] ?></td>        
                          <td><?= $data['penerima'] ?></td>        
                          <td><?= $data['ket'] ?></td>        
                          <td><?php 
                            if($data['statuskirim'] == 'Selesai' AND $data['foto']!=''){
                              ?> <a target="_blank" href="../img/<?= $data[foto] ?>"><i class='fas fa-check'></i></a><?php
                            }else if($data['statuskirim'] == 'Ditolak'){
                              echo "<i class='fas fa-times'></i>";
                            }else if($data['statuskirim'] == 'Menunggu'){
                              echo "<i class='fas fa-clock'></i>";
                            }  ?></td>           
                          <td>
                            <button class="btn bg-dark" type="button"><a href="kirim_edit.php?idkirim=<?= $data['idkirim'] ?>" class="text-white"><i class="far fa-edit"></i></a></button>
                            <button class="btn bg-dark" onclick="yakin = confirm('Apakah Kamu yakin ingin Menghapus?'); if(yakin){ window.location = 'hapus.php?idkirim=<?= $data['idkirim'] ?>';
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
    if(mysqli_num_rows($beliproduk)> 0){ ?>
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 style="display:inline;">Produk yang Dibeli</h2>
                <button style="float: right" class="btn btn-dark" type="button" data-toggle="modal" data-target="#modal-sm" title="Cetak"><i class="fas fa-file-pdf"></i></button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTables1" class="table table-bordered table-sm">
                  <thead class="table-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      while($data = mysqli_fetch_array($beliproduk)){
                        ?>
                          <tr class="text-center">
                          <td><?= $no++ ?></td>
                          <td><?= $data['namatanam'] ?></td>           
                          <td><?= $data['kategori'] ?></td>          
                          <td><?= $data['jumlah'] ?></td>           
                          <td>Rp. <?= number_format($data['harga'],0,',','.') ?> </td>
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
