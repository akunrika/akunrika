
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Aturan</th>
                    <th>Nomor</th>
                    <th>Tahun</th>
                    <th>Tentang</th>
                    <th>Dokumen</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_regulasi");
                    while($mhs = mysqli_fetch_array($query)){
                        $no++
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no;?></td>
                    <td><?php echo $mhs['aturan'];?></td>
                    <td width='5%'><?php echo $mhs['nomor'];?></td>
                    <td width='5%'><?php echo $mhs['tahun'];?></td>
                    <td width='25%'><?php echo $mhs['tentang'];?></td>
                    <td>
                      <?php echo $mhs['dokumen'];?>
                      <a href="index.php?page=lihat-data&& id=<?php echo $mhs['id'];?>" class="btn btn-xs btn-primary">Lihat</a>
                    </td>
                    <td>
                      <a onclick="hapus_data(<?php echo $mhs['id'];?>)" class="btn btn-xs btn-danger">Hapus</a>
                      <a href="index.php?page=edit-data&& id=<?php echo $mhs['id'];?>" class="btn btn-xs btn-success">Edit</a>
                    </td>
                  </tr>
                  <?php }?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                    <th>action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah_data.php">
            <div class="modal-body">
            
              <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Jenis Aturan" name="aturan" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Nomor" name="nomor" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Tahun" name="tahun" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Tentang" name="tentang" required>
                </div>
                <div class="form">
                  <form action="" method="post" enctype="multipart/form-data">
                  <label for="exampleFormControlFile1">Dokumen</label>
                  <input type="file" class="form-control" name="dokumen">
                  <?php
                  $koneksi =  mysqli_connect('localhost','root','','db_psnriau');
                  if(isset($_POST['proses'])){
                    $direktori = "berkas/";
                    $file_name = $_FILES['dokumen']['name'];
                    move_uploaded_file($_FILES['dokumen']['tmp_name'],$direktori.$file_name);
                    $query = mysqli_query($koneksi, "INSERT INTO tb_regulasi (id,dokumen) VALUES('','$file_name')");
                  }
                  ?>
                </div>
              </div>
            
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<script>
  function hapus_data(data_id){
    // alert('ok');
    // window.location=("delete/hapus_data.php?id="+data_id);
    Swal.fire({
      title: 'Apakah datanya akan dihapus?',
      // showDenyButton: false,
      showCancelButton: true,
      confirmButtonText: 'Hapus Data',
      confirmButtonColor: 'red',
      // denyButtonText: `Don't save`,
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        window.location=("delete/hapus_data.php?id="+data_id);
      }
    })
  }
</script>