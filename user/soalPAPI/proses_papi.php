<?php
include "../../koneksi/koneksi.php";

$nama_user = $_REQUEST['nama_user'];
$questions = [];
for ($i = 1; $i <= 90; $i++) {
    $questions[$i] = $_REQUEST['soal' . $i];
}

// Check if all questions are answered
foreach ($questions as $key => $value) {
    if (empty($value)) {
        header("Location: soalPAPI.php?error=Please answer all questions");
        exit();
    }
}

$mysqli = "INSERT INTO test_papi(
    nama_user,
    soal1, soal2, soal3, soal4, soal5, soal6, soal7, soal8, soal9, soal10,
    soal11, soal12, soal13, soal14, soal15, soal16, soal17, soal18, soal19, soal20,
    soal21, soal22, soal23, soal24, soal25, soal26, soal27, soal28, soal29, soal30,
    soal31, soal32, soal33, soal34, soal35, soal36, soal37, soal38, soal39, soal40,
    soal41, soal42, soal43, soal44, soal45, soal46, soal47, soal48, soal49, soal50,
    soal51, soal52, soal53, soal54, soal55, soal56, soal57, soal58, soal59, soal60,
    soal61, soal62, soal63, soal64, soal65, soal66, soal67, soal68, soal69, soal70,
    soal71, soal72, soal73, soal74, soal75, soal76, soal77, soal78, soal79, soal80,
    soal81, soal82, soal83, soal84, soal85, soal86, soal87, soal88, soal89, soal90
) VALUES (
    '$nama_user',
    '{$questions[1]}', '{$questions[2]}', '{$questions[3]}', '{$questions[4]}', '{$questions[5]}',
    '{$questions[6]}', '{$questions[7]}', '{$questions[8]}', '{$questions[9]}', '{$questions[10]}',
    '{$questions[11]}', '{$questions[12]}', '{$questions[13]}', '{$questions[14]}', '{$questions[15]}',
    '{$questions[16]}', '{$questions[17]}', '{$questions[18]}', '{$questions[19]}', '{$questions[20]}',
    '{$questions[21]}', '{$questions[22]}', '{$questions[23]}', '{$questions[24]}', '{$questions[25]}',
    '{$questions[26]}', '{$questions[27]}', '{$questions[28]}', '{$questions[29]}', '{$questions[30]}',
    '{$questions[31]}', '{$questions[32]}', '{$questions[33]}', '{$questions[34]}', '{$questions[35]}',
    '{$questions[36]}', '{$questions[37]}', '{$questions[38]}', '{$questions[39]}', '{$questions[40]}',
    '{$questions[41]}', '{$questions[42]}', '{$questions[43]}', '{$questions[44]}', '{$questions[45]}',
    '{$questions[46]}', '{$questions[47]}', '{$questions[48]}', '{$questions[49]}', '{$questions[50]}',
    '{$questions[51]}', '{$questions[52]}', '{$questions[53]}', '{$questions[54]}', '{$questions[55]}',
    '{$questions[56]}', '{$questions[57]}', '{$questions[58]}', '{$questions[59]}', '{$questions[60]}',
    '{$questions[61]}', '{$questions[62]}', '{$questions[63]}', '{$questions[64]}', '{$questions[65]}',
    '{$questions[66]}', '{$questions[67]}', '{$questions[68]}', '{$questions[69]}', '{$questions[70]}',
    '{$questions[71]}', '{$questions[72]}', '{$questions[73]}', '{$questions[74]}', '{$questions[75]}',
    '{$questions[76]}', '{$questions[77]}', '{$questions[78]}', '{$questions[79]}', '{$questions[80]}',
    '{$questions[81]}', '{$questions[82]}', '{$questions[83]}', '{$questions[84]}', '{$questions[85]}',
    '{$questions[86]}', '{$questions[87]}', '{$questions[88]}', '{$questions[89]}', '{$questions[90]}'
)";

$result = mysqli_query($koneksi, $mysqli);

if ($result) {
    header("Location: ../index.php?status=berhasil");
} else {
    header("Location: ../index.php?status=gagal");
}

mysqli_close($koneksi);
?>
