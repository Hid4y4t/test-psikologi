<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="../assets/css/css.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/index.css">
    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <title>Soal IST</title>
</head>

<body>
 <!-- session -->
 <?php
    session_start();

    if (!isset($_SESSION["username_user_k"])) {
        echo "Anda harus login dulu <br><a href='../login/index.php'>Klik disini</a>";
        exit;
    }

    $id_user_k = $_SESSION["id_user_k"];
    $username_user_k = $_SESSION["username_user_k"];
    $nama_user_k = $_SESSION["nama_user_k"];
    $id_kelompok = $_SESSION["id_kelompok"];
    $id_kd_ist = $_SESSION["id_kd_ist"];
    $id_kd_msdt = $_SESSION["id_kd_msdt"];
    $nama_kd_papi = $_SESSION["id_kd_papi"];

    ?>
    <!-- end session -->
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
                    <div class="content">
                        <h4>Hai <b> <?php echo $_SESSION['nama_user_k']; ?></b> Silahkan Baca Petunjuk Pengerjaan Soal ! </h4>
                        <h3></h3>
                        <p style="color: white; text-align:justify;">
                            Tes ini terdiri dari 9 kelompok soal 01, 02, 03 s/d 09. "masing-masing kemlompok soal berdiri sendiri-sendiri, artinya anda akan mengerjakan kelompok semi kelompok". "Setiap kelompok soal memiliki instruksi, cara menjawab dan waktu yang berbeda-beda",
                            "Apabila anda telah selesai mengerjakan kelompok soal 02. anda tidak diperkenankan memeriksa atau mengerjakan kembali kelompok soal sebelumnya (01), atau mengerjakan kelompok soal setelahnya (03), meskipun waktu masih tersisa". "Sebelum anda mulai mengerjakan,
                            tiap kelompok soal akan didahului dengan penjelasan."
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 my-2 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>01.TEST SE</h4>
                                    <p>Ingat ! Baca Petunjuk dan Contoh Soal Terlebih Dahulu </p>
                                    <div class="se"><button style="border-radius:10px;"><a href="../soalIST/panduan/panduanSE.php">Baca Petunjuk Soal</a></button></div>
                                </div>
                            </div>
                            <div class="col-xl-4 my-2 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                                <div class="icon-box mt-4 mt-xl-0 ">
                                    <i class="bx bx-receipt"></i>
                                    <h4>02.TEST WA</h4>
                                    <p>Ingat ! Baca Petunjuk dan Contoh Soal Terlebih Dahulu </p>
                                    <div class="se"><button style="border-radius:10px;"><a href="../soalIST/panduan/panduanWA.php">Baca Petunjuk Soal</a></button></div>
                                </div>
                            </div>
                            <div class="col-xl-4 my-2 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>03.TEST AN</h4>
                                    <p>Ingat ! Baca Petunjuk dan Contoh Soal Terlebih Dahulu </p>
                                    <div class="se"><button style="border-radius:10px;"><a href="../soalIST/panduan/panduanAN.php">Baca Petunjuk Soal</a></button></div>
                                </div>
                            </div>


                            <div class="col-xl-4 my-2 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>04.TEST GE</h4>
                                    <p>Ingat ! Baca Petunjuk dan Contoh Soal Terlebih Dahulu </p>
                                    <div class="se"><button style="border-radius:10px;"><a href="../soalIST/panduan/panduanGE.php">Baca Petunjuk Soal</a></button></div>
                                </div>
                            </div>
                            <div class="col-xl-4 my-2 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>05.TEST RA</h4>
                                    <p>Ingat ! Baca Petunjuk dan Contoh Soal Terlebih Dahulu </p>
                                    <div class="se"><button style="border-radius:10px;"><a href="../soalIST/panduan/panduanRA.php">Baca Petunjuk Soal</a></button></div>
                                </div>
                            </div>
                            <div class="col-xl-4 my-2 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>06.TEST ZR</h4>
                                    <p>Ingat ! Baca Petunjuk dan Contoh Soal Terlebih Dahulu </p>
                                    <div class="se"><button style="border-radius:10px;"><a href="../soalIST/panduan/panduanZR.php">Baca Petunjuk Soal</a></button></div>
                                </div>
                            </div>


                            <div class="col-xl-4 my-2 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>07.TEST FA</h4>
                                    <p>Ingat ! Baca Petunjuk dan Contoh Soal Terlebih Dahulu </p>
                                    <div class="se"><button style="border-radius:10px;"><a href="../soalIST/panduan/panduanFA.php">Baca Petunjuk Soal</a></button></div>
                                </div>
                            </div>
                            <div class="col-xl-4 my-2 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>08.TEST WU</h4>
                                    <p>Ingat ! Baca Petunjuk dan Contoh Soal Terlebih Dahulu </p>
                                    <div class="se"><button style="border-radius:10px;"><a href="../soalIST/panduan/panduanWU.php">Baca Petunjuk Soal</a></button></div>
                                </div>
                            </div>
                            <div class="col-xl-4 my-2 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>09.TEST ME</h4>
                                    <p>Ingat ! Baca Petunjuk dan Contoh Soal Terlebih Dahulu </p>
                                    <div class="se"><button style="border-radius:10px;"><a href="../soalIST/panduan/panduanME.php">Baca Petunjuk Soal</a></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .content-->
                </div>
            </div>

        </div>
    </section>
    <!-- End Why Us Section -->
    <!-- javascript  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../soal/assets/js/soal.js"></script>
</body>

</html>