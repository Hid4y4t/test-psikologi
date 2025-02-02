<?php 

session_start();
 

include '../koneksi/koneksi.php';
 

$username_user_k = $_POST["username_user_k"];
$psd_user_k = md5($_POST["psd_user_k"]);
 

$data ="select * from user_kelompok where username_user_k='".$username_user_k."' and psd_user_k='".$psd_user_k."' limit 1";
 
$hasil = mysqli_query ($koneksi, $data);
$cek = mysqli_num_rows($hasil);
 
if($cek>0){

$row= mysqli_fetch_assoc($hasil);
$_SESSION["id_user_k"] = $row ["id_user_k"];
	$_SESSION["nama_user_k"] = $row ["nama_user_k"];
    $_SESSION["username_user_k"] = $row ["username_user_k"];
    $_SESSION["id_kelompok"] = $row ["id_kelompok"];
    $_SESSION["id_kd_ist"] = $row ["id_kd_ist"];
    $_SESSION["id_kd_msdt"] = $row ["id_kd_msdt"];
    $_SESSION["id_kd_papi"] = $row ["id_kd_papi"];
	
	header("location:../user_k/index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>