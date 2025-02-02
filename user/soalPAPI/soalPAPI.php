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
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
    <title>Soal PAPI</title>
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
        <form method="post" action="proses_papi.php">
            <center>
                <img src="../assets/img/logo.png" alt="" srcset="" width="80px">
                <h3>SELAMAT MENGERJAKAN</h3>
                <h5>Kelompok Soal PAPI <br> nomer 1-90</h5>
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
                            <B>1.</B> <b>A.</b> Saya seorang pekerja keras<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya bukan seorang pemurung
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal1" value="A" id="rb1" />

                        <label for="rb1">A</label>

                        <!-- =================== -->
                        <input type="radio" name="soal1" value="B" id="rb2" />

                        <label for="rb2">B</label>

                    </div>

                    <div class="soal">

                        <h6>
                            <B>2.</B> <b>A.</b>Saya suka bekerja lebih baik dari yang lain<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya suka menekuni pekerjaan yang saya lakukan sampai
                            selesai
                        </h6>
                        <b>Jawab :</b>
                        <!-- =================== -->
                        <input type="radio" name="soal2" value="A" id="rb3" />

                        <label for="rb3">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal2" value="B" id="rb4" />

                        <label for="rb4">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>3.</B> <b>A.</b> Saya suka memberi petunjuk kepada orang bagaimana melakukan sesuatu<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya ingin melakukan sesuatu sebaik mungkin
                        </h6>
                        <b>Jawab :</b>
                        <!-- =================== -->
                        <input type="radio" name="soal3" value="A" id="rb5" />

                        <label for="rb5">A</label>
                        <input type="radio" name="soal3" value="B" id="rb6" />

                        <label for="rb6">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>4.</B> <b>A.</b> Saya suka melakukan hal-hal yang lucu<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya senang memberi tahu orang apa yang harus di
                            kerjakannya<br>
                        </h6>
                        <b>Jawab :</b>
                        <!-- ======================== -->
                        <input type="radio" name="soal4" value="A" id="rb7" />

                        <label for="rb7">A</label>
                        <!-- ======================== -->
                        <input type="radio" name="soal4" value="B" id="rb8" />

                        <label for="rb8">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>5.</B> <b>A.</b>
                            Saya suka bergabung dengan kelompok
                            <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya senang di perhatikan oleh kelompok
                        </h6>
                        <b>Jawab :</b>
                        <!-- ======================== -->
                        <input type="radio" name="soal5" value="A" id="rb9" />

                        <label for="rb9">A</label>
                        <!-- ======================== -->
                        <input type="radio" name="soal5" value="B" id="rb10" />

                        <label for="rb10">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>6.</B> <b>A.</b> Saya suka membina suatu hubungan persahabatan antar pribadi <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya suka berteman dengan suatu kelompok
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal6" value="A" id="rb11" />

                        <label for="rb11">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal6" value="B" id="rb12" />

                        <label for="rb12">B</label>

                    </div>

                    <div class="soal">

                        <h6>
                            <B>7.</B> <b>A.</b> Saya cepat berubah jika saya rasa hal itu diperlukan <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya berusaha membina hubungan yang akrab dengan teman
                            saya
                        </h6>
                        <b>Jawab :</b>
                        <!-- =================== -->
                        <input type="radio" name="soal7" value="A" id="rb13" />

                        <label for="rb13">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal7" value="B" id="rb14" />

                        <label for="rb14">B</label>
                        <br>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>8.</B> <b>A.</b> SSaya suka membalas jika saya disakiti <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya suka melakukan hal-hal yang baru dan berbeda
                        </h6>
                        <b>Jawab :</b>
                        <!-- =================== -->
                        <input type="radio" name="soal8" value="A" id="rb15" />

                        <label for="rb15">A</label>
                        <input type="radio" name="soal8" value="B" id="rb16" />

                        <label for="rb16">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>9.</B> <b>A.</b> Saya ingin atasan saya menyukai saya<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya suka memberi tahu orang jika mereka salah
                        </h6>
                        <b>Jawab :</b>
                        <!-- =================== -->
                        <input type="radio" name="soal9" value="A" id="rb17" />

                        <label for="rb17">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal9" value="B" id="rb18" />

                        <label for="rb18">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>10.</B> <b>A.</b> Saya suka mengikuti petunjuk-petunjuk yang diberikan kepada saya <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya suka mendukung pendapat atasan saya
                        </h6>
                        <b>Jawab :</b>
                        <!-- =================== -->
                        <input type="radio" name="soal10" value="A" id="rb19" />

                        <label for="rb19">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal10" value="B" id="rb20" />
                        <label for="rb20">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>11.</B> <b>A.</b> Saya berusaha sangat keras <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b>Saya seorang teratur, saya menaruh semua barang pada
                            tempatnya
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal11" value="A" id="rb21" />

                        <label for="rb21">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal11" value="B" id="rb22" />

                        <label for="rb22">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>12.</B> <b>A.</b> Saya dapat membuat orang mau bekerja keras<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya tidak mudah marah
                        </h6>
                        <b>Jawab :</b>
                        <!-- =================== -->
                        <input type="radio" name="soal12" value="A" id="rb23" />

                        <label for="rb23">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal12" value="B" id="rb24" />

                        <label for="rb24">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>13.</B> <b>A.</b>Saya suka memberi tahu kelompok apa yang harus dikerjakan <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b>
                            Saya selalu menekuni suatu pekerjaan sampai selesai
                        </h6>
                        <b>Jawab :</b>
                        <!-- =================== -->
                        <input type="radio" name="soal13" value="A" id="rb25" />

                        <label for="rb25">A</label>
                        <input type="radio" name="soal13" value="B" id="rb26" />

                        <label for="rb26">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>14.</B> <b>A.</b> Saya ingin tampil menarik dan menakjubkan<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya ingin menjadi orang yang berhasil
                        </h6>
                        <b>Jawab :</b>
                        <!-- =================== -->
                        <input type="radio" name="soal14" value="A" id="rb27" />

                        <label for="rb27">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal14" value="B" id="rb28" />

                        <label for="rb28">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>15.</B> <b>A.</b>
                            Saya ingin sesuai dan di terima dalam kelompok
                            <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya suka membantu orang dalam mengambil sikap
                        </h6>
                        <b>Jawab :</b>
                        <!-- =================== -->
                        <input type="radio" name="soal15" value="A" id="rb29" />

                        <label for="rb29">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal15" value="B" id="rb30" />

                        <label for="rb30">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>16.</B> <b>A.</b> Saya cemas jika seseorang tidak menyukai saya<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya suka orang memperhatikan saya
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal16" value="A" id="rb31" />

                        <label for="rb31">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal16" value="B" id="rb32" />

                        <label for="rb32">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>17.</B> <b>A.</b> Saya suka mencoba hal-hal baru <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya lebih suka bekerja bersama orang lain daripada sendiri
                        </h6>
                        <b>Jawab :</b>
                        <!-- =================== -->
                        <input type="radio" name="soal17" value="A" id="rb33" />

                        <label for="rb33">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal17" value="B" id="rb34" />

                        <label for="rb34">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>18.</B> <b>A.</b> Saya kadang-kadang menyalahkan orang lain jika terjadi kesalahan <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya merasa terganggu jika ada yang tidak menyukai saya
                        </h6>
                        <b>Jawab :</b>
                        <!-- =================== -->
                        <input type="radio" name="soal18" value="A" id="rb35" />

                        <label for="rb35">A</label>
                        <input type="radio" name="soal18" value="B" id="rb36" />

                        <label for="rb36">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>19.</B> <b>A.</b> Saya suka mendukung pendapat atasan saya<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b>Saya suka mencoba pekerjaan-pekerjaan yang baru dan berbeda
                        </h6>
                        <b>Jawab :</b>
                        <!-- =================== -->
                        <input type="radio" name="soal19" value="A" id="rb37" />

                        <label for="rb37">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal19" value="B" id="rb38" />

                        <label for="rb38">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>20.</B> <b>A.</b> Saya menyukai petunjuk terperinci dalam menyelesaikan permasalahan<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya suka memberi tahu bila orang membuat saya kesal
                        </h6>
                        <b>Jawab :</b>
                        <!-- =================== -->
                        <input type="radio" name="soal20" value="A" id="rb39" />

                        <label for="rb39">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal20" value="B" id="rb40" />

                        <label for="rb40">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>21.</B> <b>A.</b> Saya selalu berusaha keras <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b>Saya suka melaksanakan setiap langkah dengan hati-hati
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal21" value="A" id="rb43" />

                        <label for="rb43">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal21" value="B" id="rb44" />

                        <label for="rb44">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>22.</B> <b>A.</b> Saya seorang pemimpin yang baik<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya dapat mengorganisir suatu pekerjaan dengan baik
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal22" value="A" id="rb45" />

                        <label for="rb45">A</label>
                        <br>
                        <input type="radio" name="soal22" value="B" id="rb46" />

                        <label for="rb46">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>23.</B> <b>A.</b> Saya mudah tersinggung<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya lambat dalam membuat keputusan
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal23" value="A" id="rb47" />

                        <label for="rb47">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal23" value="B" id="rb48" />

                        <label for="rb48">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>24.</B> <b>A.</b> Dalam suatu kelompok saya lebih suka diam<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya suka mengerjakan beberapa pekerjaan sekaligus
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal24" value="A" id="rb49" />

                        <label for="rb49">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal24" value="B" id="rb50" />

                        <label for="rb50">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>25.</B> <b>A.</b> Saya sangat suka bila saya di undang<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya ingin lebih baik dari yang lain dalam mengerjakan
                            sesuatu
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal25" value="A" id="rb51" />

                        <label for="rb51">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal25" value="B" id="rb52" />

                        <label for="rb52">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>26.</B> <b>A.</b> Saya suka membina hubungan yang akrab dengan teman-teman saya <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b>Saya suka menasihati orang lain
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal26" value="A" id="rb53" />

                        <label for="rb53">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal26" value="B" id="rb54" />

                        <label for="rb54">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>27.</B> <b>A.</b>Saya suka melakukan hal-hal yang baru dan berbeda<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya suka menceritakan bagaimana saya berhasil melakukan
                            sesuatu
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal27" value="A" id="rb55" />

                        <label for="rb55">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal27" value="B" id="rb56" />

                        <label for="rb56">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>28.</B> <b>A.</b>
                            Bila saya betul, saya suka mempertahankannya
                            <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya ingin diterima dan diakui dalam suatu kelompok
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal28" value="A" id="rb57" />

                        <label for="rb57">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal28" value="B" id="rb58" />

                        <label for="rb58">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>29.</B> <b>A.</b> Saya berusaha untuk tidak menjadi seorang yang berbeda <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya berusaha untuk dekat sekali dengan orang lain
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal29" value="A" id="rb59" />

                        <label for="rb59">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal29" value="B" value="A" id="rb60" />

                        <label for="rb60">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>30.</B> <b>A.</b> Saya senang diberi tahu bagaimana melakukan suatu pekerjaan<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b>Saya mudah bosan
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal30" value="A" id="rb61" />

                        <label for="rb61">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal30" value="B" id="rb62" />

                        <label for="rb62">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>31.</B> <b>A.</b> Saya bekerja keras <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya banyak berfikir dan membuat rencana
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal31" value="A" id="rb63" />

                        <label for="rb63">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal31" value="B" id="rb64" />

                        <label for="rb64">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>32.</B> <b>A.</b> Saya memimpin kelompok <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Detail (hal-hal kecil) menarik bagi saya
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal32" value="A" id="rb65" />

                        <label for="rb65">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal32" value="B" id="rb66" />

                        <label for="rb66">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>33.</B> <b>A.</b> Saya mengambil keputusan secara mudah dan cepat <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya menyimpan barang-barang saya secara rapih dan teratur
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal33" value="A" id="rb67" />

                        <label for="rb67">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal33" value="B" id="rb68" />

                        <label for="rb68">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>34.</B> <b>A.</b> Biasanya saya bekerja dengan tergesa-gesa<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya jarang marah atau bersedih
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal34" value="A" id="rb69" />

                        <label for="rb69">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal34" value="B" id="rb70" />

                        <label for="rb70">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>35.</B> <b>A.</b> Saya ingin menjadi bagian dari kelompok<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b>Saya ingin melakukan satu pekerjaan pada satu saat
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal35" value="A" id="rb71" />

                        <label for="rb71">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal35" value="B" id="rb72" />

                        <label for="rb72">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>36.</B> <b>A.</b> Saya berusaha berteman secara akrab<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b>Saya berusaha sangat keras untuk menjadi yang terbaik
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal36" value="A" id="rb73" />
                        <label for="rb73">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal36" value="B" id="rb74" />
                        <label for="rb74">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>37.</B> <b>A.</b> Saya ingin menjadi bagian dari suatu kelompok<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya berusaha menjadi yang terbaik
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal37" value="A" id="rb75" />
                        <label for="rb75">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal37" value="B" id="rb76" />
                        <label for="rb76">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>38.</B> <b>A.</b> Saya menyukai perdebatan<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya suka mendapatkan perhatian
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal38" value="A" id="rb77" />
                        <label for="rb77">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal38" value="B" id="rb78" />
                        <label for="rb78">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>39.</B> <b>A.</b> Saya suka mendukung orang-orang yang menjadi atasan saya <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya tertarik menjadi bagian dari kelompok
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal39" value="A" id="rb79" />
                        <label for="rb79">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal39" value="B" id="rb80" />
                        <label for="rb80">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>40.</B> <b>A.</b> Saya suka mengikuti peraturan dengan hati-hati<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya suka orang yang mengenal saya dengan baik
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal40" value="A" id="rb81" />
                        <label for="rb81">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal40" value="B" id="rb82" />
                        <label for="rb82">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>41.</B> <b>A.</b> Saya berusaha keras sekali<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya sangat ramah
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal41" value="A" id="rb83" />
                        <label for="rb83">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal41" value="B" id="rb84" />
                        <label for="rb84">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>42.</B> <b>A.</b> Orang menilai saya seorang pemimpin yang baik <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya berfikir panjang dan hati-hati
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal42" value="A" id="rb85" />
                        <label for="rb85">A</label>
                        <input type="radio" name="soal42" value="B" id="rb86" />
                        <label for="rb86">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>43.</B> <b>A.</b> Saya sering mengambil resiko/coba-coba <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b>Saya sering mengurus hal-hal kecil/detail
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal43" value="A" id="rb87" />
                        <label for="rb87">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal43" value="B" id="rb88" />
                        <label for="rb88">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>44.</B> <b>A.</b> Orang berpendapat bahwa saya bekerja cepat <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya sering mengurus hal-hal kecil/detail
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal44" value="A" id="rb89" />
                        <label for="rb89">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal44" value="B" id="rb90" />
                        <label for="rb90">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>45.</B> <b>A.</b> Saya senang mengikuti pertandingan dan olahraga <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya mempunyai pribadi yang menyenangkan
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal45" value="A" id="rb91" />
                        <label for="rb91">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal45" value="B" id="rb92" />
                        <label for="rb92">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>46.</B> <b>A.</b> Saya senang jika orang dekat<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya mempunyai pribadi yang menyenangkan
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal46" value="A" id="rb93" />
                        <label for="rb93">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal46" value="B" id="rb94" />
                        <label for="rb94">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>47.</B> <b>A.</b> Saya senang bereksperimen dan mencoba hal-hal baru <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya suka melaksanakan suatu pekerjaan sulit dengan baik
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal47" value="A" id="rb95" />
                        <label for="rb95">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal47" value="B" id="rb96" />
                        <label for="rb96">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>48.</B> <b>A.</b> Saya suka diperlakukan secara adil <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya suka memberi tahu orang lain bagaimana melaksanakan
                            suatu pekerjaan
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal48" value="A" id="rb97" />
                        <label for="rb97">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal48" value="B" id="rb98" />
                        <label for="rb98">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>49.</B> <b>A.</b>Saya suka melakukan apa yang diharapkan oleh saya <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya suka memperoleh perhatian
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal49" value="A" id="rb99" />
                        <label for="rb99">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal49" value="B" id="rb100" />
                        <label for="rb100">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>50.</B> <b>A.</b>
                            Saya suka petunjuk-petunjuk terperinci untuk melaksanakan suatu tugas
                            <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya senang berada bersama orang lain
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal50" value="A" id="rb101" />
                        <label for="rb101">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal50" value="B" id="rb102" />
                        <label for="rb102">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>51.</B> <b>A.</b>Saya selalu berusaha menyelesaikan pekerjaan secara sempurna<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Orang mengatakan bahwa saya tidak mengenal lelah
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal51" value="A" id="rb103" />
                        <label for="rb103">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal51" value="B" id="rb104" />
                        <label for="rb104">B</label>

                    </div>

                    <div class="soal">

                        <h6>
                            <B>52.</B> <b>A.</b> Saya tipe pemimpin<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya mudah berteman
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal52" value="A" id="rb105" />
                        <label for="rb105">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal52" value="B" id="rb106" />
                        <label for="rb106">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>53.</B> <b>A.</b> Saya selalu berspekulasi <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya banyak sekali berfikir
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal53" value="A" id="rb107" />
                        <label for="rb107">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal53" value="B" id="rb108" />
                        <label for="rb108">B</label>
                    </div>

                    <div class="soal">
                        <h6>
                            <B>54.</B> <b>A.</b> Saya bekerja dengan kecepatan teratur dan tetap<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya senang bekerja dengan hal-hal kecil/terperinci
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal54" value="A" id="rb109" />
                        <label for="rb109">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal54" value="B" id="rb110" />
                        <label for="rb110">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>55.</B> <b>A.</b> Saya bersemangat untuk mengikuti berbagai pertandingan dalam olahraga <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya suka mengatur dan menyimpan barang-barang secara rapi
                            dan teratur
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal55" value="A" id="rb111" />
                        <label for="rb111">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal55" value="B" id="rb112" />
                        <label for="rb112">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>56.</B> <b>A.</b>Saya dapat bergaul secara baik dengan semua orang <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b>Saya adalah seorang yang mempunyai pembawaan tenang
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal56" value="A" id="rb113" />
                        <label for="rb113">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal56" value="B" id="rb114" />
                        <label for="rb114">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>57.</B> <b>A.</b> Saya ingin bertemu dengan orang-orang baru dan melakukan hal-hal baru<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya selalu ingin menyelesaikan pekerjaan yang telah saya
                            mulai
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal57" value="A" id="rb115" />
                        <label for="rb115">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal57" value="B" id="rb116" />
                        <label for="rb116">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>58.</B> <b>A.</b> Saya biasanya mempertahankan pendapat yang saya yakini <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya biasanya suka bekerja keras
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal58" value="A" id="rb117" />
                        <label for="rb117">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal58" value="B" id="rb118" />
                        <label for="rb118">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>59.</B> <b>A.</b>
                            Saya suka saran-saran dari orang yang saya kagumi
                            <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya senang diserahi tanggung jawab atas kelompok orang
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal59" value="A" id="rb119" />
                        <label for="rb119">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal59" value="B" id="rb120" />
                        <label for="rb120">B</label>

                    </div>

                    <div class="soal">

                        <h6>
                            <B>60.</B> <b>A.</b> Saya biarkan diri saya banyak dipengaruhi orang lain<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b>Saya suka jika mendapat banyak perhatian
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal60" value="A" id="rb121" />
                        <label for="rb121">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal60" value="B" id="rb122" />
                        <label for="rb122">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>61.</B> <b>A.</b> Saya berusaha bekerja keras <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya mengerjakan sesuatu secara cepat
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal61" value="A" id="rb123" />
                        <label for="rb123">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal61" value="B" id="rb124" />
                        <label for="rb124">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>62.</B> <b>A.</b>Apabila saya bicara, kelompok mendengarkan <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya terampil menggunakan perkakas atau (alat-alat)
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal62" value="A" id="rb125" />
                        <label for="rb125">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal62" value="B" id="rb126" />
                        <label for="rb126">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>63.</B> <b>A.</b>Saya lambat dalam membina hubungan<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b>Saya lambat dalam mengambil keputusan
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal63" value="A" id="rb127" />
                        <label for="rb127">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal63" value="B" id="rb128" />
                        <label for="rb128">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>64.</B> <b>A.</b> Saya biasanya makan secara cepat <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya suka membaca
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal64" value="A" id="rb129" />
                        <label for="rb129">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal64" value="B" id="rb130" />
                        <label for="rb130">B</label>
                    </div>













                    <!-- ===================================== -->
                    <div class="soal">

                        <h6>
                            <B>65.</B> <b>A.</b>
                            Saya suka pekerjaan dimana saya banyak bergerak
                            <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya suka pekerjaan yang harus dilakukan secara hati-hati
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal65" value="A" id="rb131" />
                        <label for="rb131">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal65" value="B" id="rb132" />
                        <label for="rb132">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>66.</B> <b>A.</b> Saya mencari teman sebanyak mungkin <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Apa yang sudah saya simpan, akan mudah saya temukan
                            kembali
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal66" value="A" id="rb133" />
                        <label for="rb133">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal66" value="B" id="rb134" />
                        <label for="rb134">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>67.</B> <b>A.</b>Saya merencanakan jauh-jauh berikutnya<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya selalu menyenangkan
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal67" value="A" id="rb135" />
                        <label for="rb135">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal67" value="B" id="rb136" />
                        <label for="rb136">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>68.</B> <b>A.</b> Saya mempertahankan nama baik saya dengan bangga <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya terus menekuni suatu masalah sampai selesai
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal68" value="A"id="rb137" />
                        <label for="rb137">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal68" value="B" id="rb138" />
                        <label for="rb138">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>69.</B> <b>A.</b>Saya suka mendukung orang-orang yang saya kagumi<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya ingin sukses
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal69" value="A" id="rb139" />
                        <label for="rb139">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal69" value="B" id="rb140" />
                        <label for="rb140">B</label>
                    </div>
                    <div class="soal">

                        <h6>
                            <B>70.</B> <b>A.</b> Saya suka orang lain yang memutuskan untuk kelompok<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b>Saya suka membuat keputusan untuk kelompok
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal70" value="A" id="rb141" />
                        <label for="rb141">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal70" value="B" id="rb142" />
                        <label for="rb142">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>71.</B> <b>A.</b> Saya selalu berusaha bekerja keras <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b>Saya mengambil keputusan secara cepat dan mudah
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal71" value="A" id="rb143" />
                        <label for="rb143">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal71" value="B" id="rb144" />
                        <label for="rb144">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>72.</B> <b>A.</b> Kelompok biasanya melakukan apa yang saya inginkan<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya biasa terburu-buru
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal72" value="A" id="rb145" />
                        <label for="rb145">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal72" value="B" id="rb146" />
                        <label for="rb146">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>73.</B> <b>A.</b> Saya sering merasa lelah <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya lamban dalam menentukan sikap
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal73" value="A" id="rb147" />
                        <label for="rb147">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal73" value="B" id="rb148" />
                        <label for="rb148">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>74.</B> <b>A.</b> Saya bekerja cepat<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya mudah berteman
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal74" value="A" id="rb149" />
                        <label for="rb149">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal74" value="B" id="rb150" />
                        <label for="rb150">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>75.</B> <b>A.</b> Saya biasanya mempunyai semangat dan tenaga <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya banyak menghabiskan waktu dengan berfikir
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal75" value="A" id="rb151" />
                        <label for="rb151">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal75" value="B" id="rb152" />
                        <label for="rb152">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>76.</B> <b>A.</b> Saya sangat ramah terhadap orang <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya suka pekerjaan yang memerlukan ketelitian
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal76" value="A" id="rb153" />
                        <label for="rb153">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal76" value="B" id="rb154" />
                        <label for="rb154">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>77.</B> <b>A.</b> Saya banyak berfikir dan merencanakan <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b>Saya menyimpan segala sesuatu pada tempatnya
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal77" value="A" id="rb155" />
                        <label for="rb155">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal77" value="B" id="rb156" />
                        <label for="rb156">B</label>
                    </div>
                    <div class="soal">

                        <h6>
                            <B>78.</B> <b>A.</b>Saya suka pekerjaan yang harus memperhatikan hal-hal kecil (detail) <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya tidak mudah marah
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal78" value="A" id="rb157" />
                        <label for="rb157">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal78" value="B" id="rb158" />
                        <label for="rb158">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>79.</B> <b>A.</b> Saya suka mengikuti orang yang saya kagumi <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya selalu menyelesaikan pekerjaan yang telah saya
                            mulai
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio"name="soal79" value="A" id="rb159" />
                        <label for="rb159">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal79" value="B" id="rb160" />
                        <label for="rb160">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>80.</B> <b>A.</b> Saya suka petunjuk-petunjuk yang jelas<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b>Saya suka bekerja keras
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal80" value="A" id="rb161" />
                        <label for="rb161">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal80" value="B" id="rb162" />
                        <label for="rb162">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>81.</B> <b>A.</b> Saya mengejar apa yang saya inginkan <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya seorang pemimpin yang baik
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal81" value="A" id="rb163" />
                        <label for="rb163">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal81" value="B" id="rb164" />
                        <label for="rb164">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>82.</B> <b>A.</b> Saya dapat membuat orang lain bekerja sesuai dengan yang saya inginkan <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya seorang yang tergolong santai dan beruntung
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal82" value="A" id="rb165" />
                        <label for="rb165">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal82" value="B" id="rb166" />
                        <label for="rb166">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>83.</B> <b>A.</b> Saya mengambil keputusan secara mudah dan amat cepat <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya bicara secara cepat
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal83" value="A" id="rb167" />
                        <label for="rb167">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal83" value="B" id="rb168" />
                        <label for="rb168">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>84.</B> <b>A.</b> Saya biasanya bekerja cepat<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya pemimpin yang baik
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal84" value="A" id="rb169" />
                        <label for="rb169">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal84" value="B" id="rb170" />
                        <label for="rb170">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>85.</B> <b>A.</b> Saya tidak suka bertemu dengan orang<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya cepat merasa lelah
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal85" value="A" id="rb171" />
                        <label for="rb171">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal85" value="B" id="rb172" />
                        <label for="rb172">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>86.</B> <b>A.</b> Saya mempunyai banyak sekali teman <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya banyak menghabiskan waktu dengan berfikir
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal86" value="A" id="rb173" />
                        <label for="rb173">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal86" value="B" id="rb174" />
                        <label for="rb174">B</label>
                    </div>
                    <!-- =======sampai sini============ -->
                    <div class="soal">

                        <h6>
                            <B>87.</B> <b>A.</b> Saya suka berjalan dengan teori<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya suka bekerja dengan hal-hal yang terperinci
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal87" value="A" id="rb175" />
                        <label for="rb175">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal87" value="B" id="rb176" />
                        <label for="rb176">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>88.</B> <b>A.</b>Saya menikmati pekerjaan yang melibatkan hal-hal kecil (detail) <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b>Saya suka mengorganisir pekerjaan saya
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal88" value="A" id="rb177" />
                        <label for="rb177">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal88" value="B" id="rb178" />
                        <label for="rb178">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>89.</B> <b>A.</b> Saya menaruh barang pada tempatnya<br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya selalu menyenangkan
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal89" value="A" id="rb179" />
                        <label for="rb179">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal89" value="B" id="rb180" />
                        <label for="rb180">B</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <B>90.</B> <b>A.</b>Saya suka diberi tahu tentang apa yang perlu dilakukan <br>
                            <b> &nbsp;&nbsp;&nbsp;</b> <b>B.</b> Saya harus menyelesaikan apa yang saya mulai
                        </h6>
                        <b>Jawab :</b>
                        <input type="radio" name="soal90" value="A" id="rb181" />
                        <label for="rb181">A</label>
                        <!-- =================== -->
                        <input type="radio" name="soal90" value="B" id="rb182" />
                        <label for="rb182">B</label>
                    </div>

                </fieldset>

                <div class="simpan">
                <b>
                    <h6><button type="submit" value="submit"> SIMPAN JAWABAN</button></h6>
                    <br><br>
                </b>
            </div>

            </form>
            <script type="text/javascript">
                $(document).ready(function() {
                    var detik = 1;
                    var menit = 30;

                    function hitung() {
                        setTimeout(hitung, 1000);
                        $('#tampilkan').html(+menit + ' menit ' + detik + ' detik ');
                        detik--;
                        if (detik < 0) {
                            detik = 59;
                            menit--;
                            if (menit < 0) {
                                menit = 0;
                                detik = 0;
                            }
                        }
                    }
                    hitung();
                });
            </script>

            <!-- button-->
           
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

        <!--end button-->
        <div class="form-group">
            <input type="hidden" name="post_id" id="post_id" />
            <div id="autoSave"></div>
        </div>

    </div>
    <footer class="bg-dark fixed-bottom">
        <div class="footer text-light text-center" style="height: 25px; ">&copy; HiProg</div>
    </footer>
</body>

</html>