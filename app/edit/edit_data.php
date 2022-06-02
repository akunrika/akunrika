<?php
$id    = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_regulasi WHERE id=$id");
$view  =mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Regulasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method='get' action='update/update_data.php'>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Aturan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Aturan" name='aturan' value="<?php echo $view['aturan'];?>">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Aturan" name='id' value="<?php echo $view['id'];?>" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nomor</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nomor" name='nomor' value="<?php echo $view['nomor'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tahun</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tahun" name='tahun' value="<?php echo $view['tahun'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tentang</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tentang" name='tentang' value="<?php echo $view['tentang'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Dokumen</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Dokumen" name='dokumen' value="<?php echo $view['dokumen'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Simpan</button>
                </div>
              </form>
            </div>
    </div>
</section>