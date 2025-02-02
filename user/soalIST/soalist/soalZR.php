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
    <title>Soal ZR</title>
    

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
    $nama_kd_papi = $_SESSION["id_kd_papi"];



    ?>
    <!-- end session -->
    <!-- ======= Resume Section ======= -->
    <div class="container ">

<div class="clashilang"><span id="waktu">370</span></div> 

        <form method="post" action="../proses/proses_zr.php">
            <center>
                <img src="../images/logo.png" alt="" srcset="" width="80px">
                <h3>SELAMAT MENGERJAKAN</h3>
                <h5>Kelompok Soal ZR <br> nomer 98-115</h5>
            </center>
            <hr>
            <div class="nama">
                <p><b>Nama : </b><select name='nama_user' id='nama_user' style="appearance: none; -webkit-appearance: none;">
                        <option value='<?php echo $_SESSION['nama_user']; ?>'> <?php echo $nama_user; ?> </option>

                    </select></p>
            </div>
            <br><br>
            <form class="subsoal col-md-6">
                <fieldset class="section is-active">
                    <div class="soal">

                        <h6>
                            97.&nbsp;&nbsp; 6&nbsp;&nbsp; 9&nbsp;&nbsp; 12&nbsp;&nbsp; 15&nbsp;&nbsp; 18&nbsp;&nbsp; 21 &nbsp;&nbsp;24 &nbsp;?</label>
                            <br><br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input name="soal1" id="soal1" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            98. &nbsp;&nbsp;15 &nbsp;&nbsp;16&nbsp;&nbsp; 18 &nbsp;&nbsp;19 &nbsp;&nbsp;21&nbsp;&nbsp; 22 &nbsp;&nbsp;24&nbsp; ?</label>

                            <br><br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input name="soal2" id="soal2" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">
                        <h6>
                            99.&nbsp;&nbsp; 19&nbsp;&nbsp; 18 &nbsp;&nbsp;22 &nbsp;&nbsp;21&nbsp;&nbsp; 25&nbsp;&nbsp; 24 &nbsp;&nbsp;28 &nbsp;?</label>

                            <br><br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input name="soal3" id="soal3" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">

                        <h6>
                            100.&nbsp;&nbsp; 16&nbsp;&nbsp; 12 &nbsp;&nbsp;17 &nbsp;&nbsp;13&nbsp;&nbsp; 18 &nbsp;&nbsp;14 &nbsp;&nbsp;19&nbsp; ?</label>

                            <br>
                            <br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input name="soal4" id="soal4" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            101. &nbsp;&nbsp;2 &nbsp;&nbsp;4&nbsp;&nbsp; 8&nbsp;&nbsp;10 &nbsp;&nbsp;20&nbsp;&nbsp; 22 &nbsp;&nbsp;44 &nbsp;?</label>

                            <br><br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input name="soal5" id="soal5" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            102. &nbsp;&nbsp;15 &nbsp;&nbsp;13 &nbsp;&nbsp;16 &nbsp;&nbsp;12&nbsp;&nbsp; 17 &nbsp;&nbsp;11 &nbsp;&nbsp;18&nbsp; ?</label>

                            <br><br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input name="soal6" id="soal6" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            103. &nbsp;&nbsp; 25&nbsp;&nbsp; 22 &nbsp;&nbsp;11&nbsp;&nbsp; 33&nbsp;&nbsp; 30&nbsp;&nbsp; 15&nbsp;&nbsp; 45&nbsp; ?</label>

                            <br><br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input name="soal7" id="soal7" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>

                            104. &nbsp;&nbsp;49&nbsp;&nbsp; 51&nbsp;&nbsp; 54&nbsp;&nbsp; 27&nbsp;&nbsp; 9 &nbsp;&nbsp;11&nbsp;&nbsp; 14&nbsp; ?</label>

                            <br><br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input name="soal8" id="soal8" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">

                        <h6>
                            105. &nbsp;&nbsp;2&nbsp;&nbsp; 3 &nbsp;&nbsp;1&nbsp;&nbsp; 3&nbsp;&nbsp; 4 &nbsp;&nbsp;2&nbsp;&nbsp; 4&nbsp;?</label>

                            <br><br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input name="soal9" id="soal9" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            106. &nbsp;&nbsp; 19&nbsp;&nbsp; 17&nbsp;&nbsp; 20 &nbsp;&nbsp;16&nbsp;&nbsp; 21 &nbsp;&nbsp;15&nbsp;&nbsp; 22&nbsp; ?</label>

                            <br><br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input name="soal10" id="soal10" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            107. &nbsp;&nbsp; 94&nbsp;&nbsp; 92 &nbsp;&nbsp;46&nbsp;&nbsp; 44&nbsp;&nbsp; 22 &nbsp;&nbsp;20 &nbsp;&nbsp;10 &nbsp;?</label>
                            <br><br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input name="soal11" id="soal11" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            108. &nbsp;&nbsp; 5 &nbsp;&nbsp;8 &nbsp;&nbsp;9 &nbsp;&nbsp;8 &nbsp;&nbsp;11 &nbsp;&nbsp;12&nbsp;&nbsp; 11 &nbsp;?</label>
                            <br><br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b> <br>
                        </h6>
                        <b>Jawab</b>: <input name="soal12" id="soal12" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            109. &nbsp;&nbsp; 12&nbsp;&nbsp; 15 &nbsp;&nbsp;19&nbsp;&nbsp; 23&nbsp;&nbsp; 28&nbsp;&nbsp; 33&nbsp;&nbsp; 39&nbsp; ?</label>
                            <br><br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input name="soal13" id="soal13" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            110. &nbsp;&nbsp;7&nbsp;&nbsp; 5 &nbsp;&nbsp;10 &nbsp;&nbsp;7&nbsp;&nbsp; 21 &nbsp;&nbsp;17&nbsp;&nbsp; 68 &nbsp;?</label>
                            <br><br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input name="soal14" id="soal14" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            111. &nbsp;&nbsp; 11&nbsp;&nbsp; 15&nbsp;&nbsp; 18 &nbsp;&nbsp;9&nbsp;&nbsp; 13&nbsp;&nbsp;16&nbsp;&nbsp; 8 &nbsp;?</label>
                            <br><br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input name="soal15" id="soal15" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">

                        <h6>
                            112. &nbsp;&nbsp; 3&nbsp;&nbsp; 8&nbsp;&nbsp; 15&nbsp;&nbsp; 24&nbsp;&nbsp; 35&nbsp;&nbsp; 48 &nbsp;&nbsp;63 &nbsp;?</label>
                            <br><br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input name="soal16" id="soal16" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">

                        <h6>
                            113. &nbsp;&nbsp;4 &nbsp;&nbsp;5 &nbsp;&nbsp;7 &nbsp;&nbsp;4 &nbsp;&nbsp;8 &nbsp;&nbsp;13&nbsp;&nbsp; 7&nbsp; ?</label>
                            <br><br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input name="soal17" id="soal17" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">

                        <h6>
                            114. &nbsp;&nbsp; 8 &nbsp;&nbsp;5 &nbsp;&nbsp;15 &nbsp;&nbsp;18&nbsp;&nbsp; 6&nbsp;&nbsp; 3&nbsp;&nbsp; 9&nbsp; ?</label>
                            <br><br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input name="soal18" id="soal18" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">

                        <h6>
                            115. &nbsp;&nbsp;15 &nbsp;&nbsp;6 &nbsp;&nbsp;18&nbsp;&nbsp; 10 &nbsp;&nbsp;30&nbsp;&nbsp; 23&nbsp;&nbsp;69 &nbsp;?</label>
                            <br><br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input name="soal19" id="soal19" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">

                        <h6>
                            116). &nbsp;&nbsp;5&nbsp;&nbsp; 35 &nbsp;&nbsp;28 &nbsp;&nbsp;4&nbsp;&nbsp; 11 &nbsp;&nbsp;77 &nbsp;&nbsp;70&nbsp; ?

                            <br><br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input name="soal20" id="soal20" placeholder="ketik jawaban disini" />
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
                <div class="simpan">
                    <b>
                        <h6><button type="submit" value="submit"> SIMPAN JAWABAN</button></h6>
                        <br><br>
                    </b>
                </div>
            </form>
            <!-- button-->

            <!-- menampilkan pop up-->
            <p type="button" id="autoKlik" onclick="alert('Waktu Habis silahkan Simpan Jawaban Anda Jika Tidak Disimpan Maka Tidak Akan Bisa Dinilai')">
            </p>


            <script>
                var button = document.getElementById("autoKlik");
                setInterval(function() {
                    button.click();
                }, 600000);
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