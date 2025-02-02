<?php
include "../../koneksi/koneksi.php";

// Function to check if all questions are answered
function areAllQuestionsAnswered($questions) {
    foreach ($questions as $question) {
        if (empty($_REQUEST[$question])) {
            return false;
        }
    }
    return true;
}

$questions = [];
for ($i = 1; $i <= 64; $i++) {
    $questions[] = 'soal' . $i;
}

if (!areAllQuestionsAnswered($questions)) {
    header("Location: soalMSDT.php?error=Please answer all questions");
    exit();
}

$id_kelompok = $_REQUEST['id_kelompok'];
$nama_user_k = $_REQUEST['nama_user_k'];
$values = [];

foreach ($questions as $question) {
    $values[] = $_REQUEST[$question];
}

$values = array_map(function($value) use ($koneksi) {
    return "'" . mysqli_real_escape_string($koneksi, $value) . "'";
}, $values);

$mysqli = "INSERT INTO test_msdt_k (
    id_kelompok, nama_user_k, " . implode(", ", $questions) . "
) VALUES (
    '$id_kelompok', '$nama_user_k', " . implode(", ", $values) . "
)";

$result = mysqli_query($koneksi, $mysqli);

if ($result) {
    header("Location: ../index.php?status=success");
    echo '<script language="javascript">alert("Selamat Sudah Mengerjakan !!!"); document.location="../index.php";</script>';
} else {
    header("Location: ../index.php?status=error");
}

mysqli_close($koneksi);
?>
