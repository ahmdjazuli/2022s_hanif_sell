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
                <h2 style="display:inline;">Data Ongkir</h2>
                <button style="float: right;margin-left: 5px" class="btn btn-dark" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><a href="ongkir_input.php" class="text-white"><i class="fas fa-plus"></i></a></button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTables" class="table table-bordered table-hover table-sm">
                  <thead class="table-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Kota</th>
                        <th>Tarif</th>
                        <th class="hide"></th>
                    </tr>
                  </thead>
                  <tfoot class="table-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Kota</th>
                        <th>Tarif</th>
                        <th class="hide"></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                      $no = 1;
                      $query = mysqli_query($kon, "SELECT * FROM ongkir ORDER BY kota ASC");
                      while($data = mysqli_fetch_array($query)){
                        ?>
                          <tr class="text-center">
                          <td><?= $no++ ?></td>
                          <td><?= $data['kota'] ?></td>           
                          <td>Rp. <?= number_format($data['tarif'],0,',','.') ?> </td>
                          <td>
                            <button class="btn bg-dark" type="button"><a href="ongkir_edit.php?idongkir=<?= $data['idongkir'] ?>" class="text-white"><i class="far fa-edit"></i></a></button>
                            <button class="btn bg-dark" onclick="yakin = confirm('Apakah Kamu yakin ingin Menghapus?'); if(yakin){ window.location = 'hapus.php?idongkir=<?= $data['idongkir'] ?>';
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
