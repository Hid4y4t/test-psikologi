<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die("Error. No ID Selected!");
}
include '../../../../koneksi/koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM soal_se WHERE id='$id'");
$data = mysqli_fetch_array($query);

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
            <h2>HASIL TEST IST <br> SE </h2>
            <p>ID TEST: <?php echo $id ?></i> </p> <br><br>
            <table border="1" cellpadding="7">
                <tr>
                    <td colspan="18"><b>Nama :</b> <?php echo $data['nama_user']; ?></td>
                </tr>
                <?php
                $totalCorrect = 0;
                for ($i = 1; $i <= 20; $i++) {
                    if ($i % 4 == 1) echo '<tr>';
                    echo '<td size="90">' . $i . '.</td>';
                    echo '<td>&nbsp;&nbsp;';
                    if ($data['soal' . $i] == '1') {
                        echo '<span style="color: green;">&#10004;</span>';
                        $totalCorrect++;
                    } else {
                        echo '<span style="color: red;">&#10008;</span>';
                    }
                    echo '</td>';
                    if ($i % 4 == 0) echo '</tr>';
                }
                ?>
                <tr>
                    <td colspan="8"><b>Jumlah Jawaban Benar :</b> <?php echo $totalCorrect; ?></td>
                </tr>
            </table>
        </center>
    </body>
</body>

</html>