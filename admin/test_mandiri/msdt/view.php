<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die("Error. No ID Selected!");
}
include '../../../koneksi/koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM test_msdt WHERE id='$id'");
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
            <h2>HASIL TEST MSDT </h2>
            <p><i>Management Style Diagnostic Test <br>ID: <?php echo $id ?></i> </p> <br><br>
            <table border="1" cellpadding="7">


                <tr>
                    <td colspan="18">Nama : <?php echo $data['nama_user']; ?></td>

                </tr>

                <tr>
                    <td size="90">1.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal1']; ?></td>
                    <td size="90">11.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal11']; ?></td>
                    <td size="90">21.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal21']; ?></td>
                    <td size="90">31.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal31']; ?></td>
                    <td size="90">41.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal41']; ?></td>
                    <td size="90">51.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal51']; ?></td>
                    <td size="90">61.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal61']; ?></td>


                </tr>

                <tr>
                    <td size="90">2.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal2']; ?></td>
                    <td size="90">12.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal12']; ?></td>
                    <td size="90">21.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal22']; ?></td>
                    <td size="90">32.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal32']; ?></td>
                    <td size="90">42.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal42']; ?></td>
                    <td size="90">52.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal52']; ?></td>
                    <td size="90">62.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal62']; ?></td>


                </tr>

                <tr>
                    <td>3.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal3'] ?></td>
                    <td size="90">13.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal13']; ?></td>
                    <td size="90">23.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal23']; ?></td>
                    <td size="90">33.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal33']; ?></td>
                    <td size="90">43.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal43']; ?></td>
                    <td size="90">53.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal53']; ?></td>
                    <td size="90">63.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal63']; ?></td>


                </tr>
                <tr>
                    <td> 4.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal4'] ?></td>
                    <td size="90">14.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal14']; ?></td>
                    <td size="90">24.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal24']; ?></td>
                    <td size="90">34.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal34']; ?></td>
                    <td size="90">44.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal44']; ?></td>
                    <td size="90">54.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal54']; ?></td>
                    <td size="90">64.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal64']; ?></td>


                </tr>
                <tr>
                    <td>5.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal5'] ?></td>
                    <td size="90">15.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal15']; ?></td>
                    <td size="90">25.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal25']; ?></td>
                    <td size="90">35.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal35']; ?></td>
                    <td size="90">45.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal45']; ?></td>
                    <td size="90">55.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal55']; ?></td>

                </tr>
                <tr>
                    <td>6.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal6'] ?></td>
                    <td size="90">16.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal16']; ?></td>
                    <td size="90">26.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal26']; ?></td>
                    <td size="90">36.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal36']; ?></td>
                    <td size="90">46.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal46']; ?></td>
                    <td size="90">56.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal56']; ?></td>

                </tr>
                <tr>
                    <td> 7.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal7'] ?></td>
                    <td size="90">17.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal17']; ?></td>
                    <td size="90">27.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal27']; ?></td>
                    <td size="90">37.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal37']; ?></td>
                    <td size="90">47.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal47']; ?></td>
                    <td size="90">57.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal57']; ?></td>

                </tr>
                <tr>
                    <td>8.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal8'] ?></td>
                    <td size="90">18.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal18']; ?></td>
                    <td size="90">28.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal28']; ?></td>
                    <td size="90">38.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal38']; ?></td>
                    <td size="90">48.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal48']; ?></td>
                    <td size="90">58.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal58']; ?></td>

                </tr>
                <tr>
                    <td> 9.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal9'] ?></td>
                    <td size="90">19.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal19']; ?></td>
                    <td size="90">29.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal29']; ?></td>
                    <td size="90">39.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal39']; ?></td>
                    <td size="90">49.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal49']; ?></td>
                    <td size="90">59.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal59']; ?></td>

                </tr>
                <tr>
                    <td>10.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal10'] ?></td>
                    <td size="90">20.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal20']; ?></td>
                    <td size="90">30.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal30']; ?></td>
                    <td size="90">40.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal40']; ?></td>
                    <td size="90">50.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal50']; ?></td>
                    <td size="90">60.</td>
                    <td>&nbsp;&nbsp;<?php echo $data['soal60']; ?></td>

                </tr>

            </table>
        </center>
    </body>
</body>

</html>