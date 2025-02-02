<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_kelompok = $_GET['id_kelompok'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from kelompok where id_kelompok='$id_kelompok'");
 
// mengalihkan halaman kembali ke index.php
header("location:../kelompok.php");
 
?>