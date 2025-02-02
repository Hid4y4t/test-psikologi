<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="../soal/assets/css/style.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../soal/assets/css/css.css">
    <link rel="stylesheet" href="../soalIST/css/style.css">
    <link rel="stylesheet" href="../soalIST/panduan/css/index.css">
    <title>Soal MSDT</title>

    <style>
        .soal label {
            text-align: justify;
        }

        .container form .section {
            width: 60%;
            margin-left: 15%;

        }

        @media screen and (max-width: 1000px) {
            .container form .section {
                width: 100%;
                margin-left: 0;

            }
        }

        @media screen and (max-width: 840px) {
            .container form .section {
                width: 100%;
                margin-left: 0;

            }
        }
    </style>
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
    $username_user = $_SESSION["username_user"];
    $nama_user = $_SESSION["nama_user"];

    $id_kd_ist = $_SESSION["id_kd_ist"];
    $id_kd_msdt = $_SESSION["id_kd_msdt"];
    $id_kd_papi = $_SESSION["id_kd_papi"];



    ?>
    <!-- end session -->
    <!-- ======= Resume Section ======= -->
    <div class="container ">
        <form method="post" action="proses_msdt.php">
            <center>
                <img src="../assets/img/logo.png" alt="" srcset="" width="80px">
                <h3>SELAMAT MENGERJAKAN</h3>
                <h5>Kelompok Soal MSDT <br> nomer 1-64</h5>
            </center>
            <hr>
            <div class="nama">


                <p><b>Nama : </b><select name='nama_user' id='nama_user' style="appearance: none; -webkit-appearance: none;">
                        <option value='<?php echo $_SESSION['nama_user']; ?>'> <?php echo $nama_user; ?> </option>

                    </select></p>

            </div><br>


            <form class="subsoal col-md-6">
                <fieldset class="section is-active">


                    <div class="soal">




                        <h6>
                            <B>NO 1.</B><br>
                            <input type="radio" name="soal1"  value="A" id="rb1" />
                            <label for="rb1">A. Saya tidak akan menegur pelanggar - pelanggar peraturan bila saya merasa
                                pasti bahwa tidak ada satu orangpun yang mengetahui tentang pelanggar - pelanggar tersebut.</label>

                            <!-- =================== -->
                            <input type="radio" name="soal1" value="B" id="rb2" />
                            <label for="rb2">B. Bila saya mengumumkan suatu keputusan yang kurang
                                menyenangkan, saya akan menjelaskan kepada bawahan saya bahwa keputusan ini dibuat oleh
                                direktur.</label>
                        </h6>
                    </div>

                    <div class="soal">
                        <h6>
                            <B>NO 2.</B><br>
                            <!-- =================== -->
                            <input type="radio" name="soal2" value="A" id="rb3" />
                            <label for="rb3">A. Bila ada seorang karyawan yang hasil kerjanya selalu tidak memuaskan saya,
                                saya akan menunggu suatu kesempatan untuk memindahkannya dan bukan untuk memecatnya</label>
                            <!-- =================== -->
                            <input type="radio" name="soal2" value="B" id="rb4" />
                            <label for="rb4"><b>B.</b> Bila ada bawahan saya yang dikucilkan dari kelompok
                                kerjanya, saya akan mencari jalan agar orang lain dapat berteman dengannya
                                selesai</label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 3.</B>

                            <br>
                            <!-- =================== -->
                            <input type="radio"  name="soal3" value="A" id="rb5" />
                            <label for="rb5"> <b>A.</b> Bila direktur memberikan perintah yang kurang menyenangkan, saya pikir adalah cukup bijaksana bila saya menyebutkan namanya dan bukan nama saya.<br>
                            </label>
                            <input type="radio"  name="soal3" value="B" id="rb6" />
                            <label for="rb6"> <b>B.</b> Bila biasanya membuat keputusan - keputusan sendiri dan menyampaikannya kepada bawahan saya.
                            </label>

                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 4.</B>

                            <br>
                            <!-- ======================== -->
                            <input type="radio"  name="soal4" value="A" id="rb7" />
                            <label for="rb7"> <b>A.</b> 1. Bila saya ditegur oleh atasan saya, saya akan memanggil semua bawahan saya dan mengatakan semua teguran tersebut kepada mereka.<br>
                            </label>
                            <!-- ======================== -->
                            <input type="radio"  name="soal4" value="B" id="rb8" />
                            <label for="rb8"> <b>B.</b> Saya selalu memberikan tugas - tugas yang sangat sulit kepada karyawan - karyawan yang paling berpengalaman.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">
                        <h6>
                            <B>NO 5.</B>
                            <br>
                            <!-- ======================== -->
                            <input type="radio"  name="soal5" value="A" id="rb9" />
                            <label for="rb9"> <b>A.</b> Saya selalu melakukan diskusi - diskusi untuk mencapai kata sepakat.
                            </label>
                            <!-- ======================== -->
                            <input type="radio"  name="soal5" value="B" id="rb10" />
                            <label for="rb10"> <b>B.</b>Saya selalu menganjurkan kepada bawahan saya untuk memberikan usul - usul, tetapi kadang-kadang saya langsung mengambil tindakan tertentu.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 6.</B>

                            <br>
                            <input type="radio"  name="soal6" value="A" id="rb11" />
                            <label for="rb11"> <b>A.</b>Seringkali saya lebih mementingkan tugas daripada diri saya sendiri. <br>
                            </label>
                            <!-- =================== -->
                            <input type="radio"  name="soal6" value="B" id="rb12" />
                            <label for="rb12"> <b>B.</b>Saya mengijinkan bawahan - bawahan saya untuk ikut serta dalam mengambil keputusan.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 7.</B>
                            <br>

                            <!-- =================== -->
                            <input type="radio"  name="soal7" value="A" id="rb13" />
                            <label for="rb13"> <b>A.</b>Bila jumlah dan mutu hasil kerja bagian saya tidak memuaskan, saya mengatakan kepada bawahan - bawahan saya bahwa direktur merasa kecewa. Oleh karena itu mereka harus memperbaiki kerja mereka.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal7" value="B" id="rb14" />
                            <label for="rb14"> <b>B.</b> Saya membuat keputusan-keputusan sendiri dan kemudian saya mencoba untuk "menjual" keputusan - keputusan itu kepada bawahan saya.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 8.</B>
                            <br>
                            <!-- =================== -->
                            <input type="radio" name="soal8" value="A" id="rb15" />
                            <label for="rb15"> <b>A.</b> Bila saya mengumumkan suatu keputusan yang kurang menyenangkan, saya akan menjelaskan kepada bawahan saya bahwa keputusan ini dibuat oleh direktur.<br>
                            </label>
                            <input type="radio" name="soal8" value="B" id="rb16" />
                            <label for="rb16"> <b>B.</b> Saya mengijinkan bawahan - bawahan saya untuk ikut serta di dalam pengambilan keputusan, tetapi sayapun menyediakan sesuatu yang jitu sebagai keputusan terakhir.

                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 9.</B>
                            <br>
                            <!-- =================== -->
                            <input type="radio" name="soal8" value="A" id="rb17" />
                            <label for="rb17"> <b>A.</b> Saya akan memberikan tugas - tugas yang sulit kepada bawahan saya yang belum berpengalaman, tetapi bila mereka memperoleh kesukaran, saya akan mengambil alih tanggung jawab mereka.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal8" value="B" id="rb18" />
                            <label for="rb18"> <b>B.</b> Bila jumlah dan mutu hasil kerja bagian saya tidak memuaskan, saya menjelaskan kepada bawahan - bawahan saya bahwa direktur merasa kecewa. Oleh karena itu mereka harus memperbaiki mutu kerja mereka itu.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 10.</B>
                            <br>
                            <!-- =================== -->
                            <input type="radio" name="soal9" value="A" id="rb19" />
                            <label for="rb19"> <b>A.</b>Saya merasa bahwa dengan bekerja keras untuk bawahan saya, mereka akan menyukai saya.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal9" value="B" id="rb20" />
                            <label for="rb20"> <b>B.</b>Saya membiarkan orang lain menangani tugas mereka masing - masing, walaupun mereka membuat banyak kesalahan.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 11.</B>
                            <br>
                            <input type="radio" name="soal10" value="A" id="rb21" />
                            <label for="rb21"> <b>A.</b>Saya menunjukkan minat saya terhadap kehidupan pribadi bawahan - bawahan saya, karena sayapun mengharapkan mereka berbuat seperti itu kepada saya.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal10" value="B" id="rb22" />
                            <label for="rb22"> <b>B.</b>Saya merasa bahwa bawahan - bawahan saya tidak perlu mengerti mengapa mereka mengerjakan sesuatu hal, sejauh mereka mengerjakan hal tersebut.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 12.</B>
                            <br>
                            <!-- =================== -->
                            <input type="radio" name="soal11" value="A" id="rb23" />
                            <label for="rb23"> <b>A.</b> Saya percaya bahwa bawahan - bawahan yang tidak disiplin tidak akan memperbaiki jumlah atau mutu kerja mereka dalam jangka waktu yang panjang.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal11" value="B" id="rb24" />
                            <label for="rb24"> <b>B.</b> Bila menghadapi masalah yang sulit, saya berusaha untuk mencapai pemecahan yang dapat diterima oleh sebagian besar orang.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 13.</B>
                            <br>

                            <!-- =================== -->
                            <input type="radio" name="soal12" value="A" id="rb25" />
                            <label for="rb25"> <b>A.</b>Bila beberapa bawahan saya merasa tidak berbahagia, saya akan mencoba melakukan sesuatu untuk mengatasi hal tersebut.
                            </label>
                            <input type="radio" name="soal12" value="B" id="rb26" />
                            <label for="rb26"> <b>B.</b> Saya berusaha bekerja sebaik mungkin dan memberikan ide - ide pengembangan pada pimpinan.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 14.</B>
                            <br>
                            <!-- =================== -->
                            <input type="radio" name="soal13" value="A" id="rb27" />
                            <label for="rb27"> <b>A.</b> 1. Saya menyetujui kenaikan tunjangan - tunjangan untuk staf dan karyawan.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal13" value="B" id="rb28" />
                            <label for="rb28"> <b>B.</b> Saya mendukung bawahan saya yang ingin meningkatkan pengetahuan tentang pekerjaan dan perusahaan, walaupun hal itu sebenarnya belum diperlukan untuk kedudukan mereka sekarang.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 15.</B>

                            <br>

                            <!-- =================== -->
                            <input type="radio" name="soal14" value="A" id="rb29" />
                            <label for="rb29"> <b>A.</b> Saya membiarkan orang lain menangani tugas mereka masing - masing, walaupun mereka banyak membuat kesalahan.
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal14" value="B" id="rb30" />
                            <label for="rb30"> <b>B.</b>Saya membuat keputusan - keputusan sendiri, tetapi saya akan mempertimbangkan usul - usul dari bawahan - bawahan saya
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 16.</B>

                            <br>
                            <input type="radio" name="soal15" value="A" id="rb31" />
                            <label for="rb31"> <b>A.</b> 1. Bila ada bawahan saya yang dikucilkan dari kelompok kerjanya, saya akan mencari cara agar orang lain dapat berteman dengannya.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal15" value="B" id="rb32" />
                            <label for="rb32"> <b>B.</b> Bila seorang karyawan tidak sanggup menyelesaikan tugasnya, saya akan membantu dia untuk menyelesaikan tugas tersebut.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 17.</B>
                            <br>
                            <!-- =================== -->
                            <input type="radio" name="soal16" value="A" id="rb33" />
                            <label for="rb33"> <b>A.</b> Saya percaya bahwa penerapan disiplin merupakan contoh untuk karyawan-karyawan lain. <br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal16" value="B" id="rb34" />
                            <label for="rb34"> <b>B.</b> Saya merasa saya lebih mementingkan tugas daripada diri saya sendiri.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 18.</B><br>
                            <!-- =================== -->
                            <input type="radio" name="soal17" value="A" id="rb35" />
                            <label for="rb35"> <b>A.</b> Saya mencela pembicaraan - pembicaraan yang tidak perlu di antara bawahan - bawahan saya, selama mereka bekerja.<br>
                            </label>
                            <input type="radio" name="soal17" value="B" id="rb36" />
                            <label for="rb36"> <b>B.</b> Saya menyetujui kenaikan tunjangan - tunjangan untuk staf dan karyawan.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 19.</B>
                            <br>
                            <!-- =================== -->
                            <input type="radio" name="soal18" value="A" id="rb37" />
                            <label for="rb37"> <b>A.</b> KSaya selalu memperhatikan keterlambatan dan kemangkiran bawahan saya.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal18" value="B" id="rb38" />
                            <label for="rb38"> <b>B.</b>Saya percaya bahwa serikat - serikat buruh akan mencoba meruntuhkan kewibawaan pimpinan perusahaan.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 20.</B><br>
                            <!-- =================== -->
                            <input type="radio" name="soal19" value="A" id="rb39" />
                            <label for="rb39"> <b>A.</b> Kadang - kadang saya merasa bahwa apa yang dikeluhkan oleh serikat buruh bukanlah masalah yang mendasar.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal19" value="B" id="rb40" />
                            <label for="rb40"> <b>B.</b> S. Saya merasa bahwa keluhan-keluhan tidak dapat dicegah dan saya akan berusaha untuk menghilangkan keluhan tersebut. <br>
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 21.</B>
                            <br>

                            <input type="radio" name="soal20" value="A" id="rb43" />
                            <label for="rb43"> <b>A.</b> Adalah penting bagi saya untuk memperoleh penghargaan atas ide - ide saya yang baik.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal20" value="B" id="rb44" />
                            <label for="rb44"> <b>B.</b>Saya mengemukakan pendapat - pendapat saya dimuka umum hanya bila saya merasa bahwa orang lain akan setuju dengan saya.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 22.</B>

                            <br>
                            <input type="radio" name="soal21" value="A" id="rb45" />
                            <label for="rb45"> <b>A.</b> Saya percaya bahwa serikat - serikat buruh akan mencoba meruntuhkan kewibawaan pimpinan perusahaan.<br>
                            </label>
                            <br>
                            <input type="radio" name="soal21" value="B" id="rb46" />
                            <label for="rb46"> <b>B.</b>Saya percaya bahwa pertemuan - pertemuan yang sering dengan karyawan secara pribadi akan membantu pengembangan diri mereka
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 23.</B>

                            <br>
                            <input type="radio" name="soal22" value="A" id="rb47" />
                            <label for="rb47"> <b>A.</b> Saya merasa bawahan - bawahan saya tidak perlu mengerti mengapa mereka mengerjakan sesuatu hal sejauh mereka mengerjakan hal tersebut.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal22" value="B" id="rb48" />
                            <label for="rb48"> <b>B.</b>Saya merasa bahwa jam pencatat waktu datang dan pulangnya para pegawai akan mengurangi keterlambatan.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 24.</B><br>
                            <input type="radio" name="soal23" value="A" id="rb49" />
                            <label for="rb49"> <b>A.</b> Saya biasanya membuat keputusan - keputusan sendiri dan menyampaikannya kepada bawahan saya<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal23" value="B" id="rb50" />
                            <label for="rb50"> <b>B.</b> Saya merasa bahwa serikat - serikat buruh dan pimpinan perusahaan dapat bekerjasama untuk mencapai tujuan-tujuan bersama.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 25.</B><br>
                            <input type="radio" name="soal24" value="A" id="rb51" />
                            <label for="rb51"> <b>A.</b> Saya menyukai penggunaan skala penggajian karyawan.<br>
                            </label><br>
                            <!-- =================== -->
                            <input type="radio" name="soal24" value="B" id="rb52" />
                            <label for="rb52"> <b>B.</b> Saya selalu melakukan diskusi - diskusi untuk mencapai kata sepakat.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 26.</B><br>
                            <input type="radio" name="soal26" value="A" id="rb53" />
                            <label for="rb53"> <b>A.</b>Saya tidak akan memberikan tugas yang tidak saya senangi kepada orang lain.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal26" value="B" id="rb54" />
                            <label for="rb54"> <b>B.</b>Bila beberapa bawahan saya merasa tidak berbahagia, saya akan mencoba melakukan sesuatu untuk mengatasi hal tersebut.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 27.</B><br>
                            <input type="radio" name="soal27" value="A" id="rb55" />
                            <label for="rb55"> <b>A.</b>Bila ada tugas yang mendesak, walaupun semua peralatannya sudah disediakan, saya akan membiarkannya saja dan meminta salah seorang bawahan saya untuk mengerjakan tugas tersebut.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal27" value="B" id="rb56" />
                            <label for="rb56"> <b>B.</b> Adalah penting bagi saya untuk memperoleh penghargaan atas ide - ide saya yang baik.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 28.</B>
                            <br>
                            <input type="radio" name="soal28" value="A" id="rb57" />
                            <label for="rb57"> <b>A.</b> Tujuan saya adalah berusaha mengerjakan tugas sebaik mungkin tanpa mengeluh.
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal28" value="B" id="rb58" />
                            <label for="rb58"> <b>B.</b> Saya memberikan tugas kepada bawahan saya tanpa banyak mempertimbangkan pengalaman atau kemampuan saya lebih menuntut pencapaian hasilnya saja.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 29.</B><br>
                            <input type="radio" name="soal29" value="A" id="rb59" />
                            <label for="rb59"> <b>A.</b> Saya memberikan tugas kepada bawahan saya tanpa banyak mempertimbangkan pengalaman atau kemampuan. Saya lebih menuntut pada pencapaian hasilnya saja.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal29" value="B" value="A" id="rb60" />
                            <label for="rb60"> <b>B.</b> Saya dengan sabar mendengarkan keluhan - keluhan dan ketidakpuasan - ketidakpuasan bawahan saya, tetapi seringkali saya meralat apa yang mereka katakan.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 30.</B><br>
                            <input type="radio" name="soal30" value="A" id="rb61" />
                            <label for="rb61"> <b>A.</b>Saya merasa bahwa keluhan-keluhan tidak dapat dicegah dan saya berusaha untuk menghilangkan keluhan tersebut.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal30" value="B" id="rb62" />
                            <label for="rb62"> <b>B.</b>Saya percaya bahwa bawahan - bawahan saya akan merasakan kepuasan kerja tanpa merasa tertekan oleh saya.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 31.</B><br>
                            <input type="radio" name="soal31" value="A" id="rb63" />
                            <label for="rb63"> <b>A.</b> Bila menghadapi masalah yang sulit, saya berusaha untuk mencapai pemecahan yang dapat diterima oleh sebagian besar orang. <br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal31" value="B" id="rb64" />
                            <label for="rb64"> <b>B.</b> Saya percaya bahwa pengalaman bekerja lebih bermanfaat daripada pendidikan teoritis.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">
                        <h6>
                            <B>NO 32.</B><br>
                            <input type="radio" name="soal32" value="A" id="rb65" />
                            <label for="rb65"> <b>A.</b> Saya selalu memberikan tugas - tugas yang sangat sulit kepada karyawan - karyawan yang paling berpengalaman.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal32" value="B" id="rb66" />
                            <label for="rb66"> <b>B.</b> Saya percaya bahwa kenaikan jabatan adalah semata - mata berdasarkan kemampuan yang ada.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 33.</B><br>
                            <input type="radio" name="soal33" value="A" id="rb67" />
                            <label for="rb67"> <b>A.</b> Saya merasa bahwa masalah - masalah yang timbul di antara para karyawan biasanya akan dapat diselesaikan di antara mereka sendiri, tanpa campur tangan dari saya.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal33" value="B" id="rb68" />
                            <label for="rb68"> <b>B.</b> Bila saya ditegur oleh atasan saya, saya akan memanggil semua bawahan saya dan mengatakan semua teguran tersebut kepada mereka.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 34.</B><br>
                            <input type="radio" name="soal34" value="A" id="rb69" />
                            <label for="rb69"> <b>A.</b> Saya tidak peduli dengan apa yang dikerjakan oleh karyawan saya di luar jam kerja kantornya.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal34" value="B" id="rb70" />
                            <label for="rb70"> <b>B.</b>Saya percaya bahwa bawahan - bawahan yang tidak disiplin tidak akan memperbaiki jumlah atau mutu kerja mereka dalam jangka waktu yang panjang.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 35.</B><br>
                            <input type="radio" name="soal35" value="A" id="rb71" />
                            <label for="rb71"> <b>A.</b> Saya memberikan informasi kepada pimpinan perusahaan tidak lebih dari apa yang mereka tanyakan.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal35" value="B" id="rb72" />
                            <label for="rb72"> <b>B.</b>Kadang - kadang saya merasa bahwa apa yang dikeluhkan oleh serikat buruh bukanlah masalah yang mendasar.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 36.</B><br>
                            <input type="radio" name="soal36" value="A" id="rb73" />
                            <label for="rb73"> <b>A.</b> Saya kadang ragu-ragu untuk membuat suatu keputusan yang akan tidak disukai oleh bawahan - bawahan saya<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal36" value="B" id="rb74" />
                            <label for="rb74"> <b>B.</b>Tujuan saya adalah berusaha mengerjakan tugas sebaik mungkin tanpa mengeluh.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 37.</B><br>
                            <input type="radio" name="soal37" value="A" id="rb75" />
                            <label for="rb75"> <b>A.</b> Saya dengan sabar mendengarkan keluhan - keluhan dan Ketidakpuasan - ketidakpuasan dari bawahan saya, tetapi seringkali saya meralat apa yang mereka katakan.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal37" value="B" id="rb76" />
                            <label for="rb76"> <b>B.</b> Saya kadang ragu-ragu untuk membuat suatu keputusan yang akan tidak disukai oleh bawahan-bawahan saya.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 38.</B><br>
                            <input type="radio" name="soal38" value="A" id="rb77" />
                            <label for="rb77"> <b>A.</b> . Saya mengemukakan pendapat-pendapat saya dimuka umum hanya bila saya merasa bahwa orang lain akan setuju dengan saya.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal38" value="B" id="rb78" />
                            <label for="rb78"> <b>B.</b>Sebagian besar dari bawahan-bawahan saya dapat menyelesaikan tugas-tugas mereka, bila perlu tanpa kehadiran saya.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 39.</B><br>
                            <input type="radio" name="soal39" value="A" id="rb79" />
                            <label for="rb79"> <b>A.</b> Saya berusaha bekerja sebaik mungkin dan memberikan ide - ide pengembangan pada pimpinan perusahaan.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal39" value="B" id="rb80" />
                            <label for="rb80"> <b>B.</b> Bila saya memberikan tugas kepada bawahan - bawahan saya, saya menentukan batas waktu penyelesaiannya.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 40.</B><br>
                            <input type="radio" name="soal40" value="A" id="rb81" />
                            <label for="rb81"> <b>A.</b> Saya selalu menganjurkan kepada bawahan saya untuk memberikan usul-usul, tetapi kadang-kadang saya langsung mengambil tindakan tertentu.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal40" value="B" id="rb82" />
                            <label for="rb82"> <b>B.</b> Saya mencoba membuat bawahan - bawahan saya merasa senang apabila mereka berbicara dengan saya.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 41.</B><br>
                            <input type="radio" name="soal41" value="A" id="rb83" />
                            <label for="rb83"> <b>A.</b>Di dalam diskusi - diskusi sava memberikan fakta - fakta sesuai pemahaman bawahan saya, dan membiarkan mereka untuk membuat kesimpulan sendiri.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal41" value="B" id="rb84" />
                            <label for="rb84"> <b>B.</b>Bila direktur memberikan perintah yang kurang menyenangkan, saya pikir adalah cukup bijaksana bila saya menyebutkan namanya dan bukan nama saya.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 42.</B><br>
                            <input type="radio" name="soal42" value="A" id="rb85" />
                            <label for="rb85"> <b>A.</b> Bila ada tugas - tugas mendadak atau tugas yang tidak menyenangkan, sebelumnya saya akan meminta beberapa sukarelawan yang mau mengerjakan tugas tersebut. <br>
                            </label>
                            <input type="radio" name="soal42" value="B" id="rb86" />
                            <label for="rb86"> <b>B.</b> Saya menunjukkan minat saya terhadap kehidupan pribadi bawahan - bawahan saya, karena sayapun mengharapkan mereka berbuat seperti itu kepada saya.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 43.</B>
                            <br>
                            <input type="radio" name="soal43" value="A" id="rb87" />
                            <label for="rb87"> <b>A.</b> Saya selalu memperhatikan kebahagiaan karayawan - karyawan saya saat mereka mengerjakan tugas - tugas mereka.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal43" value="B" id="rb88" />
                            <label for="rb88"> <b>B.</b>Saya selalu memperhatikan keterlambatan dan kemangkiran bawahan saya.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 44.</B>
                            <br>
                            <input type="radio" name="soal44" value="A" id="rb89" />
                            <label for="rb89"> <b>A.</b> Sebagian besar dari bawahan - bawahan saya dapat menyelesaikan tugas-tugas mereka, bila perlu, tanpa kehadiran saya. <br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal44" value="B" id="rb90" />
                            <label for="rb90"> <b>B.</b>Bila ada sesuatu tugas yang mendesak, walaupun semua peralatannya sudah disediakan, saya akan membiarkannya saja dan meminta salah seorang bawahan saya untuk mengerjakan tugas tersebut.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 45.</B><br>
                            <input type="radio" name="soal45" value="A" id="rb91" />
                            <label for="rb91"> <b>A.</b> Saya percaya bahwa bawahan - bawahan saya akan merasakan kepuasan kerja tanpa merasa tertekan oleh saya. <br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal45" value="B" id="rb92" />
                            <label for="rb92"> <b>B.</b> Saya memberikan informasi kepada "dewan pimpin perusahaan" tidak lebih dari apa yang mereka tanyakan.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 46.</B><br>
                            <input type="radio" name="soal46" value="A" id="rb93" />
                            <label for="rb93"> <b>A.</b> Saya percaya bahwa pertemuan - pertemuan yang sering dengan karyawan secara pribadi akan membantu pengembangan diri mereka.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal46" value="B" id="rb94" />
                            <label for="rb94"> <b>B.</b> Saya selalu memperhatikan kebahagiaan karyawan - karyawan saya saat mereka mengerjakan tugas - tugas mereka.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 47.</B><br>
                            <input type="radio" name="soal47" value="A" id="rb95" />
                            <label for="rb95"> <b>A.</b> Saya mendukung bawahan saya yang ingin meningkatkan pengetahuan tentang pekerjaan dan perusahaan, walaupun hal itu sebenarnya belum diperlukan untuk kedudukan mereka sekarang.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal47" value="B" id="rb96" />
                            <label for="rb96"> <b>B.</b> Saya mengawasi benar bawahan-bawahan saya yang kurang mahir dalam pekerjaannya atau bawahan - bawahan saya yang hasil kerjanya kurang memuaskan.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 48.</B><br>
                            <input type="radio" name="soal48" value="A" id="rb97" />
                            <label for="rb97"> <b>A.</b> Saya mengijinkan bawahan - bawahan saya untuk ikut serta dalam mengambil keputusan dan saya selalu mematuhi keputusan yang dibuat berdasarkan suara terbanyak.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal48" value="B" id="rb98" />
                            <label for="rb98"> <b>B.</b> Saya membuat bawahan - bawahan saya bekerja keras, dan saya berusaha meyakinkan mereka bahwa biasanya mereka akan mendapat perlakuan yang adil dari pimpinan perusahaan
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 49.</B><br>
                            <input type="radio" name="soal49" value="A" id="rb99" />
                            <label for="rb99"> <b>A.</b>Saya merasa bahwa semua karyawan pada jabatan yang sama seharusnya memperoleh gaji yang sama<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal49" value="B" id="rb100" />
                            <label for="rb100"> <b>B.</b> Bila ada seorang karyawan yang hasil kerjanya selalu tidak memuaskan saya, saya akan menunggu suatu kesempatan untuk memindahkannya dan bukan untuk memecatnya.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 50.</B>
                            <br>
                            <input type="radio" name="soal50" value="A" id="rb101" />
                            <label for="rb101"><b>A.</b>Saya merasa bahwa tujuan - tujuan serikat buruh dan tujuan - tujuan perusahaan saling berbeda.
                                <br></label>
                            <!-- =================== -->
                            <input type="radio" name="soal50" value="B" id="rb102" />
                            <label for="rb102"> <b>B.</b> Saya merasa bahwa dengan bekerja keras bagi bawahan saya, mereka akan menyenangi saya.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 51.</B>
                            <br>
                            <input type="radio" name="soal51" value="A" id="rb103" />
                            <label for="rb103"> <b>A.</b>Saya mengawasi benar bawahan - bawahan saya yang kurang mahir dalam pekerjaannya atau bawahan - bawahan saya yang hasil kerjanya kurang memuaskan.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal51" value="B" id="rb104" />
                            <label for="rb104"> <b>B.</b> Saya mencela pembicaraan - pembicaraan yang tidak perlu di antara bawahan - bawahan saya, selama mereka bekerja.
                            </label>
                        </h6>

                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 52.</B><br>
                            <input type="radio" name="soal52" value="A" id="rb105" />
                            <label for="rb105"> <b>A.</b> Bila saya memberikan tugas kepada bawahan - bawahan saya, saya menentukan batas waktu penyelesaiannya.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal52" value="B" id="rb106" />
                            <label for="rb106"> <b>B.</b>Saya tidak akan memberikan tugas yang tidak saya senangi kepada orang lain.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 53.</B><br>
                            <input type="radio" name="soal53" value="A" id="rb107" />
                            <label for="rb107"> <b>A.</b> Saya percaya bahwa pengalaman bekerja lebih bermanfaat daripada pendidikan teoritis.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal53" value="B" id="rb108" />
                            <label for="rb108"> <b>B.</b>Saya tidak peduli dengan apa yang dikerjakan oleh para pegawai saya di luar jam kantornya.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">
                        <h6>
                            <B>NO 54.</B><br>
                            <input type="radio" name="soal54" value="A" id="rb109" />
                            <label for="rb109"> <b>A.</b> Saya merasa bahwa jam pencatat waktu datang dan pulangnya para pegawai akan mengurangi keterlambatan.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal54" value="B" id="rb110" />
                            <label for="rb110"> <b>B.</b> Saya mengijinkan bawahan - bawahan saya untuk ikut serta dalam pengambilan keputusan dan saya selalu mematuhi keputusan yang dibuat berdasarkan suara terbanyak.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 55.</B><br>
                            <input type="radio" name="soal55" value="A" id="rb111" />
                            <label for="rb111"> <b>A.</b> Saya membuat keputusan - keputusan sendiri, tetapi saya dapat mempertimbangkan saran-saran yang wajar dari bawahan - bawahan saya.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal55" value="B" id="rb112" />
                            <label for="rb112"> <b>B.</b> Saya merasa bahwa tujuan-tujuan serikat buruh dan tuijan tujuan perusahaan adalah saling berbeda.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 56.</B><br>
                            <input type="radio" name="soal56" value="A" id="rb113" />
                            <label for="rb113"> <b>A.</b>Saya membuat keputusan - keputusan sendiri dan kemudian saya mencoba untuk "menjual" keputusan - keputusan itu kepada bawahan saya.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal56" value="B" id="rb114" />
                            <label for="rb114"> <b>B.</b>Apabila mungkin, saya akan membentuk kelompok - kelompok kerja yang terdiri dari orang - orang yang sudah menjadi teman - teman baik saya.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 57.</B><br>

                            <input type="radio" name="soal57" value="A" id="rb115" />
                            <label for="rb115"> <b>A.</b> Saya tidak akan ragu - ragu untuk memperkerjakan pegawai - pegawai yang cacat jasmani, bilamana saya merasa pasti bahwa mereka dapat menangani pekerjaannya.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal57" value="B" id="rb116" />
                            <label for="rb116"><b>B.</b> Saya tidak akan menegur pelanggar - pelanggar peraturan, bila saya merasa pasti bahwa tidak ada satu orangpun yang mengetahui tentang pelanggaran - pelanggaran tersebut.
                                mulai</label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 58.</B><br>
                            <input type="radio" name="soal58" value="A" id="rb117" />
                            <label for="rb117"> <b>A.</b> Apabila mungkin, saya akan membentuk kelompok - kelompok kerja yang terdiri dari orang - orang yang sudah menjadi teman - teman baik saya. <br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal58" value="B" id="rb118" />
                            <label for="rb118"> <b>B.</b> Saya akan memberikan tugas - tugas yang sulit kepada bawahan - bawahan saya yang belum berpengalaman, tetapi bila mereka memperoleh kesukaran, saya akan mengambil alih tanggung jawab mereka.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 59.</B><br>

                            <input type="radio" name="soal59" value="A" id="rb119" />
                            <label for="rb119"><b>A.</b>
                                Saya membuat bawahan-bawahan saya bekerja keras, dan saya berusaha menyakinkan mereka bahwa biasanya mereka akan mendapat perlakuan yang adil dari pimpinan perusahaan.
                                <br></label>
                            <!-- =================== -->
                            <input type="radio" name="soal59" value="B" id="rb120" />
                            <label for="rb120"> <b>B.</b> Saya percaya bahwa penerapan disiplin adalah merupakan contoh untuk karyawan - karyawan lainnya.
                            </label>
                        </h6>

                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 60.</B><br>
                            <input type="radio" name="soal60" value="A" id="rb121" />
                            <label for="rb121"> <b>A.</b> Sava mencoba untuk membuat bawahan - bawahan saya merasa senang apabila mereka berbicara dengan saya.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal60" value="B" id="rb122" />
                            <label for="rb122"> <b>B.</b>Saya menyukai penggunaan skala pengajian karyawan.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 61.</B><br>
                            <input type="radio" name="soal61" value="A" id="rb123" />
                            <label for="rb123"> <b>A.</b> Saya percaya bahwa kenaikan jabatan adalah semata - mata berdasarkan kemampuan yang ada. <br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal61" value="B" id="rb124" />
                            <label for="rb124"> <b>B.</b> 1. Saya merasa bahwa masalah - masalah yang timbul di antara para karyawan biasanya akan dapat diselesaikan di antara mereka sendiri, tanpa campur tangan dari saya.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 62.</B><br>
                            <input type="radio" name="soal62" value="A" id="rb125" />
                            <label for="rb125"> <b>A.</b>Saya merasa bahwa serikat - serikat buruh dan pimpinan perusahaan bekerja untuk mencapai tujuan-tujuan yang sama. <br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal62" value="B" id="rb126" />
                            <label for="rb126"> <b>B.</b> 1. Didalam diskusi, saya memberikan fakta - fakta sesuai pemahaman bawahan saya, dan membiarkan mereka untuk membuat kesimpulan sendiri.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 63.</B><br>
                            <input type="radio" name="soal63" value="A" id="rb127" />
                            <label for="rb127"> <b>A.</b>Bila seorang karyawan tidak sanggup menyelesaikan tugasnya, saya akan membantu dia untuk menyelesaikan tugas tersebut.<br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal63" value="B" id="rb128" />
                            <label for="rb128"> <b>B.</b>Saya merasa bahwa semua karyawan pada jabatan yang sama seharusnya memperoleh gaji yang sama.
                            </label>
                        </h6>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>NO 64.</B><br>
                            <input type="radio" name="soal64" value="A" id="rb129" />
                            <label for="rb129"> <b>A.</b> Saya mengijinkan bawahan - bawahan saya untuk ikut serta dalam pengambilan keputusan, tetapi saya pun menyediakan sesuatu yang jitu sebagai keputusan terakhir. <br>
                            </label>
                            <!-- =================== -->
                            <input type="radio" name="soal64" value="B" id="rb130" />
                            <label for="rb130"> <b>B.</b> Saya tidak akan ragu - ragu untuk mempekerjakan pegawai - pegawai yang cacat jasmaninya, bilamana saya merasa bahwa mereka dapat menangani pekerjaannya.
                            </label>
                        </h6>
                    </div>

                </fieldset>

                <!-- <fieldset class="section">
                    <div class="kirim">
                        <h4>Selamat anda sudah Mengerjakan Semua Soal</h4>
                        <h5>Silahkan Kirim Jawaban Anda untuk melihat hasil jawaban anda</h5>
                        <center>
                            <a href="hasil gratis.html">
                                <div class="button"> <img src="../asset/icon/save-file.png" alt=""> Simpan</div>
                            </a>
                        </center>
                    </div>
                </fieldset> -->
                <center>
                <b>Selesai. Silahkan periksa kembali pekerjaan Anda, apakah masih ada pernyataan-pernyataan yang belum Anda selesaikan.
                    <br> Bila sudah, tekan button simpan Jawaban</b>
            </center> <br>
            <!-- button-->
            <div class="simpan">
                <b>
                    <h6><button type="submit" value="submit"> SIMPAN JAWABAN</button></h6>
                    <br><br>
                </b>
            </div>
            </form>



            <br>
           
            <!-- menampilkan pop up-->
            <p type="button" id="autoKlik" onclick="alert('Waktu Habis silahkan Simpan Jawaban Anda Jika Tidak Disimpan Maka Tidak Akan Bisa Dinilai')">
            </p>


            <script>
                var button = document.getElementById("autoKlik");
                setInterval(function() {
                    button.click();
                }, 1800000);
            </script>
            <!-- end menampilkan pop up-->

        </form>


    </div>
    <footer class="bg-dark fixed-bottom">
        <div class="footer text-light text-center" style="height: 25px; ">&copy; HiProg</div>
    </footer>
</body>

</html>