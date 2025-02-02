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
    <title>Panduan RA</title>
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
            <br>
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h5><span style="color:blueviolet;">PETUNJUK DAN CONTOH</span><br>
                        <span style="color: orange;"> UNTUK KELOMPOK SOAL 05 </span>
                    </h5>
                    <p class="lead"><b>(Soal-Soal No.77-96) </b></p>
                </div>
            </div><!-- end title -->
            <!-- text  -->
            <div class="text text-center">
                <p>PETUNJUK PENGERJAAN SOAL</p>
                <p style="text-align: justify;">
                    Persoalan berikutnya ialah soal-soal hitungan. <br>
                    <b>
                        Contoh 05<br>
                    </b>
                    Sebatang pensil harganya 25 rupiah. Berapakah harga 3 batang ?<br>
                    <br>
                    Jawabannya ialah : 75
                    <br>
                    Perhatikanlah cara menjawab !<br>
                    <br>
                    Pada lembar jawaban lihatlah pada kolom 05.
                    Kolom ini terdiri atas angka-angka 1 sampai 9 dan 0
                    Untuk menunjukkan jawaban suatu soal, maka tulislah angka-angka yang terdapat di dalam jawaban itu.
                    Keurutan angka jawaban tidak perlu dihiraukan.
                    <br>
                    Pada contoh 05 jawaban ialah 75.
                    Oleh karena itu, pada jawaban di belakang contoh 05, angka 7 dan 5 harus ditulis.
                    <br>
                    05) &nbsp; 1&nbsp; 2&nbsp; 3&nbsp; 4 &nbsp;5 &nbsp;6 &nbsp;7&nbsp; 8&nbsp; 9 &nbsp;0 <br>
                    <b> Contoh lain :</b>
                    <br>
                    Dengan sepeda Husin dapat mencapai 15 km dalam waktu 1 jam. Berapa km-kah yang dapat ia capai dalam
                    waktu 4 jam ?<br>

                    Jawabannya ialah : 60<br>
                    Maka untuk menunjukkan jawaban itu angka 6 dan 0 yang seharusnya ditulis.<br>

                </p>
            </div>
            <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="col-md-12 text-center">
                    <small class="readmore">
                        <h6>Jika Sudah Mengerti Tata cara mengerjakan Silahkan Mulai Mengerjakan
                        </h6>
                        <center><button style="height: 50px; width:100px; border-radius:10px;"><a href="../soalist/soalRA.php">MULAI KERJAKAN</a></button></center>
                    </small>
                </div>
                <br><br </div><!-- end icon-wrapper -->
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