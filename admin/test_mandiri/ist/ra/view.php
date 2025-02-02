<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die("Error. No ID Selected!");
}
include '../../../../koneksi/koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM soal_ra WHERE id='$id'");
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
            <h2>HASIL TEST IST <br> RA </h2>
            <p>ID TEST: <?php echo $id ?></i> </p> <br><br>
            <table border="1" cellpadding="7">
                <tr>
                    <td colspan="18"><strong>Nama :</strong> <?php echo $data['nama_user']; ?></td>
                </tr>
                <tr>
                    <td size="90"><strong>1.</strong></td>
                    <td>&nbsp;&nbsp;<strong><?php echo $data['soal1']; ?></strong></td>
                    <td size="90"><strong>6.</strong></td>
                    <td>&nbsp;&nbsp;<strong><?php echo $data['soal6']; ?></strong></td>
                    <td size="90"><strong>11.</strong></td>
                    <td>&nbsp;&nbsp;<strong><?php echo $data['soal11']; ?></strong></td>
                    <td size="90"><strong>16.</strong></td>
                    <td>&nbsp;&nbsp;<strong><?php echo $data['soal16']; ?></strong></td>
                </tr>
                <tr>
                    <td size="90"><strong>2.</strong></td>
                    <td>&nbsp;&nbsp;<strong><?php echo $data['soal2']; ?></strong></td>
                    <td size="90"><strong>7.</strong></td>
                    <td>&nbsp;&nbsp;<strong><?php echo $data['soal7']; ?></strong></td>
                    <td size="90"><strong>12.</strong></td>
                    <td>&nbsp;&nbsp;<strong><?php echo $data['soal12']; ?></strong></td>
                    <td size="90"><strong>17.</strong></td>
                    <td>&nbsp;&nbsp;<strong><?php echo $data['soal17']; ?></strong></td>
                </tr>
                <tr>
                    <td><strong>3.</strong></td>
                    <td>&nbsp;&nbsp;<strong><?php echo $data['soal3']; ?></strong></td>
                    <td size="90"><strong>8.</strong></td>
                    <td>&nbsp;&nbsp;<strong><?php echo $data['soal8']; ?></strong></td>
                    <td size="90"><strong>13.</strong></td>
                    <td>&nbsp;&nbsp;<strong><?php echo $data['soal13']; ?></strong></td>
                    <td size="90"><strong>18.</strong></td>
                    <td>&nbsp;&nbsp;<strong><?php echo $data['soal18']; ?></strong></td>
                </tr>
                <tr>
                    <td><strong>4.</strong></td>
                    <td>&nbsp;&nbsp;<strong><?php echo $data['soal4']; ?></strong></td>
                    <td size="90"><strong>9.</strong></td>
                    <td>&nbsp;&nbsp;<strong><?php echo $data['soal9']; ?></strong></td>
                    <td size="90"><strong>14.</strong></td>
                    <td>&nbsp;&nbsp;<strong><?php echo $data['soal14']; ?></strong></td>
                    <td size="90"><strong>19.</strong></td>
                    <td>&nbsp;&nbsp;<strong><?php echo $data['soal19']; ?></strong></td>
                </tr>
                <tr>
                    <td><strong>5.</strong></td>
                    <td>&nbsp;&nbsp;<strong><?php echo $data['soal5']; ?></strong></td>
                    <td size="90"><strong>10.</strong></td>
                    <td>&nbsp;&nbsp;<strong><?php echo $data['soal10']; ?></strong></td>
                    <td size="90"><strong>15.</strong></td>
                    <td>&nbsp;&nbsp;<strong><?php echo $data['soal15']; ?></strong></td>
                    <td size="90"><strong>20.</strong></td>
                    <td>&nbsp;&nbsp;<strong><?php echo $data['soal20']; ?></strong></td>
                </tr>
            </table>
        </center>
    </body>
</body>

</html>