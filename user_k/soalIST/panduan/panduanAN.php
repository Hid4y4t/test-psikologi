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
    <title>Panduan AN</title>
</head>

<body>
      <!-- session -->
  <?php
session_start();

if (!isset($_SESSION["username_user_k"])) {
	echo "Anda harus login dulu <br><a href='....//login/index.php'>Klik disini</a>";
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
                        <span style="color: orange;">UNTUK KELOMPOK SOAL 03 </span>
                    </h5>
                    <p class="lead"><b>(Soal-Soal No.41-60) </b></p>
                </div>
            </div><!-- end title -->

            <!-- text  -->
            <div class="text text-center">
                <p>PETUNJUK PENGERJAAN SOAL</p>
                <p style="text-align: justify;">
                    Ditentukan 3 (tiga) kata.
                    Antara kata pertama dan kata kedua terdapat suatu hubungan yang tertentu.
                    Antara kata ketiga dan salah satu diantara lima kata pilihan harus pula terdapat hubungan yang sama itu.
                    Carilah kata itu.<br><br>
                    <b> Contoh 03 </b><br>
                    Hutan : pohon = tembok : ?<br>
                    a) batu bata&nbsp; <br> b) rumah&nbsp; <br> c) semen &nbsp; <br> d) putih&nbsp; <br> e) dinding<br>
                    Hubungan antara hutan dan pohon ialah bahwa hutan terdiri atas pohon-pohon, maka hubungan antara tembok dan
                    salah satu kata pilihan ialah bahwa tembok terdiri atas batu-batu bata.
                    Oleh karena itu, pada lembar jawaban dibelakang contoh 03, huruf a harus dipilih.<br>
                    03)&nbsp; a &nbsp;b&nbsp; c&nbsp; d&nbsp; e<br><br>
                    <b> Contoh berikutnya :</b><br>
                    Gelap : terang = basah : ?<br>
                    a) Hujan &nbsp; <br> b) hari &nbsp; <br> c) lembab &nbsp; <br> d) angin &nbsp; <br> e) kering<br>
                    Gelap ialah lawannya dari terang, maka untuk basah lawannya ialah kering.
                    Maka jawaban yang benar ialah : e) kering<br>
                    Oleh karena itu huruf e yang seharusnya dipilih.<br>
                </p>
            </div>
            <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="col-md-12 text-center">
                    <small class="readmore">
                        <h6>Jika <?php echo $_SESSION['nama_user_k']; ?> Sudah Mengerti Tata cara mengerjakan Silahkan Mulai Mengerjakan
                        </h6>
                        <center><button style="height: 50px; width:100px; border-radius:10px;"><a href="../soalist/soalAN.php">MULAI KERJAKAN</a></button></center>
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