
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
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_regulasitora");
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