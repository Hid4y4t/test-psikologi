<?php 
// koneksi database
include '../../../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from soal_wu where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>