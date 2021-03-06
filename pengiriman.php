<?php require('header.php'); require('tgl_indo.php'); $idbeli = $_GET['idbeli'];
  $beliproduk = mysqli_query($kon, "SELECT * FROM beliproduk INNER JOIN tanam ON beliproduk.idtanam = tanam.idtanam WHERE idbeli = '$idbeli' ORDER BY namatanam ASC"); ?>
<link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
						Cek Pengiriman
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>

<!-- CONTENT =============================-->
<section class="item content">
<div class="container toparea">
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
	<div class="col-md-offset-1 col-md-10">
		<div class="properties-box">
		<div class="card">
          <div class="card-header">
          	<div class="card-body">
                <table id="example" class="table table-bordered table-sm">
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
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      $query = mysqli_query($kon, "SELECT * FROM kirim INNER JOIN beli ON kirim.idbeli = beli.idbeli INNER JOIN kurir ON kirim.idkurir = kurir.idkurir INNER JOIN user ON beli.id = user.id WHERE user.username = '$memori[username]'");
                      while($data = mysqli_fetch_array($query)){
                        ?>
                          <tr>
                          <td><?= $no++ ?></td>
                           <td><?= haribulantahun($data['tglbeli'],true)?></td>          
                          <td>
                            <a href="pengiriman.php?idbeli=<?= $data['idbeli'] ?>"><?= $data['nama'] ?></a>
                          </td>             
                          <td><?= $data['alamat'] ?></td>           
                          <td><?= $data['namakurir'] ?></td>        
                          <td><?= $data['penerima'] ?></td>        
                          <td><?= $data['ket'] ?></td>        
                          <td><?php 
                            if($data['statuskirim'] == 'Selesai' AND $data['foto']!=''){
                              ?> <a target="_blank" href="img/<?= $data[foto] ?>"><i class='fas fa-check'></i></a><?php
                            }else if($data['statuskirim'] == 'Ditolak'){
                              echo "<i class='fas fa-times'></i>";
                            }else if($data['statuskirim'] == 'Menunggu'){
                              echo "<i class='fas fa-clock'></i>";
                            }  ?></td>         
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
<?php if(mysqli_num_rows($beliproduk)> 0){ ?>
<section id="mu-contact" style="padding: 0;">
 <div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="mu-contact-area">
        <h1 class="text-center">Detail Transaksi</h1>
        <div class="mu-contact-content">           
          <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered">
                <thead style="background-color: #333333; color: white;">
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Barang</th>
                    <th class="text-center">Kategori</th>
                    <th class="text-center">Jumlah</th>
                    <th class="text-center">Harga (Rp)</th>
                    <th class="text-center">Sub Harga (Rp)</th>
                    <?= $memori['level'] =='pelanggan' ? "<th></th>" : ''; ?>
                  </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                    while($j = mysqli_fetch_array($beliproduk)){?>
                      <tr class="text-center">
                      <td><?= $no++ ?></td>
                      <td><?= $j['namatanam'] ?></td>           
                      <td><?= $j['kategori'] ?></td>         
                      <td><?= $j['jumlah'] ?></td>           
                      <td><?= number_format($j['harga'],0,',','.') ?> </td>
                      <td><?= number_format($j['subharga'],0,',','.') ?> </td> 
                      <?php if($memori['level'] =='pelanggan'){ ?>
                        <td><button class="btn" style="background: #1ba5fb; color: white;" onclick="window.location='ulasan_input.php?namatanam=<?= $j[namatanam] ?>&idbeli=<?= $j[idbeli] ?>'">Berikan Ulasan</button></td>         
                      <?php } ?>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- end contact content -->
       </div>
     </div>
   </div>
 </div>
</section>
 <?php } ?>
<?php require('footer.php') ?>