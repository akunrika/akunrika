<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!$_SESSION['nama']){
  header('Location: ../index.php?session=expired');
}
include('header.php');?>
<?php include('../conf/config.php');?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php include('preloader.php');?>

  <!-- Navbar -->
  <?php include('navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php include('logo.php');?>

    <!-- Sidebar -->
    <?php include('sidebar.php');?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include('content_header.php');?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php
    if (isset($_GET['page'])){
      if($_GET['page']=='dashboard'){
        include('dashboard.php');
      }
      else if($_GET['page']=='regulasi-reviu'){
        include('data_regulasi.php');
      }
      else if($_GET['page']=='regulasi-reviu-admin'){
        include('data_regulasi_admin.php');
      }
      else if($_GET['page']=='regulasi-tora'){
        include('data_regulasitora.php');
      }
      else if($_GET['page']=='regulasi-tora-admin'){
        include('data_regulasitora_admin.php');
      }
      else if($_GET['page']=='regulasi-shat'){
        include('data_regulasishat.php');
      }
      else if($_GET['page']=='regulasi-shat-admin'){
        include('data_regulasishat_admin.php');
      }
      else if($_GET['page']=='edit-data'){
        include('edit/edit_data.php');
      }
      else if($_GET['page']=='lihat-data'){
        include('view/lihat_data.php');
      }
      else if($_GET['page']=='upload-data'){
        include('dokumen/proses_upload.php');
      }
      else{
        include('dashboard.php');
      }
    }
    else{
      include('dashboard.php');
    }?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>
