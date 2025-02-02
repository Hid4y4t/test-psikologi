<?php
include "../../koneksi/koneksi.php";

$nama_user = $_REQUEST['nama_user'];
$questions = [];
for ($i = 1; $i <= 64; $i++) {
    $questions[$i] = $_REQUEST['soal' . $i];
}

// Check if all questions are answered
foreach ($questions as $key => $value) {
    if (empty($value)) {
        echo '<script language="javascript">alert("Semua soal harus dijawab!"); document.location="soalMSDT.php";</script>';
        exit;
    }
}

// Prepare the SQL statement
$columns = implode(", ", array_map(function ($i) {
    return "soal$i";
}, range(1, 64)));

$values = implode(", ", array_map(function ($i) use ($questions) {
    return "'" . $questions[$i] . "'";
}, range(1, 64)));

$mysqli = "INSERT INTO test_msdt (nama_user, $columns) VALUES ('$nama_user', $values)";

$result = mysqli_query($koneksi, $mysqli);

if ($result) {
    header("Location:../index.php?message=berhasil_menjawab");
    echo '<script language="javascript">alert("Selamat Sudah Mengerjakan !!!"); document.location="../index.php";</script>';
} else {
    header("Location:../index.php?message=gagal_menjawab");
}

mysqli_close($koneksi);
