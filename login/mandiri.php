<?php 

session_start();
 

include '../koneksi/koneksi.php';
 
$username_user = $_POST['username_user'];
$psd_user = md5($_POST['psd_user']);


$stmt = $koneksi->prepare("SELECT * FROM user_mandiri WHERE username_user = ? AND psd_user = ? LIMIT 1");
$stmt->bind_param("ss", $username_user, $psd_user);
$stmt->execute();
$hasil = $stmt->get_result();
$cek = $hasil->num_rows;

if ($cek > 0) {
    $row = $hasil->fetch_assoc();
    $_SESSION["id_user"] = $row["id_user"];
    $_SESSION["nama_user"] = $row["nama_user"];
    $_SESSION["username_user"] = $row["username_user"];
    $_SESSION["id_kd_ist"] = $row["id_kd_ist"];
    $_SESSION["id_kd_msdt"] = $row["id_kd_msdt"];
    $_SESSION["id_kd_papi"] = $row["id_kd_papi"];
    
    header("location:../user/index.php");
} else {
    header("location:index.php?pesan=gagal");
}
$stmt->close();
?>