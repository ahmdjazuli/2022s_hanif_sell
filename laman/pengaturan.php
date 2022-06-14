<?php require('headernya.php');
	$query = mysqli_query($kon, "SELECT * FROM pengaturan WHERE id = '1'");
	$data  = mysqli_fetch_array($query);
?>
<style>
  .imutdong{
    width: 40px;height: 40px; border:2px solid black;
  }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br>
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-sm-12">
          </div>
          <div class="col-md-8 col-sm-12">
            <div class="card">
              <div class="card-header">
                <h2 style="display:inline;"><button class="btn btn-dark" type="button" data-toggle="tooltip" data-placement="bottom" title="Ubah"><i class="fas fa-wrench"></i></button> Pengaturan Tampilan Website</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>Ukuran Teks</label>
                    <select class="form-control" name="ukuran_teks">
                      <?php 
                        if($data['ukuran_teks']=='text-sm'){?>
                          <option value="text-sm">Kecil</option>
                          <option value="text-md">Sedang</option>
                          <option value="text-lg">Besar</option>
                        <?php }else if($data['ukuran_teks']=='text-md'){?>
                          <option value="text-md">Sedang</option>
                          <option value="text-sm">Kecil</option>
                          <option value="text-lg">Besar</option>
                        <?php }else if($data['ukuran_teks']=='text-lg'){?>
                          <option value="text-lg">Besar</option>
                          <option value="text-sm">Kecil</option>
                          <option value="text-md">Sedang</option>
                        <?php }
                      ?>
                    </select>
                  </div>
                    <label>Warna Latar Belakang untuk Menu</label>
                  <div class="d-flex flex-wrap">
                    <?php 
                        if($data['warna_navbar']=='navbar-dark'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-dark" checked></div>
                          <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-lightblue">
                          </div>
                        <?php }else if($data['warna_navbar']=='navbar-primary'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-primary" checked>
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-lightblue">
                          </div>
                        <?php }else if($data['warna_navbar']=='navbar-purple'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-purple" checked>
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-lightblue">
                          </div>
                        <?php }else if($data['warna_navbar']=='navbar-success'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-success" checked>
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-lightblue">
                          </div>
                        <?php }else if($data['warna_navbar']=='navbar-indigo'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-indigo" checked>
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-lightblue">
                          </div>
                        <?php }else if($data['warna_navbar']=='navbar-gray'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-gray" checked>
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-lightblue">
                          </div>
                        <?php }else if($data['warna_navbar']=='navbar-warning'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-warning" checked>
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-lightblue">
                          </div>
                        <?php }else if($data['warna_navbar']=='navbar-orange'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-orange" checked>
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-lightblue">
                          </div>
                        <?php }else if($data['warna_navbar']=='navbar-pink'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-pink" checked>
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-lightblue">
                          </div>
                        <?php }else if($data['warna_navbar']=='navbar-danger'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-danger" checked>
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-lightblue">
                          </div>
                        <?php }else if($data['warna_navbar']=='navbar-light'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-light" checked>
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-lightblue">
                          </div>
                        <?php }else if($data['warna_navbar']=='navbar-lightblue'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_navbar" value="navbar-lightblue" checked>
                          </div>
                        <?php }
                      ?>
                  </div>
                  <br>
                  <label>Warna Icon untuk Menu</label>
                  <div class="d-flex flex-wrap">
                    <?php 
                        if($data['warna_icon']=='navbar-light'){?>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_icon" value="navbar-dark" ></div>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_icon" value="navbar-light" checked>
                          </div>
                        <?php }else if($data['warna_icon']=='navbar-dark'){?>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_icon" value="navbar-dark" checked>
                          </div>
                           <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_icon" value="navbar-light" >
                          </div>
                        <?php }
                      ?>
                  </div>
                  <br>
                  <label>Warna Lainnya untuk Menu</label>
                  <div class="d-flex flex-wrap">
                    <?php 
                        if($data['warna_lainnya']=='bg-dark'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-dark" checked></div>
                          <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_lainnya']=='bg-primary'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-primary" checked>
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_lainnya']=='bg-purple'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-purple" checked>
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_lainnya']=='bg-success'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-success" checked>
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_lainnya']=='bg-indigo'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-indigo" checked>
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_lainnya']=='bg-gray'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-gray" checked>
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_lainnya']=='bg-warning'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-warning" checked>
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_lainnya']=='bg-orange'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-orange" checked>
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_lainnya']=='bg-pink'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-pink" checked>
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_lainnya']=='bg-danger'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-danger" checked>
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_lainnya']=='bg-light'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-light" checked>
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_lainnya']=='bg-lightblue'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_lainnya" value="bg-lightblue" checked>
                          </div>
                        <?php }
                      ?>
                  </div>
                  <br>
                  <label>Warna Untuk Data Master</label>
                  <div class="col-md-6 col-sm-12 col-12" style="margin-left: -10px;">
                    <div class="info-box <?= $se['warna_master'] ?>">
                      <span class="info-box-icon" style="font-size: 50px">
                        <i class="fas fa-user-secret"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text"><b>Example 1</b></span>
                        <span class="info-box-number" style="font-size: 25px;">666</span>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex flex-wrap">
                    <?php 
                        if($data['warna_master']=='bg-dark'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-dark" checked></div>
                          <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_master']=='bg-primary'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-primary" checked>
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_master']=='bg-purple'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-purple" checked>
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_master']=='bg-success'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-success" checked>
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_master']=='bg-indigo'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-indigo" checked>
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_master']=='bg-gray'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-gray" checked>
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_master']=='bg-warning'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-warning" checked>
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_master']=='bg-orange'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-orange" checked>
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_master']=='bg-pink'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-pink" checked>
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_master']=='bg-danger'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-danger" checked>
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_master']=='bg-light'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-light" checked>
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_master']=='bg-lightblue'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_master" value="bg-lightblue" checked>
                          </div>
                        <?php }
                      ?>
                  </div>
                  <br>
                  <label>Warna Untuk Data Report</label>
                  <div class="col-md-6 col-sm-12 col-12" style="margin-left: -10px;">
                    <div class="info-box <?= $se['warna_report'] ?>">
                      <span class="info-box-icon" style="font-size: 50px">
                        <i class="fas fa-user-secret"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text"><b>Example 1</b></span>
                        <span class="info-box-number" style="font-size: 25px;">666</span>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex flex-wrap">
                    <?php 
                        if($data['warna_report']=='bg-dark'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-dark" checked></div>
                          <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_report']=='bg-primary'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-primary" checked>
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_report']=='bg-purple'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-purple" checked>
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_report']=='bg-success'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-success" checked>
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_report']=='bg-indigo'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-indigo" checked>
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_report']=='bg-gray'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-gray" checked>
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_report']=='bg-warning'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-warning" checked>
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_report']=='bg-orange'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-orange" checked>
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_report']=='bg-pink'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-pink" checked>
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_report']=='bg-danger'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-danger" checked>
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_report']=='bg-light'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-light" checked>
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-lightblue">
                          </div>
                        <?php }else if($data['warna_report']=='bg-lightblue'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-dark">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-primary">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-purple">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-success">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-indigo">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-gray">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-warning">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-orange">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-pink">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-danger">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-light">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="warna_report" value="bg-lightblue" checked>
                          </div>
                        <?php }
                      ?>
                  </div><br>
                  <label>Warna Pembatas pada Grafik</label>
                  <div class="d-flex flex-wrap">
                    <?php 
                        if($data['background_grafik']=='#343a40'){?>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="background_grafik" value="#f8f9fa" ></div>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="background_grafik" value="#343a40" checked>
                          </div>
                        <?php }else if($data['background_grafik']=='#f8f9fa'){?>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="background_grafik" value="#f8f9fa" checked>
                          </div>
                           <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="background_grafik" value="#343a40" >
                          </div>
                        <?php }
                      ?>
                  </div>
                  <br>
                  <label>Warna Utama pada Grafik</label>
                  <div class="d-flex flex-wrap">
                    <?php 
                        if($data['background_grafik1']=='#343a40'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#343a40" checked></div>
                          <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#007bff">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6f42c1">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#28a745">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6610f2">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6c757d">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#ffc107">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#fd7e14">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#e83e8c">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#dc3545">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#f8f9fa">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#3c8dbc">
                          </div>
                        <?php }else if($data['background_grafik1']=='#007bff'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#343a40">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#007bff" checked>
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6f42c1">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#28a745">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6610f2">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6c757d">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#ffc107">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#fd7e14">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#e83e8c">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#dc3545">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#f8f9fa">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#3c8dbc">
                          </div>
                        <?php }else if($data['background_grafik1']=='#6f42c1'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#343a40">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#007bff">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6f42c1" checked>
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#28a745">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6610f2">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6c757d">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#ffc107">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#fd7e14">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#e83e8c">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#dc3545">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#f8f9fa">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#3c8dbc">
                          </div>
                        <?php }else if($data['background_grafik1']=='#28a745'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#343a40">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#007bff">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6f42c1">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#28a745" checked>
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6610f2">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6c757d">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#ffc107">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#fd7e14">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#e83e8c">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#dc3545">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#f8f9fa">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#3c8dbc">
                          </div>
                        <?php }else if($data['background_grafik1']=='#6610f2'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#343a40">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#007bff">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6f42c1">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#28a745">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6610f2" checked>
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6c757d">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#ffc107">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#fd7e14">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#e83e8c">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#dc3545">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#f8f9fa">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#3c8dbc">
                          </div>
                        <?php }else if($data['background_grafik1']=='#6c757d'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#343a40">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#007bff">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6f42c1">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#28a745">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6610f2">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6c757d" checked>
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#ffc107">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#fd7e14">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#e83e8c">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#dc3545">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#f8f9fa">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#3c8dbc">
                          </div>
                        <?php }else if($data['background_grafik1']=='#ffc107'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#343a40">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#007bff">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6f42c1">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#28a745">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6610f2">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6c757d">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#ffc107" checked>
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#fd7e14">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#e83e8c">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#dc3545">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#f8f9fa">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#3c8dbc">
                          </div>
                        <?php }else if($data['background_grafik1']=='#fd7e14'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#343a40">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#007bff">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6f42c1">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#28a745">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6610f2">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6c757d">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#ffc107">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#fd7e14" checked>
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#e83e8c">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#dc3545">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#f8f9fa">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#3c8dbc">
                          </div>
                        <?php }else if($data['background_grafik1']=='#e83e8c'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#343a40">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#007bff">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6f42c1">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#28a745">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6610f2">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6c757d">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#ffc107">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#fd7e14">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#e83e8c" checked>
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#dc3545">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#f8f9fa">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#3c8dbc">
                          </div>
                        <?php }else if($data['background_grafik1']=='#dc3545'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#343a40">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#007bff">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6f42c1">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#28a745">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6610f2">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6c757d">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#ffc107">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#fd7e14">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#e83e8c">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#dc3545" checked>
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#f8f9fa">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#3c8dbc">
                          </div>
                        <?php }else if($data['background_grafik1']=='#f8f9fa'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#343a40">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#007bff">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6f42c1">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#28a745">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6610f2">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6c757d">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#ffc107">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#fd7e14">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#e83e8c">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#dc3545">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#f8f9fa" checked>
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#3c8dbc">
                          </div>
                        <?php }else if($data['background_grafik1']=='#3c8dbc'){?>
                          <div class="navbar-dark mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#343a40">
                          </div>
                           <div class="navbar-primary mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#007bff">
                          </div>
                          <div class="navbar-purple mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6f42c1">
                          </div>
                          <div class="navbar-success mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#28a745">
                          </div>
                          <div class="navbar-indigo mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6610f2">
                          </div>
                          <div class="navbar-gray mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#6c757d">
                          </div>
                          <div class="navbar-warning mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#ffc107">
                          </div>
                          <div class="navbar-orange mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#fd7e14">
                          </div>
                          <div class="navbar-pink mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#e83e8c">
                          </div>
                          <div class="navbar-danger mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#dc3545">
                          </div>
                          <div class="navbar-light mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#f8f9fa">
                          </div>
                          <div class="navbar-lightblue mr-3 imutdong">
                            <input type="radio" name="background_grafik1" value="#3c8dbc" checked>
                          </div>
                        <?php }
                      ?>
                  </div>
                  <br>
                  <div class="form-group">
                    <button class="btn btn-dark" type="button" onclick="window.location='data_backup.php'"><b>Backup Database</b></button>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="far fa-handshake"></i></button>
                  <button type="reset" data-toggle="tooltip" data-placement="bottom" title="Reset" class="btn btn-danger float-right">
                    <i class="far fa-window-close"></i></button>
                </div>
            	</div>
            </div>
        </div> <!-- /.row -->
      </section>
  </div> <!-- /.content-wrapper -->
<?php require('footernya.php') ?>

<?php 
  require('../koneksi.php');
  if (isset($_POST['simpan'])) {
    $ukuran_teks       = $_REQUEST['ukuran_teks'];
    $warna_navbar      = $_REQUEST['warna_navbar'];
    $warna_icon        = $_REQUEST['warna_icon'];
    $warna_lainnya     = $_REQUEST['warna_lainnya'];
    $warna_master      = $_REQUEST['warna_master'];
    $warna_report      = $_REQUEST['warna_report'];
    $background_grafik = $_REQUEST['background_grafik'];
    $background_grafik1 = $_REQUEST['background_grafik1'];

    $ubah = mysqli_query($kon,"UPDATE pengaturan SET warna_report='$warna_report', ukuran_teks='$ukuran_teks', warna_master='$warna_master', warna_lainnya='$warna_lainnya', warna_icon='$warna_icon', warna_navbar='$warna_navbar', background_grafik='$background_grafik', background_grafik1='$background_grafik1'");
    if($ubah){
      ?> <script>window.location='pengaturan.php';</script> <?php
    }else{
      ?> <script>alert('Gagal Diperbaharui');</script> <?php
    }
  }
 ?>