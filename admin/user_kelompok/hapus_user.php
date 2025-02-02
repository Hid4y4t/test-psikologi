<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_user_k = $_GET['id_user_k'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from user_kelompok where id_user_k='$id_user_k'");
 
// mengalihkan halaman kembali ke index.php
header("location:../data_user_kelompok.php");
 
?>