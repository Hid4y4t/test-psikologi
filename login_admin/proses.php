<?php 

session_start();
 

include '../koneksi/koneksi.php';

$username_db    =mysqli_real_escape_string($koneksi, $_POST['username_db']);
$password_db    =mysqli_real_escape_string($koneksi, md5($_POST['password_db']));



$data ="select * from admin where username_db='".$username_db."' and password_db='".$password_db."' limit 1";
 
$hasil = mysqli_query ($koneksi, $data);
$cek = mysqli_num_rows($hasil);
 
if($cek>0){

$row= mysqli_fetch_assoc($hasil);
$_SESSION["id_admin"] = $row ["id_admin"];
	$_SESSION["nama_admin"] = $row ["nama_admin"];
    $_SESSION["username_db"] = $row ["username_db"];
    
	
	header("location:../admin/index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>