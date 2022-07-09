<?php require('headernya.php'); error_reporting(0); ?>
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
                <h2 style="display:inline;">Data Barang</h2>
                <button style="float: right;margin-left: 5px" class="btn btn-dark" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><a href="tanam_input.php" class="text-white"><i class="fas fa-plus"></i></a></button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTables" class="table table-bordered table-hover table-sm">
                  <thead class="table-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Kategori</th>
                        <th>Supplier</th>
                        <th>Stok</th>
                        <th>Harga Modal</th>
                        <th>Harga Jual</th>
                        <th>Terjual</th>
                        <th class="hide"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      $query = mysqli_query($kon, "SELECT * FROM tanam JOIN supplier ON tanam.idsupplier = supplier.idsupplier ORDER BY idtanam DESC");
                      while($data = mysqli_fetch_array($query)){
                        ?>
                          <tr class="text-center">
                          <td><?= $no++ ?></td>
                          <td><?= $data['namatanam'] ?></td>  
                          <td><a target="_blank" href="../img/<?= $data['gambar'] ?>"><img src="../img/<?= $data['gambar'] ?>" width='60px'></a></td>         
                          <td><?= $data['kategori'] ?></td>           
                          <td><?= $data['nsupplier'] ?></td>           
                          <td><?= $data['stok'] ?></td>           
                          <td>Rp. <?= number_format($data['modal'],0,',','.') ?> </td>            
                          <td>Rp. <?= number_format($data['harga'],0,',','.') ?> </td>          
                          <td><?= $data['terjual'] ?></td>           
                          <td>
                            <button class="btn bg-dark" type="button"><a href="tanam_edit.php?idtanam=<?= $data['idtanam'] ?>" class="text-white"><i class="far fa-edit"></i></a></button>
                            <button class="btn bg-dark" onclick="yakin = confirm('Apakah Kamu yakin ingin Menghapus?'); if(yakin){ window.location = 'hapus.php?idtanam=<?= $data['idtanam'] ?>';
                              }" type="button"><i class="fas fa-trash"></i></button>
                          </td>
                        <?php 
                      }
                    ?>
                  </tbody>
                  <tfoot class="table-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Kategori</th>
                        <th>Supplier</th>
                        <th>Stok</th>
                        <th>Harga Modal</th>
                        <th>Harga Jual</th>
                        <th>Terjual</th>
                        <th class="hide"></th>
                    </tr>
                  </tfoot>
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
