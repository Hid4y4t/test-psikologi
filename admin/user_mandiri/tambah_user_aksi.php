<?php 
// koneksi database
include '../../koneksi/koneksi.php';

// menangkap data yang di kirim dari form
$nama_user = $_POST['nama_user'];
$psd_user = md5($_POST['psd_user']);
$username_user = $_POST['username_user'];
$id_kd_ist = $_POST['id_kd_ist'];
$id_kd_msdt = $_POST['id_kd_msdt'];
$id_kd_papi = $_POST['id_kd_papi'];

// cek apakah username sudah ada di database
$check_query = "SELECT * FROM user_mandiri WHERE username_user='$username_user'";
$check_result = mysqli_query($koneksi, $check_query);

if (mysqli_num_rows($check_result) > 0) {
    // jika username sudah ada
    echo "<script>alert('Username sudah ada, data gagal disimpan!'); window.location.href='tambah_user.php';</script>";
} else {
    // menginput data ke database
    $query = "INSERT INTO user_mandiri VALUES('', '$nama_user', '$psd_user', '$username_user', '$id_kd_ist', '$id_kd_msdt', '$id_kd_papi')";
    $result = mysqli_query($koneksi, $query);

    // mengecek apakah query berhasil atau gagal
    if ($result) {
        // jika berhasil
        echo "<script>alert('Data berhasil disimpan!'); window.location.href='../tambah_user.php';</script>";
    } else {
        // jika gagal
        echo "<script>alert('Data gagal disimpan!'); window.location.href='../tambah_user.php';</script>";
    }
}
?>
