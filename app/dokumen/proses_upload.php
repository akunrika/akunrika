<?php
include('../../conf/config.php');
$nama = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
move_uploaded_file($file_tmp,'berkas/'.$nama);
$query = mysqli_query($koneksi,"INSERT INTO tb_regulasi (id,dokumen) VALUES('','$nama')");
?>