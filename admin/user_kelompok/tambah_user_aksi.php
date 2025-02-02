<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$nama_user_k = $_POST['nama_user_k'];
$username_user_k = $_POST['username_user_k'];

$psd_user_k = md5($_POST['psd_user_k']);

$id_kelompok= $_POST['id_kelompok'];

// $id_js = $_POST['id_js'];
$id_kd_ist = $_POST['id_kd_ist'];
$id_kd_msdt = $_POST['id_kd_msdt'];
$id_kd_papi = $_POST['id_kd_papi'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into user_kelompok values('','$nama_user_k','$psd_user_k','$username_user_k', '$id_kelompok', '$id_kd_ist', '$id_kd_msdt', '$id_kd_papi')");
 
// mengalihkan halaman kembali ke index.php
header("location:../tambah_user_kelompok.php");
 
?>