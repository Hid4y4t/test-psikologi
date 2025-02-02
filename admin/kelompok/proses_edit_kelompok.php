<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$id_kelompok = $_POST['id_kelompok'];
$nama_kelompok= $_POST['nama_kelompok'];
$keterangan_kelompok = $_POST['keterangan_kelompok'];

// menginput data ke database
mysqli_query($koneksi,"update  kelompok set nama_kelompok='$nama_kelompok', keterangan_kelompok='$keterangan_kelompok'  where id_kelompok='$id_kelompok'");
 
// mengalihkan halaman kembali ke index.php
header("location:../kelompok.php");
 
?>