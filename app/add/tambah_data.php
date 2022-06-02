<?php
include('../../conf/config.php');
$aturan = $_GET['aturan'];
$nomor = $_GET['nomor'];
$tahun = $_GET['tahun'];
$tentang = $_GET['tentang'];
$dokumen = $_GET['dokumen'];
$query = mysqli_query($koneksi,"INSERT INTO tb_regulasi (id,aturan,nomor,tahun,tentang,dokumen) VALUES('','$aturan','$nomor','$tahun','$tentang','$dokumen')");
header('Location: ../index.php?page=regulasi-reviu');
?>