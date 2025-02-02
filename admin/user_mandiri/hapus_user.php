<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_user = $_GET['id_user'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from user_mandiri where id_user='$id_user'");
 
// mengalihkan halaman kembali ke index.php
header("location:../data_user.php");
 
?>