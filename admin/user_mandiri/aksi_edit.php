<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$nama_user = $_POST['nama_user'];
$psd_user = $_POST['psd_user'];
$username_user = $_POST['username_user'];
// $id_js = $_POST['id_js'];
$id_kd_ist = $_POST['id_kd_ist'];
$id_kd_msdt = $_POST['id_kd_msdt'];
$id_kd_papi = $_POST['id_kd_papi'];
 
// menangkap id yang di kirim dari form
$id_user = $_POST['id_user'];

// menginput data ke database
mysqli_query($koneksi,"update user_mandiri set nama_user='$nama_user', psd_user='$psd_user', username_user='$username_user', id_kd_ist='$id_kd_ist', id_kd_msdt='$id_kd_msdt', id_kd_papi='$id_kd_papi' where id_user='$id_user'");
 
// mengalihkan halaman kembali ke index.php
header("location:../data_user.php");
 
?>