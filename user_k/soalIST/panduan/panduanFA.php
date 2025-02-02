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
    <title>Panduan FA</title>
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
                        <span style="color: orange;"> UNTUK KELOMPOK SOAL 07 </span>
                    </h5>
                    <p class="lead"><b>(Soal-Soal No.117-137) </b></p>
                </div>
            </div><!-- end title -->

            <!-- text  -->
            <div class="text text-center">
                <p>PETUNJUK PENGERJAAN SOAL</p>
                <p style="text-align: justify;">
                    Pada persoalan berikutnya, setiap soal memperlihatkan sesuatu bentuk tertentu yang terpotong menjadi
                    beberapa bagian.<br>
                    Carilah diantara bentuk-bentuk yang ditentukan (a,b,c,d,e), bentuk yang dapat dibangun dengan cara
                    menyusun
                    potongan-potongan itu sedemikian rupa, sehingga tidak ada kelebihan sudut atau ruang diantaranya.
                    Carilah bentuk-bentuk itu dan coretlah huruf yang menunjukkan bentuk tadi pada lembar jawaban dibelakang
                    nomor soal yang sesuai.<br>

                    <img src="../images/PILIHAN.JPG" style=" width: 200px; height: 80px; "> <br><br>
                    <img src="../images/SOAL.JPG" style=" width: 300px; height: 100px; "> <br>
                    Jika potongan-potongan pada contoh 07 di atas disusun (digabungkan), maka akan menghasilkan bentuk a.
                    Oleh karena itu, pada lembar jawaban di belakang contoh 07, huruf a harus di pilih.<br>
                    07) a b c d e
                    <br><br>
                    Contoh berikutnya :
                    <br>
                    Potongan-potongan contoh kedua setelah disusun (digabungkan) menghasilkan bentuk e.

                    Contoh ketiga menjadi bentuk b.
                    <br>
                    Contoh keempat ialah bentuk d.
                </p>
            </div>
            <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="col-md-12 text-center">
                    <small class="readmore">
                        <h6>Jika <?php echo $_SESSION['nama_user_k']; ?> Sudah Mengerti Tata cara mengerjakan Silahkan Mulai Mengerjakan
                        </h6>
                        <center><button style="height: 50px; width:100px; border-radius:10px;"><a href="../soalist/soalFA.php">MULAI KERJAKAN</a></button></center>
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