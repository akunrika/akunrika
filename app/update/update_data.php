<?php
include('../../conf/config.php');
$id     = $_GET['id'];
$aturan = $_GET['aturan'];
$nomor = $_GET['nomor'];
$tahun = $_GET['tahun'];
$tentang = $_GET['tentang'];
$dokumen = $_GET['dokumen'];
$query = mysqli_query($koneksi,"UPDATE tb_regulasi SET aturan='$aturan',nomor='$nomor',tahun='$tahun',tentang='$tentang',dokumen='$dokumen' WHERE id='$id'");
header('Location: ../index.php?page=regulasi-reviu');
?>