<?php
  if (isset($_POST['dokumen'])){
    header("content-type: application/pdf");
    readfile('');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Lihat</title>
</head>
<body>
  <form action="" method="post">
    <button name="dokumen">Lihat</button>
</body>
</html>
<?php
$id    = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_regulasi WHERE id=$id");
$view  =mysqli_fetch_array($query);
?>
<a href="index.php">Kembali</a>
<!-- <embed type="application/pdf" src="file/<?php echo $lihat['dokumen'];?>" width="100%" height="600"><embed> -->
<embed src="file/<?php echo $data['dokumen'];?>" type="application/pdf" width="800" height="600" >
