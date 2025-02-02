<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../soal/assets/img/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../panduan/vendor/aos/aos.css" rel="stylesheet">
    <link href="../panduan/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../panduan/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../panduan/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../panduan/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../panduan/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <!-- <link rel="stylesheet" href="../soal/assets/css/style.css"> -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../panduan/css/index.css">
    <link rel="stylesheet" href="../soalist/css/index.css">
    <!-- <link rel="stylesheet" href="../soal/assets/css/css.css"> -->
    <title>Soal SE</title>
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    
    
    <script>
        $(document).ready(function() {
            window.setInterval(function() {
                var sisawaktu = $("#waktu").html();
                sisawaktu = eval(sisawaktu);
                if (sisawaktu == 0) {
                    location.href = "../subsoalIST.php";
                } else {
                    $("#waktu").html(sisawaktu - 1);
                }
            }, 1000);
        });
    </script>
    <style>
        .clashilang{
            visibility : hidden;
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
        <div class="clashilang"><span id="waktu">550</span></div> 
        <form method="post" action="../proses/proses_wu.php">
            <center>
                <img src="../images/logo.png" alt="" srcset="" width="80px">
                <h3>SELAMAT MENGERJAKAN</h3>
                <h5>Kelompok Soal WU </h5>
            </center>
            <hr>
            <div class="nama">
                <p><b>Nama : </b><select name='nama_user' id='nama_user' style="-webkit-appearance: none;">
                        <option value='<?php echo $_SESSION['nama_user']; ?>'> <?php echo $nama_user; ?> </option>

                    </select></p>
            </div><br>
            <form class="subsoal col-md-6">
                <fieldset class="section is-active">


                    <div class="soal">

                        <h6>
                            <img src="../images/137.png" style=" width: 150px; height: 150px; "> <br><br>

                            <img src="../images/pilihan1wu.png" style=" width: 250px; height: 80px; "> <br><br>
                        </h6>
                        <input type="radio" name="soal1" value="1" id="rb1" />

                        <label for="rb1">A</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal1" value="B" id="rb2" />

                        <label for="rb2">B</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal1" value="C" id="rb3" />

                        <label for="rb3">C</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal1" value="D" id="rb4" />

                        <label for="rb4">D</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal1" value="E" id="rb5" />

                        <label for="rb5">E</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <img src="../images/138.png" style=" width: 150px; height: 150px; "> <br><br>

                            <img src="../images/pilihan1wu.png" style=" width: 250px; height: 80px; "> <br><br>
                        </h6>
                        <input type="radio" name="soal2" value="A" id="rb6" />

                        <label for="rb6">A</label>
                        <br>
                        <!-- ======================== -->
                        <input type="radio" name="soal2" value="B" id="rb7" />

                        <label for="rb7">B</label>
                        <br>
                        <!-- ======================== -->
                        <input type="radio" name="soal2" value="1" id="rb8" />

                        <label for="rb8">C</label>
                        <br>
                        <!-- ======================== -->
                        <input type="radio" name="soal2" value="D" id="rb9" />

                        <label for="rb9">D</label>
                        <br>
                        <!-- ======================== -->
                        <input type="radio" name="soal2" value="E" id="rb10" />

                        <label for="rb10">E</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <img src="../images/139.png" style=" width: 150px; height: 150px; "> <br><br>

                            <img src="../images/pilihan1wu.png" style=" width: 250px; height: 80px; "> <br><br>
                        </h6>
                        <label for="rb11">A</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal3" value="B" id="rb12" />

                        <label for="rb12">B</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal3" value="C" id="rb13" />

                        <label for="rb13">C</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal3" value="1" id="rb14" />

                        <label for="rb14">D</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal3" value="E" id="rb15" />

                        <label for="rb15">E</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <img src="../images/140.png" style=" width: 150px; height: 150px; "> <br><br>

                            <img src="../images/pilihan1wu.png" style=" width: 250px; height: 80px; "> <br><br>
                        </h6>
                        <input type="radio" name="soal4" value="A" id="rb16" />

                        <label for="rb16">A</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal4" value="B" id="rb17" />

                        <label for="rb17">B</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal4" value="C" id="rb18" />

                        <label for="rb18">C</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal4" value="D" id="rb19" />

                        <label for="rb19">D</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal4" value="1" id="rb20" />

                        <label for="rb20">E</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <img src="../images/141.png" style=" width: 150px; height: 150px; "> <br><br>

                            <img src="../images/pilihan1wu.png" style=" width: 250px; height: 80px; "> <br><br>
                        </h6>
                        <input type="radio" name="soal5" value="1" id="rb21" />

                        <label for="rb21">A</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal5" value="B" id="rb22" />

                        <label for="rb22">B</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal5" value="C" id="rb23" />

                        <label for="rb23">C</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal5" value="D" id="rb24" />

                        <label for="rb24">D</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal5" value="E" id="rb25" />

                        <label for="rb25">E</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <img src="../images/142.png" style=" width: 150px; height: 150px; "> <br><br>

                            <img src="../images/pilihan1wu.png" style=" width: 250px; height: 80px; "> <br><br>
                        </h6>
                        <input type="radio" name="soal6" value="A" id="rb26" />

                        <label for="rb26">A</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal6" value="B" id="rb27" />

                        <label for="rb27">B</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal6" value="1" id="rb28" />

                        <label for="rb28">C</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal6" value="D" id="rb29" />

                        <label for="rb29">D</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal6" value="E" id="rb30" />

                        <label for="rb30">E</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <img src="../images/144.png" style=" width: 150px; height: 150px; "> <br><br>

                            <img src="../images/pilihan1wu.png" style=" width: 250px; height: 80px; "> <br><br>
                        </h6>
                        <input type="radio" name="soal7" value="A" id="rb31" />

                        <label for="rb31">A</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal7" value="B" id="rb32" />

                        <label for="rb32">B</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal7" value="C" id="rb33" />

                        <label for="rb33">C</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal7" value="1" id="rb34" />

                        <label for="rb34">D</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal7" value="E" id="rb35" />

                        <label for="rb35">E</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <img src="../images/145.png" style=" width: 150px; height: 150px; "> <br><br>

                            <img src="../images/pilihan1wu.png" style=" width: 250px; height: 80px; "> <br><br>
                        </h6>
                        <input type="radio" name="soal8" value="A" id="rb36" />

                        <label for="rb36">A</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal8" value="B" id="rb37" />

                        <label for="rb37">B</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal8" value="1" id="rb38" />

                        <label for="rb38">C</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal8" value="D" id="rb39" />

                        <label for="rb39">D</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal8" value="E" id="rb40" />

                        <label for="rb40">E</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <img src="../images/146.png" style=" width: 150px; height: 150px; "> <br><br>

                            <img src="../images/pilihan1wu.png" style=" width: 250px; height: 80px; "> <br><br>
                        </h6>
                        <input type="radio" name="soal9" value="A" id="rb41" />

                        <label for="rb41">A</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal9" value="B" id="rb42" />

                        <label for="rb42">B</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal9" value="C" id="rb43" />

                        <label for="rb43">C</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal9" value="D" id="rb44" />

                        <label for="rb44">D</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal9" value="1" id="rb45" />

                        <label for="rb45">E</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <img src="../images/147.png" style=" width: 150px; height: 150px; "> <br><br>

                            <img src="../images/pilihan1wu.png" style=" width: 250px; height: 80px; "> <br><br>
                        </h6>
                        <input type="radio" name="soal10" value="1" id="rb46" />

                        <label for="rb46">A</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal10" value="B" id="rb47" />

                        <label for="rb47">B</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal10" value="C" id="rb48" />

                        <label for="rb48">C</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal10" value="D" id="rb49" />

                        <label for="rb49">D</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal10" value="E" id="rb50" />

                        <label for="rb50">E</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <img src="../images/148.png" style=" width: 150px; height: 150px; "> <br><br>

                            <img src="../images/pilihan1wu.png" style=" width: 250px; height: 80px; "> <br><br>
                        </h6>
                        <input type="radio" name="soal11" value="A" id="rb51" />

                        <label for="rb51">A</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal11" value="1" id="rb52" />

                        <label for="rb52">B</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal11" value="C" id="rb53" />

                        <label for="rb53">C</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal11" value="D" id="rb54" />

                        <label for="rb54">D</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal11" value="E" id="rb55" />

                        <label for="rb55">E</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <img src="../images/149.png" style=" width: 150px; height: 150px; "> <br><br>

                            <img src="../images/pilihan1wu.png" style=" width: 250px; height: 80px; "> <br><br>
                        </h6>
                        <input type="radio" name="soal12" value="A" id="rb56" />

                        <label for="rb56">A</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal12" value="B" id="rb57" />

                        <label for="rb57">B</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal12" value="C" id="rb58" />

                        <label for="rb58">C</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal12" value="1" id="rb59" />

                        <label for="rb59">D</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal12" value="E" id="rb60" />

                        <label for="rb60">E</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <img src="../images/150.png" style=" width: 150px; height: 150px; "> <br><br>

                            <img src="../images/pilihan1wu.png" style=" width: 250px; height: 80px; "> <br><br>
                        </h6>
                        <input type="radio" name="soal13" value="A" id="rb61" />

                        <label for="rb61">A</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" nname="soal13" value="B" id="rb62" />

                        <label for="rb62">B</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal13" value="C" id="rb63" />

                        <label for="rb63">C</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal13" value="D" id="rb64" />

                        <label for="rb64">D</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal13" value="1" id="rb65" />

                        <label for="rb65">E</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <img src="../images/151.png" style=" width: 150px; height: 150px; "> <br><br>

                            <img src="../images/pilihan1wu.png" style=" width: 250px; height: 80px; "> <br><br>
                        </h6>
                        <input type="radio" name="soal14" value="A" id="rb66" />

                        <label for="rb66">A</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal14" value="1" id="rb67" />

                        <label for="rb67">B</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal14" value="C" id="rb68" />

                        <label for="rb68">C</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal14" value="D" id="rb69" />

                        <label for="rb69">D</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal14" value="E" id="rb70" />

                        <label for="rb70">E</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <img src="../images/152.png" style=" width: 150px; height: 150px; "> <br><br>

                            <img src="../images/pilihan1wu.png" style=" width: 250px; height: 80px; "> <br><br>
                        </h6>
                        <input type="radio" name="soal15" value="A" id="rb71" />

                        <label for="rb71">A</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal15" value="B" id="rb72" />

                        <label for="rb72">B</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal15" value="C" id="rb73" />

                        <label for="rb73">C</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal15" value="1" id="rb74" />

                        <label for="rb74">D</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal15" value="E" id="rb75" />

                        <label for="rb75">E</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <img src="../images/153.png" style=" width: 150px; height: 150px; "> <br><br>

                            <img src="../images/pilihan1wu.png" style=" width: 250px; height: 80px; "> <br><br>
                        </h6>
                        <input type="radio" name="soal16" value="A" id="rb76" />

                        <label for="rb76">A</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal16" value="1" id="rb77" />

                        <label for="rb77">B</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal16" value="C" id="rb78" />

                        <label for="rb78">C</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal16" value="D" id="rb79" />

                        <label for="rb79">D</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal16" value="E" id="rb80" />

                        <label for="rb80">E</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <img src="../images/154.png" style=" width: 150px; height: 150px; "> <br><br>

                            <img src="../images/pilihan1wu.png" style=" width: 250px; height: 80px; "> <br><br>
                        </h6>
                        <input type="radio" name="soal17" value="1" id="rb81" />

                        <label for="rb81">A</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal17" value="B" id="rb82" />

                        <label for="rb82">B</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal17" value="C" id="rb83" />

                        <label for="rb83">C</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal17" value="D" id="rb84" />

                        <label for="rb84">D</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal17" value="E" id="rb85" />

                        <label for="rb85">E</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <img src="../images/155.png" style=" width: 150px; height: 150px; "> <br><br>

                            <img src="../images/pilihan1wu.png" style=" width: 250px; height: 80px; "> <br><br>
                        </h6>
                        <input type="radio" name="soal18" value="A" id="rb86" />

                        <label for="rb86">A</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal18" value="B" id="rb87" />

                        <label for="rb87">B</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal18" value="C" id="rb88" />

                        <label for="rb88">C</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal18" value="D" id="rb89" />

                        <label for="rb89">D</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal18" value="1" id="rb90" />

                        <label for="rb90">E</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <img src="../images/156.png" style=" width: 150px; height: 150px; "> <br><br>

                            <img src="../images/pilihan1wu.png" style=" width: 250px; height: 80px; "> <br><br>
                        </h6>
                        <input type="radio" name="soal19" value="A" id="rb91" />

                        <label for="rb91">A</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal19" value="1" id="rb92" />

                        <label for="rb92">B</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal19" value="C" id="rb93" />

                        <label for="rb93">C</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal19" value="D" id="rb94" />

                        <label for="rb94">D</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal19" value="E" id="rb95" />

                        <label for="rb95">E</label>
                    </div>

                    <div class="soal">

                        <h6>
                            <img src="../images/156.png" style=" width: 150px; height: 150px; "> <br><br>

                            <img src="../images/pilihan1wu.png" style=" width: 250px; height: 80px; "> <br><br>
                        </h6>
                        <input type="radio" name="soal20" value="A" id="rb96" />

                        <label for="rb96">A</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal20" value="B" id="rb97" />

                        <label for="rb97">B</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal20" value="1" id="rb98" />

                        <label for="rb98">C</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal20" value="D" id="rb99" />

                        <label for="rb99">D</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal20" value="E" id="rb100" />

                        <label for="rb100">E</label>
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
                <!-- button-->
                <div class="simpan">
                    <b>
                        <h6><button type="submit" value="submit"> SIMPAN JAWABAN</button></h6>
                        <br><br>
                    </b>
                </div>
            </form>

            <!-- menampilkan pop up-->
            <p type="button" id="autoKlik" onclick="alert('Waktu Habis silahkan Simpan Jawaban Anda Jika Tidak Disimpan Maka Tidak Akan Bisa Dinilai')">
            </p>


            <script>
                var button = document.getElementById("autoKlik");
                setInterval(function() {
                    button.click();
                }, 540000);
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