<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="../panduan/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../panduan/css/index.css">
    <link rel="stylesheet" href="../panduan/css/css.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Vendor CSS Files -->
    <link href="../panduan/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../panduan/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../panduan/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <!-- session -->
    <?php
    session_start();

    if (!isset($_SESSION["username_user_k"])) {
        echo "Anda harus login dulu <br><a href='../../login/index.php'>Klik disini</a>";
        exit;
    }

    $id_user_k = $_SESSION["id_user_k"];
    $username_k = $_SESSION["username_user_k"];
    $nama_user_k = $_SESSION["nama_user_k"];
    $id_kelompok=$_SESSION["id_kelompok"];
    $id_kd_ist = $_SESSION["id_kd_ist"];
    $id_kd_msdt = $_SESSION["id_kd_msdt"];
    $nama_kd_papi = $_SESSION["id_kd_papi"];



    ?>
    <!-- end session -->
    <div id="overviews" class="section">
        <div class="container">
            <img src="../images/logo.png" alt="" srcset="" width="40px"><br>
            <br>
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h5><span style="color:blueviolet;">PETUNJUK DAN CONTOH</span><br>
                        <span style="color: orange;">UNTUK KELOMPOK SOAL 04 </span>
                    </h5>
                    <p class="lead"><b>(Soal-Soal No.61-76) </b></p>
                </div>
            </div><!-- end title -->

            <!-- text  -->
            <div class="text text-center">
                <p>PETUNJUK PENGERJAAN SOAL</p>
                <p style="text-align: justify;">
                    Ditentukan dua kata.
                    Carilah satu perkataan yang meliputi pengertian kedua kata tadi.
                    Tulislah perkataan itu pada lembar jawaban di belakang nomor soal yang sesuai.
                    <br>
                    <b> Contoh 04</b>
                    <br>
                    Ayam - itik<br>

                    Perkataan “burung” dapat meliputi pengertian kedua kata itu.
                    Maka jawabannya ialah “burung”.<br>
                    Oleh karena itu, pada lembar jawaban di belakang contoh 04, harus ditulis “burung”<br>

                    04) Burung<br><br>

                    <b> Contoh berikutnya : </b><br>

                    Gaun - celana
                    <br>
                    Pada contoh ini jawabannya ialah “pakaian”, maka “pakaian” yang seharusnya ditulis.
                    Carilah selalu perkataan yang tepat yang dapat meliputi pengertian kedua kata itu.

                </p>
            </div>
            <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="col-md-12 text-center">
                    </h3><small class="readmore">
                        <h6>Jika <?php echo $_SESSION['nama_user_k']; ?> Sudah Mengerti Tata cara mengerjakan Silahkan Mulai Mengerjakan
                        </h6><br>
                        <center><button style="height: 50px; width:100px; border-radius:10px;"><a href="../soalist/soalGE.php">MULAI KERJAKAN</a></button></center>
                    </small>
                </div>
                <br>
            </div><!-- end icon-wrapper -->
        </div><!-- end container -->
    </div><!-- end section -->
    <footer class="bg-dark fixed-bottom">
        <div class="footer text-light text-center" style="height: 25px; ">&copy; HiProg</div>
    </footer>
    <!-- end content -->

    <!-- javascript  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../soal/assets/js/soal.js"></script>
</body>

</html>