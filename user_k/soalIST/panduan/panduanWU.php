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
    <title>Panduan WU</title>
</head>

<body>
      <!-- session -->
      <?php
session_start();

if (!isset($_SESSION["username_user_k"])) {
	echo "Anda harus login dulu <br><a href='../../login/index.php'>Klik disini</a>";
	exit;
}

$id_user_k=$_SESSION["id_user_k"];
$username_k=$_SESSION["username_user_k"];
$nama_user_k=$_SESSION["nama_user_k"];
$id_kelompok=$_SESSION["id_kelompok"];
$id_kd_ist = $_SESSION["id_kd_ist"] ;
$id_kd_msdt=$_SESSION["id_kd_msdt"];
$nama_kd_papi=$_SESSION["id_kd_papi"] ;



?>
    <!-- end session -->
    <div id="overviews" class="section">
        <div class="container">
            <img src="../images/logo.png" alt="" srcset="" width="40px"><br>
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h5><span style="color:blueviolet;">PETUNJUK DAN CONTOH</span><br>
                        <span style="color: orange;">UNTUK KELOMPOK SOAL 07 </span>
                    </h5>
                    <p class="lead"><b>(Soal-Soal No.137-156) </b></p>
                </div>
            </div><!-- end title -->

            <!-- text  -->
            <div class="text text-center">
                <p>PETUNJUK PENGERJAAN SOAL</p>
                <p style="text-align: justify;">
                    Ditentukan 5 (lima) buah kubus a, b, c, d, e. Pada tiap-tiap kubus terdapat enam tanda yang berlainan pada

                    setiap sisinya. Tiga dari tanda itu dapat dilihat.
                    Kubus-kubus yang ditentukan itu (a, b, c, d, e) ialah kubus-kubus yang berbeda, artinya kubus-kubus itu <br>
                    dapat mempunyai tanda-tanda yang sama, akan tetapi susunannya berlainan. Setiap soal memperlihatkan salah

                    satu kubus yang ditentukan di dalam kedudukan yang berbeda.<br>
                    Carilah kubus yang dimaksudkan itu dan coretkanlah jawaban saudara pada lembar jawaban di belakang nomor

                    soal yang sesuai.
                    Kubus itu dapat diputar, dapat digulingkan atau dapat diputar dan digulingkan dalam pikiran saudara.
                    Oleh karena itu mungkin akan terlihat suatu tanda yang baru. <br>
                </p>

                <img src="../images/foto.JPG" style=" width: 300px; height: 100px; "> <br>
                <b> Contoh 08</b>
                <p style="text-align: justify; color:black;">Contoh ini memperlihatkan kubus a dengan kedudukan yang berbeda.
                    Mendapatkannya adalah dengan cara menggulingkan lebih dahulu kubus itu ke kiri satu kali dan kemudian
                    diputar ke kiri satu kali, sehingga sisi kubus yang bertanda dua segi empat hitam terletak di depan, seperti
                    kubus a.
                    Oleh karena itu, pada lembar jawaban di belakang contoh 08 huruf a harus dipilih. <br>
                    08) a b c d e <br><br>

                    <b> Contoh berikutnya :</b> <br>

                    Contoh kedua adalah kubus e. <br>
                    Cara mendapatkannya adalah dengan digulingkan ke kiri satu kali dan diputar ke kiri satu kali, sehingga sisi

                    kubus yang bertanda garis silang terletak di depan, seperti kubus e. <br>

                    <b> Contoh ketiga adalah kubus b. </b><br>
                    Cara mendapatkannya adalah dengan menggulingkannya ke kiri satu kali, sehingga dasar kubus yang tadinya
                    tidak terlihat memunculkan tanda baru (dalam hal ini adalah tanda dua segi empat hitam) dan tanda silang
                    pada sisi atas kubus itu menjadi tidak terlihat lagi.
                    Contoh keempat menunjukkan kubus c.
                    <br>
                    <b>Contoh kelima adalah kubus d.</b>
                </p>
            </div>
            <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="col-md-12 text-center">
                    <small class="readmore">
                        <h6>Jika  Sudah Mengerti Tata cara mengerjakan Silahkan Mulai Mengerjakan
                        </h6>
                        <center><button style="height: 50px; width:100px; border-radius:10px;"><a href="../soalist/soalWU.php">MULAI KERJAKAN</a></button></center>
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