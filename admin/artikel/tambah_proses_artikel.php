<?php 
include '../../koneksi/koneksi.php';
$nama_artikel = $_POST['nama_artikel'];

$konten = $_POST['konten'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 

if(!in_array($ext,$ekstensi) ) {
	header("location:../index.php?alert=gagal_ekstensi");

}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], '../../gambar/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO artikel VALUES(NULL,'$nama_artikel','$konten','$xx')");
		header("location:../artikel.php?alert=berhasil");
	}else{
		header("location:../artikel.php?alert=gagak_ukuran");
	}
}


