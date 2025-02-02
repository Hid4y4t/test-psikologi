<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$nama_kelompok = $_POST['nama_kelompok'];
$keterangan_Kelompok = $_POST['keterangan_Kelompok'];


// menginput data ke database
mysqli_query($koneksi,"insert into kelompok values('','$nama_kelompok','$keterangan_Kelompok')");
 
// mengalihkan halaman kembali ke index.php
header("location:../tambah_kelompok.php");
 
?>