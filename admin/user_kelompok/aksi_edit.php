<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$id_user_k = $_POST['id_user_k'];
$nama_user_k = $_POST['nama_user_k'];
$psd_user_k = md5($_POST['psd_user_k']);
$username_user_k = $_POST['username_user_k'];
$id_kelompok = $_POST['id_kelompok'];
$id_kd_ist = $_POST['id_kd_ist'];
$id_kd_msdt = $_POST['id_kd_msdt'];
$id_kd_papi = $_POST['id_kd_papi'];
 
// menginput data ke database
mysqli_query($koneksi,"update  user_kelompok set nama_user_k='$nama_user_k', psd_user_k='$psd_user_k', username_user_k='$username_user_k', id_kelompok='$id_kelompok',  id_kd_ist='$id_kd_ist', id_kd_msdt='$id_kd_msdt', id_kd_papi='$id_kd_papi'  where id_user_k='$id_user_k'");
 
// mengalihkan halaman kembali ke index.php
header("location:../data_user_kelompok.php");
 
?>