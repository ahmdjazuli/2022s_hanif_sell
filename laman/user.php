<?php require('headernya.php');  error_reporting(0); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content --><br>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 style="display:inline;">Data Pengguna</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTables" class="table table-bordered table-hover table-sm">
                  <thead class="table-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Alamat</th>
                        <th>Telp</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th class="hide"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      $query = mysqli_query($kon, "SELECT * FROM user WHERE NOT level = 'admin' ORDER BY nama ASC");
                      while($data = mysqli_fetch_array($query)){
                        ?>
                          <tr class="text-center">
                          <td><?= $no++ ?></td>
                          <td><?php 
                            if($data['jk'] == 0){
                              echo $data['nama']." <svg style='width:22px;height:22px' viewBox='0 0 24 24'><path fill='currentColor' d='M9,9C10.29,9 11.5,9.41 12.47,10.11L17.58,5H13V3H21V11H19V6.41L13.89,11.5C14.59,12.5 15,13.7 15,15A6,6 0 0,1 9,21A6,6 0 0,1 3,15A6,6 0 0,1 9,9M9,11A4,4 0 0,0 5,15A4,4 0 0,0 9,19A4,4 0 0,0 13,15A4,4 0 0,0 9,11Z' /></svg>";
                            }else if($data['jk'] == 1){
                              echo $data['nama']." <svg style='width:24px;height:24px' viewBox='0 0 24 24'><path fill='currentColor' d='M12,4A6,6 0 0,1 18,10C18,12.97 15.84,15.44 13,15.92V18H15V20H13V22H11V20H9V18H11V15.92C8.16,15.44 6,12.97 6,10A6,6 0 0,1 12,4M12,6A4,4 0 0,0 8,10A4,4 0 0,0 12,14A4,4 0 0,0 16,10A4,4 0 0,0 12,6Z' /></svg>";
                            } ?></td>           
                          <td><?= $data['username'] ?></td>           
                          <td><?= $data['alamat'] ?></td>
                          <td><?= $data['telp'] ?></td>
                          <td><?= $data['email'] ?></td>
                          <td><?= $data['level'] ?></td>
                          <td>
                            <button class="btn bg-dark" type="button"><a href="user_edit.php?id=<?= $data['id'] ?>" class="text-white"><i class="far fa-edit"></i></a></button>
                            <button class="btn bg-dark" onclick="yakin = confirm('Apakah Kamu yakin ingin Menghapus?'); if(yakin){ window.location = 'hapus.php?id=<?= $data['id'] ?>';
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
