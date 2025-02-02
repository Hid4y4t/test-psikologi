<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die("Error. No ID Selected!");
}
include '../../../../koneksi/koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM soal_an_k WHERE id='$id'");
$data = mysqli_fetch_array($query);

function formatJawaban($jawaban) {
    if ($jawaban == 1) {
        return '<span style="color: green;">&#10004;</span>';
    } elseif (is_numeric($jawaban)) {
        return $jawaban;
    } else {
        return '<span style="color: red;">&#10008;</span>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-image: url('../bg-nuha.png');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-attachment: fixed;
        }

        h1 {
            font-family: sans-serif;
        }

        table {
            font-family: Arial, Helvetica, sans-serif;
            color: #666;
            text-shadow: 1px 1px 0px #fff;
            background: #eaebec;
            border: #ccc 2px solid;
            border-radius: 8px;
        }


        table th:first-child {
            border-left: none;
        }

        table tr {
            text-align: center;
            padding-left: 20px;
        }

        table td:first-child {
            text-align: left;
            padding-left: 20px;

            border: 0;
        }

        table td {
            padding: 10px 20px;
            border-top: 0px solid #ffffff;
            border-bottom: 0px solid #e0e0e0;
            border-left: 0px solid #e0e0e0;
            background: #fafafa;
            background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
            background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
        }

        table tr:last-child td {
            border-bottom: 0;
        }

        table tr:last-child td:first-child {
            -moz-border-radius-bottomleft: 3px;
            -webkit-border-bottom-left-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        table tr:last-child td:last-child {
            -moz-border-radius-bottomright: 3px;
            -webkit-border-bottom-right-radius: 3px;
            border-bottom-right-radius: 3px;
        }

        table tr:hover td {
            background: #f2f2f2;
            background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
            background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
        }
    </style>
</head>

<body>

    <body>
        <center>
            <h2>HASIL TEST IST <br> AN </h2>
            <p>ID TEST: <?php echo $id ?> ID KELOMPOK : <?php echo $data['id_kelompok']; ?></i> </p> <br><br>
            <table border="1" cellpadding="7">


                <tr>
                    <td colspan="18">Nama : <?php echo $data['nama_user_k']; ?></td>

                </tr>

                <tr>
                    <td size="90"> 1.</td>
                    <td>&nbsp;&nbsp;<?php echo formatJawaban($data['soal1']); ?></td>
                    <td size="90"> 6.</td>
                    <td>&nbsp;&nbsp;<?php echo formatJawaban($data['soal6']); ?></td>
                    <td size="90"> 11.</td>
                    <td>&nbsp;&nbsp;<?php echo formatJawaban($data['soal11']); ?></td>
                    <td size="90"> 16.</td>
                    <td>&nbsp;&nbsp;<?php echo formatJawaban($data['soal16']); ?></td>
                </tr>

                <tr>
                    <td size="90"> 2.</td>
                    <td>&nbsp;&nbsp;<?php echo formatJawaban($data['soal2']); ?></td>
                    <td size="90"> 7.</td>
                    <td>&nbsp;&nbsp;<?php echo formatJawaban($data['soal7']); ?></td>
                    <td size="90"> 12.</td>
                    <td>&nbsp;&nbsp;<?php echo formatJawaban($data['soal12']); ?></td>
                    <td size="90"> 17.</td>
                    <td>&nbsp;&nbsp;<?php echo formatJawaban($data['soal17']); ?></td>
                </tr>

                <tr>
                    <td> 3.</td>
                    <td>&nbsp;&nbsp;<?php echo formatJawaban($data['soal3']); ?></td>
                    <td size="90"> 8.</td>
                    <td>&nbsp;&nbsp;<?php echo formatJawaban($data['soal8']); ?></td>
                    <td size="90"> 13.</td>
                    <td>&nbsp;&nbsp;<?php echo formatJawaban($data['soal13']); ?></td>
                    <td size="90"> 18.</td>
                    <td>&nbsp;&nbsp;<?php echo formatJawaban($data['soal18']); ?></td>
                </tr>
                <tr>
                    <td> 4.</td>
                    <td>&nbsp;&nbsp;<?php echo formatJawaban($data['soal4']); ?></td>
                    <td size="90"> 9.</td>
                    <td>&nbsp;&nbsp;<?php echo formatJawaban($data['soal9']); ?></td>
                    <td size="90"> 14.</td>
                    <td>&nbsp;&nbsp;<?php echo formatJawaban($data['soal14']); ?></td>
                    <td size="90"> 19.</td>
                    <td>&nbsp;&nbsp;<?php echo formatJawaban($data['soal19']); ?></td>
                </tr>
                <tr>
                    <td> 5.</td>
                    <td>&nbsp;&nbsp;<?php echo formatJawaban($data['soal5']); ?></td>
                    <td size="90"> 10.</td>
                    <td>&nbsp;&nbsp;<?php echo formatJawaban($data['soal10']); ?></td>
                    <td size="90"> 15.</td>
                    <td>&nbsp;&nbsp;<?php echo formatJawaban($data['soal15']); ?></td>
                    <td size="90"> 20.</td>
                    <td>&nbsp;&nbsp;<?php echo formatJawaban($data['soal20']); ?></td>
                </tr>
                <tr>
                <td colspan="8" ><b>Jumlah Jawaban Benar :
                <?php
                error_reporting(0);
                $penjumlahan = 0;
                for ($i = 1; $i <= 20; $i++) {
                    $soal = 'soal' . $i;
                    if (is_numeric($data[$soal])) {
                        $penjumlahan += $data[$soal];
                    }
                }
                echo "$penjumlahan"; ?></b></td> 
                </tr>

            </table>
        </center>
    </body>
</body>

</html>