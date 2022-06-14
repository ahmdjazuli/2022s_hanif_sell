<?php require('header.php'); require('tgl_indo.php'); $idbeli = $_GET['idbeli'];
  $beliproduk = mysqli_query($kon, "SELECT * FROM beliproduk INNER JOIN tanam ON beliproduk.idtanam = tanam.idtanam WHERE idbeli = '$idbeli' ORDER BY namatanam ASC");
  $beli = mysqli_query($kon, "SELECT * FROM beli WHERE idbeli = '$idbeli'");
  $row = mysqli_fetch_array($beli); ?>
<link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
						Riwayat Pembelian
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>

<!-- CONTENT =============================-->
<section class="item content">
<div class="container-fluid toparea">
	<div class="underlined-title">
		<div class="editContent">
			<h1 class="text-center latestitems"></h1>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>
<div class="row">
	<div class="col-md-12 col-sm-12">
		<div class="properties-box">
		<div class="card">
          <div class="card-header">
          	<div class="card-body">
                <table id="example" class="table table-bordered table-sm">
                  <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Pembeli</th>
                        <th>Tujuan</th>
                        <th>Bukti Pembayaran</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th class="hide"></th>
                        <th class="hide"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      $query = mysqli_query($kon, "SELECT * FROM `beli` INNER JOIN ongkir ON beli.idongkir = ongkir.idongkir INNER JOIN user ON beli.id = user.id WHERE username = '$memori[username]'");
                      while($data = mysqli_fetch_array($query)){
                        ?>
                          <tr>
                          <td><?= $no++ ?></td>
                          <td><?= haribulantahun($data['tglbeli'],true)?></td>          
                          <td>
                            <a href="riwayatbeli.php?idbeli=<?= $data['idbeli'] ?>"><?= $data['nama'] ?></a>
                          </td> 
                          <td><?= $data['alamat'] ?></td>           
                          <td><a target="_blank" href="img/<?= $data['bukti'] ?>"><img src="img/<?= $data['bukti'] ?>" width='60px'></a></td>        
                          <td>Rp. <?= number_format($data['total'],0,',','.') ?> </td>
                          <td><?php 
                            if($data['status'] == 'Diterima'){
                              ?><i class='fas fa-check'></i> <?php
                            }else if($data['status'] == 'Ditolak'){
                              echo "<i class='fas fa-times'></i>";
                            }else if($data['status'] == 'Menunggu'){
                              echo "<i class='fas fa-clock'></i>";
                            }  ?></td>
                          <td>
                            <button class="btn" style="background-color: #9ad8fe;" type="button"><a href="assets/report/rnota.php?idbeli=<?= $data['idbeli'] ?>" class="text-black">Nota</a></button>
                          </td>           
                        <?php 
                      }
                    ?>
                  </tbody>
                </table>
          	</div>
        </div>
	</div>
</div> <!-- row -->
<br>
</div> <!-- container -->
</section>

<?php 
    if(mysqli_num_rows($beliproduk)> 0){ ?>
<section class="item content">
<div class="container toparea">
  <div class="underlined-title">
    <div class="editContent">
      <h1 class="text-center latestitems">Detail Transaksi Penjualan</h1>
    </div>
    <div class="wow-hr type_short">
      <span class="wow-hr-h">
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      </span>
    </div>
  </div>
<div class="row">
  <div class="col-md-offset-1 col-md-10">
    <div class="card">
          <div class="card-header">
            <div class="card-body">
                <table id="example" class="table table-bordered table-sm">
                  <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Sub Harga</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;$totalbelanja = 0;
                      while($data = mysqli_fetch_array($beliproduk)){
                        ?>
                          <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $data['namatanam'] ?></td>           
                          <td><?= $data['kategori'] ?></td>         
                          <td><?= $data['jumlah'] ?></td>           
                          <td>Rp. <?= number_format($data['harga'],0,',','.') ?> </td>
                          <td>Rp. <?= number_format($data['subharga'],0,',','.') ?> </td>
                          </tr>
                        <?php $totalbelanja+=$data['subharga']; } ?>
                      <tr>
                        <tr>
                          <td class="text-right" colspan="5" style="font-weight: bold; background-color: #4169e1; color: white;">Biaya Ongkir</td>
                          <td style="color: black;">Rp. <?= number_format($row['tarifnya'],0,',','.') ?></td>
                        </tr>
                        <td class="text-right" style="font-weight: bold; background-color: #9ad8fe; color: black;" colspan="5">Total Pembayaran</td>
                        <td style="font-weight: bold; background-color: #f1f1f1;color: black;">Rp. <?= number_format($totalbelanja+$row['tarifnya'],0,',','.') ?></td>
                      </tr>
                  </tbody>
                </table>
            </div>
  </div>
</div> <!-- row -->
<br>
</div> <!-- container -->
</section>
 <?php }?>
<?php require('footer.php') ?>