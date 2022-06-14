<?php require('headernya.php'); error_reporting(0); 
  $idbeli = $_GET['idbeli'];
  $beliproduk = mysqli_query($kon, "SELECT * FROM beliproduk INNER JOIN tanam ON beliproduk.idtanam = tanam.idtanam WHERE idbeli = '$idbeli' ORDER BY namatanam ASC");
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- filter --><br>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 style="display:inline;">Data Pengiriman</h2>
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
                  <tbody>
                    <?php 
                      $no = 1;
                      $query = mysqli_query($kon, "SELECT * FROM kirim INNER JOIN beli ON kirim.idbeli = beli.idbeli INNER JOIN kurir ON kirim.idkurir = kurir.idkurir INNER JOIN user ON beli.id = user.id WHERE namakurir = '$hohoho[namakurir]' ");
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
