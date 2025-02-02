<?php
 include "../../../koneksi/koneksi.php";
 $nama_user = $_REQUEST['nama_user'];
 $soal1 = $_REQUEST['soal1'];
 $soal2 = $_REQUEST['soal2'];
 $soal3 = $_REQUEST['soal3'];
 $soal4 = $_REQUEST['soal4'];
 $soal5 = $_REQUEST['soal5'];
 $soal6 = $_REQUEST['soal6'];
 $soal7 = $_REQUEST['soal7'];
 $soal8 = $_REQUEST['soal8'];
 $soal9 = $_REQUEST['soal9'];
 $soal10 = $_REQUEST['soal10'];
 $soal11 = $_REQUEST['soal11'];
 $soal12 = $_REQUEST['soal12'];
 $soal13 = $_REQUEST['soal13'];
 $soal14= $_REQUEST['soal14'];
 $soal15 = $_REQUEST['soal15'];
 $soal16 = $_REQUEST['soal16'];



 $mysqli = "INSERT INTO soal_ge(
    nama_user,
    soal1, 
    soal2, 
    soal3,
    soal4,
    soal5,
    soal6,
    soal7,
    soal8,
    soal9,
    soal10,
    soal11,
    soal12,
    soal13,
    soal14,
    soal15,
    soal16) 
    VALUES ( 
    '$nama_user',
    '$soal1',
    '$soal2',
    '$soal3',
    '$soal4',
    '$soal5',
    '$soal6',
    '$soal7',
    '$soal8',
    '$soal9',
    '$soal10',
    '$soal11',
    '$soal12',
    '$soal13',  
    '$soal14',
    '$soal15',
    '$soal16')";

 $result	= mysqli_query($koneksi, $mysqli);

 if ($result) {
    header("Location:../subsoalIST.php?=berhasil menjawab");
} else {
    header("Location:../subsoalIST.php?=gagal menjawab");
}

mysqli_close($koneksi);
?>