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
    <title>Panduan ZR</title>
</head>

<body>

<!-- session -->
<?php
    session_start();

    if (!isset($_SESSION["username_user"])) {
        echo "Anda harus login dulu <br><a href='../login/index.php'>Klik disini</a>";
        exit;
    }

    $id_user = $_SESSION["id_user"];
    $username = $_SESSION["username_user"];
    $nama = $_SESSION["nama_user"];

    $id_kd_ist = $_SESSION["id_kd_ist"];
    $id_kd_msdt = $_SESSION["id_kd_msdt"];
    $nama_kd_papi = $_SESSION["id_kd_papi"];



    ?>
    <!-- end session -->
    <div id="overviews" class="section">
        <div class="container">
            <img src="../images/logo.png" alt="" srcset="" width="40px"><br>
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h5><span style="color:blueviolet;">PETUNJUK DAN CONTOH</span><br>
                        <span style="color: orange;">UNTUK KELOMPOK SOAL 06 </span>
                    </h5>
                    <p class="lead"><b>(Soal-Soal No.97-116) </b></p>
                </div>
            </div><!-- end title -->

            <!-- text  -->
            <div class="text text-center">
                <p>PETUNJUK PENGERJAAN SOAL</p>
                <p style="text-align: justify;">
                    Pada persoalan berikut akan diberikan deret angka.
                    Setiap deret tersusun menurut suatu aturan yang tertentu dan dapat dilanjutkan menurut aturan itu.
                    Carilah untuk setiap deret, angka berikutnya dan coretlah jawaban saudara pada lembar jawaban dibelakang
                    nomor soal yang sesuai.<br><br>

                    <b>Contoh 06</b> <br>

                    2 4 6 8 10 12 14 ?<br>

                    Pada deret ini angka berikutnya selalu didapat jika angka didepannya ditambah dengan 2.
                    Maka jawabannya ialah 16.<br>
                    Oleh karena itu, pada jawaban dibelakang contoh 06, angka 1 dan 6 harus ditulis<br>
                    <br>
                    06) 1 2 3 4 5 6 7 8 9 0
                    <br><b>
                        Contoh berikutnya :</b><br>
                    <br>
                    9 7 10 8 11 9 12 ?<br>
                    <br>
                    Pada deret ini selalu berganti-ganti harus dikurangi dengan 2 dan setelah itu ditambah dengan 3.
                    Jawaban contoh ini ialah : 10, maka dari itu angka 1 dan 0 seharusnya yang ditulis.<br>

                    Kadang-kadang pada beberapa soal harus pula dikalikan atau dibagi.<br>
                </p>
            </div>
            <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="col-md-12 text-center">
                    </h3><small class="readmore">
                        <h6>Jika <?php echo $_SESSION['nama_user']; ?> Sudah Mengerti Tata cara mengerjakan Silahkan Mulai Mengerjakan
                        </h6>
                        <center><button style="height: 50px; width:100px; border-radius:10px;"><a href="../soalist/soalZR.php">MULAI KERJAKAN</a></button></center>
                    </small>
                </div>
                <br><br>
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