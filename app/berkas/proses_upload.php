<?php
include ('../../conf/config.php');

//pengecekan tipe harus pdf
$tipe_file = $_FILES['dokumen']['type']; //mendapatkan mime type
if ($tipe_file == "application/pdf") //mengecek apakah file tersebu pdf atau bukan
{
 $aturan     = trim($_POST['aturan']);
 $dokumen = trim($_FILES['dokumen']['name']);

 $sql = "INSERT INTO tb_regulasi (dokumen) VALUES ('$aturan')";
 mysqli_query($koneksi,$sql); //simpan data judul dahulu untuk mendapatkan id

 //dapatkan id terkahir
 $query = mysqli_query($koneksi,"SELECT id FROM tb_regulasi ORDER BY id DESC LIMIT 1");
 $data  = mysqli_fetch_array($query);

 //mengganti nama pdf
 $nama_baru = "file_".$data['id'].".pdf"; //hasil contoh: file_1.pdf
 $file_temp = $_FILES['dokumen']['tmp_name']; //data temp yang di upload
 $folder    = "file"; //folder tujuan

 move_uploaded_file($file_temp, "$folder/$nama_baru"); //fungsi upload
 //update nama file di database
 mysqli_query($koneksi,"UPDATE data_file SET dokumen='$nama_baru' WHERE id='$data[id]' ");

 header('location:index.php?pesan=upload-berhasil');

} else
{
 echo "Gagal Upload File Bukan PDF! <a href='index.php'> Kembali </a>";
}

?>