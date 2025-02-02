<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die("Error. No ID Selected!");
}
include '../../../../koneksi/koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM soal_fa WHERE id='$id'");
$data = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Results - IST FA</title>

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
            width: 80%;
            margin: auto;
        }

        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        table th {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #f2f2f2;
        }

        .icon {
            font-size: 1.5em;
        }

        .icon-check {
            color: green;
        }

        .icon-cross {
            color: red;
        }
    </style>
</head>

<body>
    <center>
        <h2>Test Results - IST FA</h2>
        <p>ID TEST: <?php echo $id ?></p>
        <br><br>
        <table>
            <tr>
                <td colspan="8">Name: <?php echo $data['nama_user']; ?></td>
            </tr>
            <?php
            $correctAnswers = 0;
            for ($i = 1; $i <= 20; $i++) {
                if ($i % 4 == 1) echo '<tr>';
                echo '<td>' . $i . '.</td>';
                echo '<td>';
                if ($data['soal' . $i] == 1) {
                    echo '<span class="icon icon-check">&#10004;</span>';
                    $correctAnswers++;
                } else {
                    echo '<span class="icon icon-cross">&#10008;</span>';
                }
                echo '</td>';
                if ($i % 4 == 0) echo '</tr>';
            }
            ?>
            <tr>
                <td colspan="8"><b>Total Correct Answers: <?php echo $correctAnswers; ?></b></td>
            </tr>
        </table>
    </center>
</body>

</html>
