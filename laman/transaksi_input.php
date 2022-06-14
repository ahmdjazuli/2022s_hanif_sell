<?php require('headernya.php'); error_reporting(0);  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"><br>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <div class="card card-outline card-dark">
              <div class="card-header">
                <h3 class="card-title"><button class="btn btn-dark"><i class="fas fa-plus"></i></button> Transaksi Service</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
               <button class="btn btn-outline btn-danger">tambah</button> untuk menambahkan daftar transaksi. <br><br>
               <button class="btn btn-dark">Simpan</button> untuk menyimpan transaksi.
              </div>
            </div>
            <div class="card card-outline card-danger">
              <div class="card-body bg-dark">
                <form action="" method="POST">
                  <div class="form-group">
                    <label>Nama Service</label>
                    <input type="text" list="option" name="idservice" class="form-control" required onchange='ubah(this.value)'>
                    <datalist id="option">
                      <option value="">Pilih</option>
                      <?php
                      $ahay = mysqli_query($kon, "SELECT * FROM service ORDER BY nservice ASC");
                      $a    = "var total = new Array();\n;";
                        while($baris = mysqli_fetch_array($ahay)) {
                          echo "<option value='$baris[idservice]'>$baris[nservice] ($baris[ket])</option>";
                          $a .= "total['" . $baris['idservice'] . "'] = {total:'" . addslashes($baris['total'])."'};\n";
                        } 
                      ?>
                    </datalist>
                  </div>
                  <div class="form-group">
                    <label>Harga</label>
                    <input type="number" class="form-control" name="total" id="total" readonly>
                  </div>
                  <div class="form-group">
                      <label>Jumlah</label>
                      <input type="number" name="jumlahku" class="form-control" required>
                  </div>
                  <button type="submit" name="tambah" class="btn btn-outline btn-danger" data-toggle="tooltip" data-placement="bottom" title="Tambah">Tambah</button>
                  <button type="button" class="btn btn-outline btn-default" data-toggle="tooltip" data-placement="bottom" title="Bersihkan Daftar Belanja"><a href="mohon_bersih.php" style="color: black; text-decoration: none"><i class="fas fa-sync-alt"></i></a></button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-8 col-sm-12">
            <div class="card">
              <div class="card-body">
                <form role="form" action="" method="POST">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="dataTables-example">
                            <thead class="success table-dark">
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama Service</th>
                                    <th>Keterangan</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Sub Harga</th>
                                    <th><i class="fa fa-toggle-on"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; $totalbelanja = 0; foreach ($_SESSION['keranjang'] as $idservice => $jumlah) :
                                    $service = mysqli_query($kon, "SELECT * FROM service WHERE idservice = '$idservice'"); 
                                    $data = mysqli_fetch_assoc($service); 
                                    $subharga = $data['total']*$jumlah;?>
                                    <tr class="text-center">
                                        <td><?= $no++; ?></td>
                                        <td><?= $data['nservice'] ?></td>
                                        <td><?= $data['ket'] ?></td>
                                        <td><?= $data['total'] ?></td>
                                        <td><?= $jumlah ?></td>
                                        <td>Rp. <?= $subharga ?></td>
                                        <td> <a href="beli_hapus.php?idservice=<?= $data['idservice'] ?>" class="btn btn-outline btn-danger btn-sm"><i class="fas fa-trash"></i></a> </td>
                                    </tr>
                                <?php $totalbelanja+=$subharga; ?>
                                <?php endforeach ?>  
                            </tbody>
                            <tfoot>
                            <tr>
                                <th colspan="5">Total yang harus dibayarkan : </th>
                                <th colspan="2">
                                <span>Rp. <?= number_format($totalbelanja,0,',','.') ?></span>
                                </th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="form-group">
                      <label>Nama Pelanggan</label>
                      <select name="id" class="form-control" required>
                        <option value="">-Pilih-</option>
                      <?php
                        $gasken = mysqli_query($kon, "SELECT * FROM user WHERE level='pelanggan' ORDER BY nama ASC");
                          while($bakwan = mysqli_fetch_array($gasken)) {
                            echo "<option value='$bakwan[id]'>$bakwan[nama]</option>";
                          } 
                        ?>
                    </select>
                    </div>
                    <div class="form-group">
                      <label>Barang</label>
                      <input type="text" class="form-control" name="barang">
                    </div>
                    <div class="form-group">
                      <label>Catatan</label>
                      <textarea name="catatan" class="form-control" rows="4"></textarea>
                    </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan">Simpan</button>
                  <button type="button" onclick="window.location='transaksi.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-danger float-right">
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
  if (isset($_POST['tambah'])) {
      $idservice  = $_REQUEST['idservice'];
      $jumlahku = $_REQUEST['jumlahku'];
      if (isset($_SESSION['keranjang'][$idservice])) {
        $_SESSION['keranjang'][$idservice] += $jumlahku;
      }else{
        $_SESSION['keranjang'][$idservice] = $jumlahku;
      } echo "<script>window.location = 'transaksi_input.php';</script>";
  }
  if (isset($_POST['simpan'])) {
        $id          = $_REQUEST['id'];
        $tgl         = date('Y-m-d');
        $catatan     = $_REQUEST['catatan'];
        $barang      = $_REQUEST['barang'];
        $notransaksi = date('Ymds');

        $hasil = mysqli_query($kon,"INSERT INTO transaksi (notransaksi,id,total,tgl,catatan,barang) VALUES ('$notransaksi','$id','$totalbelanja','$tgl','$catatan','$barang')");

        foreach ($_SESSION['keranjang'] as $idservice => $jumlah) {
          $query     = mysqli_query($kon, "SELECT * FROM service WHERE idservice = '$idservice'");
          $ambil     = mysqli_fetch_array($query);
          $nservice1 = $ambil['nservice'];
          $ket1      = $ambil['ket'];
          $harga1    = $ambil['total'];
          $subharga  = $ambil['total']*$jumlah;

          mysqli_query($kon,"INSERT INTO detail (ket1, notransaksi,jumlah1, nservice1, harga1, subharga) VALUES ('$ket1','$notransaksi','$jumlah','$nservice1','$harga1','$subharga')");
        }

        if($hasil){
          ?> <script>alert('Berhasil Disimpan'); window.location = 'transaksi.php';</script><?php unset($_SESSION['keranjang']);
        }else{
          ?> <script>alert('Gagal, cek kembali!.'); window.location = 'transaksi_input.php';</script><?php
        }
    }
?>
<script>   
    <?php echo $a;?>
        function ubah(id){  
        document.getElementById('total').value = total[id].total; 
    };
</script> 