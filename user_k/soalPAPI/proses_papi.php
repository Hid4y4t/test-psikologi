<?php
include "../../koneksi/koneksi.php";

$id_kelompok = $_REQUEST['id_kelompok'];
$nama_user_k = $_REQUEST['nama_user_k'];

$questions = [];
for ($i = 1; $i <= 90; $i++) {
    $question_key = 'soal' . $i;
    if (empty($_REQUEST[$question_key])) {
        header("Location: ../soalPAPI.php?error=Please answer all questions");
        exit();
    }
    $questions[$question_key] = $_REQUEST[$question_key];
}

$columns = implode(", ", array_keys($questions));
$values = implode("', '", array_values($questions));

$mysqli = "INSERT INTO test_papi_k (id_kelompok, nama_user_k, $columns) VALUES ('$id_kelompok', '$nama_user_k', '$values')";

$result = mysqli_query($koneksi, $mysqli);

if ($result) {
    header("Location: ../index.php?status=success");
} else {
    header("Location: ../index.php?status=error");
}

mysqli_close($koneksi);
?>
