<?php require('headernya.php'); error_reporting(0); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- filter --><br>
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
              <form action="../assets/report/rkurir.php" target="_blank" method="post">
                <div class="input-group input-group-mb" style="margin-bottom: 10px">
                    <div class="input-group-prepend" style="width: 50%">
                        <span class="input-group-text" style="width: 100%">Kota</span>
                    </div>
                <select name="kota" class="form-control">
                  <option value="">SEMUA</option>
                <?php
                    $ahay = mysqli_query($kon, "SELECT DISTINCT kota FROM kurir INNER JOIN ongkir ON kurir.idongkir = ongkir.idongkir ORDER BY kota ASC");
                    while($baris = mysqli_fetch_array($ahay)) {
                        ?><option value="<?= $baris[kota] ?>"><?= $baris['kota'] ?></option> 
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
      <div class="modal fade" id="modal-sms">
        <div class="modal-dialog modal-default">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Filter Cetak</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="../assets/report/rkurir2.php" target="_blank" method="post">
                <div class="input-group input-group-mb" style="margin-bottom: 10px">
                <div class="input-group-prepend" style="width: 50%">
                    <span class="input-group-text" style="width: 100%">Bulan</span>
                </div>
                <select name="bulan" class="form-control" required>
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
                <div class="input-group input-group-mb" style="margin-bottom: 10px">
                    <div class="input-group-prepend" style="width: 50%">
                        <span class="input-group-text" style="width: 100%">Nama Kurir</span>
                    </div>
                <select name="namakurir" class="form-control" required>
                  <option selected disabled>Pilih</option>
                <?php
                    $ahay = mysqli_query($kon, "SELECT * FROM kurir ORDER BY namakurir ASC");
                    while($baris = mysqli_fetch_array($ahay)) {
                        ?><option value="<?= $baris[namakurir] ?>"><?= $baris['namakurir'] ?></option> 
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
                <h2 style="display:inline;">Kurir</h2>
                <button style="float: right;margin-left: 5px" class="btn btn-dark" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><a href="kurir_input.php" class="text-white"><i class="fas fa-folder-plus"></i></a></button>
                <button style="float: right;margin-left: 5px" class="btn btn-dark" type="button" data-toggle="modal" data-target="#modal-sm" title="Cetak"><i class="fas fa-file-pdf"></i></button>
                <button style="float: right" class="btn btn-dark" type="button" data-toggle="modal" data-target="#modal-sms" title="Cetak"><i class="fas fa-file"></i></button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTables" class="table table-bordered table-hover table-sm">
                  <thead class="table-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Kontak</th>
                        <th>Kota</th>
                        <th class="hide"></th>
                    </tr>
                  </thead>
                  <tfoot class="table-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Kontak</th>
                        <th>Kota</th>
                        <th class="hide"></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                      $no = 1;
                      $query = mysqli_query($kon, "SELECT * FROM kurir INNER JOIN ongkir ON kurir.idongkir = ongkir.idongkir ORDER BY idkurir DESC");
                      while($data = mysqli_fetch_array($query)){
                        ?>
                          <tr class="text-center">
                          <td><?= $no++ ?></td>
                          <td><?php 
                            if($data['jkkurir'] == 0){
                              echo $data['namakurir']." <svg style='width:22px;height:22px' viewBox='0 0 24 24'><path fill='currentColor' d='M9,9C10.29,9 11.5,9.41 12.47,10.11L17.58,5H13V3H21V11H19V6.41L13.89,11.5C14.59,12.5 15,13.7 15,15A6,6 0 0,1 9,21A6,6 0 0,1 3,15A6,6 0 0,1 9,9M9,11A4,4 0 0,0 5,15A4,4 0 0,0 9,19A4,4 0 0,0 13,15A4,4 0 0,0 9,11Z' /></svg>";
                            }else if($data['jkkurir'] == 1){
                              echo $data['namakurir']." <svg style='width:24px;height:24px' viewBox='0 0 24 24'><path fill='currentColor' d='M12,4A6,6 0 0,1 18,10C18,12.97 15.84,15.44 13,15.92V18H15V20H13V22H11V20H9V18H11V15.92C8.16,15.44 6,12.97 6,10A6,6 0 0,1 12,4M12,6A4,4 0 0,0 8,10A4,4 0 0,0 12,14A4,4 0 0,0 16,10A4,4 0 0,0 12,6Z' /></svg>";
                            } ?></td>         
                          <td><?= $data['username'] ?></td>           
                          <td><?= $data['kontakkurir'] ?></td>           
                          <td><?= $data['kota'] ?></td>           
                          <td>
                            <button class="btn bg-dark" type="button"><a href="kurir_edit.php?idkurir=<?= $data['idkurir'] ?>" class="text-white"><i class="far fa-edit"></i></a></button>
                            <button class="btn bg-dark" onclick="yakin = confirm('Apakah Kamu yakin ingin Menghapus?'); if(yakin){ window.location = 'hapus.php?idkurir=<?= $data['idkurir'] ?>';
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
  </div> <!-- /.content-wrapper -->
<?php require('footernya.php') ?>
