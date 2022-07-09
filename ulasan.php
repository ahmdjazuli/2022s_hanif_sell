<?php require('header.php'); require('tgl_indo.php'); ?>
<link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
						Ulasan
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
                        <th>Waktu (WITA)</th>
                        <th>Pembeli</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Ulasan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      $query = mysqli_query($kon, "SELECT * FROM ulasan JOIN tanam ON ulasan.idtanam = tanam.idtanam JOIN user ON ulasan.id = user.id WHERE user.username = '$memori[username]'");
                      while($data = mysqli_fetch_array($query)){
                        ?>
                          <tr>
                          <td><?= $no++ ?></td>
                           <td><?= format_harijam($data['waktu'],true)?></td>                  
                          <td><?= $data['nama'] ?></td>           
                          <td><?= $data['namatanam'] ?></td>        
                          <td><?= $data['kategori'] ?></td>        
                          <td><?= $data['ulasannya'] ?></td>                
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
<?php require('footer.php') ?>