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
    <title>Panduan SE</title>
</head>

<body>
      <!-- session -->
  <?php
session_start();

if (!isset($_SESSION["username_user"])) {
	echo "Anda harus login dulu <br><a href='../login/index.php'>Klik disini</a>";
	exit;
}

$id_user=$_SESSION["id_user"];
$username=$_SESSION["username_user"];
$nama=$_SESSION["nama_user"];

$id_kd_ist = $_SESSION["id_kd_ist"] ;
$id_kd_msdt=$_SESSION["id_kd_msdt"];
$nama_kd_papi=$_SESSION["id_kd_papi"] ;



?>
<!-- end session -->
    <div id="overviews" class="section">
        <div class="container">
            
            <br>
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                <img src="../images/logo.png" alt="" srcset="" width="70px"><br>
                    <h5><span style="color:blueviolet;">PETUNJUK DAN CONTOH</span><br>
                        <span style="color: orange;">UNTUK KELOMPOK SOAL 01 </span>
                    </h5>
                    <p class="lead"><b>(Soal-Soal No.01-20) </b></p>

                </div>
            </div><!-- end title -->

            <!-- text  -->
            <div class="text text-center">
                <p>PETUNJUK PENGERJAAN SOAL</p>
                <p style="text-align: justify;">
                    Soal-soal 01-20 terdiri atas kalimat-kalimat. <br>
                    Pada setiap kalimat satu kata hilang dan disediakan 5 (lima) kata pilihan sebagai penggantinya. <br>
                    Pilihlah kata yang tepat yang dapat menyempurnakan kalimat itu ! <br>
                    <br>
                    <b> Contoh 1</b> <br>
                    Seekor kuda mempunyai kesamaan terbanyak dengan seekor .......... <br>
                    a) kucing &nbsp;&nbsp; <br> b) bajing &nbsp;&nbsp; <br> c) keledai&nbsp;&nbsp; <br> d) lembu&nbsp;&nbsp; <br> e) anjing <br>
                    Jawaban yang benar ialah : c) keledai <br>
                    Oleh karena itu, pada jawaban dibelakang contoh <B>Jawab</B> huruf c harus di pilih pada kolom jawaban.
                    <br>

                    <br>
                    <b> Contoh berikutnya :</b> <br>
                    Lawannya “harapan” ialah .......... <br>
                    a) duka&nbsp;&nbsp; <br> b) putus asa&nbsp;&nbsp; <br> c) sengsara&nbsp;&nbsp; <br> d) cinta&nbsp;&nbsp; <br> e) benci <br>
                    Jawabannya ialah : b) putus asa <br>
                    Maka huruf b yang seharusnya dipilih pada jawaban
                    <br><br>
                </p>
            </div>
            <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="col-md-12 text-center">
                    <small class="readmore">
                        <h5>Jika <?php echo $_SESSION['nama_user']; ?> Sudah Mengerti Tata cara mengerjakan Silahkan Mulai Mengerjakan
                        </h5><br>
                        <center><button style="height: 50px; width:100px; border-radius:10px;"><a href="../soalist/soalSE.php">MULAI KERJAKAN</a></button></center>
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