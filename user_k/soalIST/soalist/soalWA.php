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
    <!-- <link rel="stylesheet" href="../soal/assets/css/css.css"> -->
    <title>Soal WA</title>
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
    <!-- ======= Resume Section ======= -->
    <div class="container ">
    <center>
                <img src="../images/logo.png" alt="" srcset="" width="100px">
                <h3>SELAMAT MENGERJAKAN</h3>
                <h5>Kelompok Soal WA <br> nomer 21-40</h5>
            </center>           
            <form method="post" action="../proses/proses_wa.php">
            
            <hr>
            <div class="nama">
                <p>
                    <b>Nama : </b>
                    <select name='nama_user_k' id='nama_user_k' style="-webkit-appearance: none;">
                        <option value='<?php echo $_SESSION['nama_user_k']; ?>'> <?php echo $nama_user_k; ?> </option>

                    </select>
                </p>

                <p>
                    <b> ID -Kelompok : </b>
                    <select name='id_kelompok' id='id_kelompok' style="-webkit-appearance: none;">
                        <option value='<?php echo $_SESSION['id_kelompok']; ?>'> <?php echo $id_kelompok; ?> </option>

                    </select>
                </p>
            </div> <br>
            <form class="subsoal col-md-6">
                <fieldset class="section is-active">


                    <div class="soal">

                        <h6>21.</h6>
                        <input type="radio" name="soal1" value="A" id="rb1" />
                        <label for="rb1">A. kekuasaan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal1" value="B" id="rb2" />
                        <label for="rb2">B. bujukan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal1" value="C" id="rb3" />
                        <label for="rb3">C. kekayaan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal1" value="D" id="rb4" />
                        <label for="rb4">D. keberanian</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal1" value="E" id="rb5" />
                        <label for="rb5">E. kewibawaan</label>
                    </div>

                    <div class="soal">

                        <h6>22.</h6>
                        <input type="radio" name="soal2" value="A" id="rb6" />
                        
                        <label for="rb6">A. mengetuk</label>
                        <br>
                        <!-- ======================== -->
                        <input type="radio" name="soal2" value="B" id="rb7" />

                        <label for="rb7">B. memaki</label>
                        <br>
                        <!-- ======================== -->
                        <input type="radio" name="soal2" value="C" id="rb8" />

                        <label for="rb8">C. menjahit</label>
                        <br>
                        <!-- ======================== -->
                        <input type="radio" name="soal2" value="D" id="rb9" />

                        <label for="rb9">D. menggergaji</label>
                        <br>
                        <!-- ======================== -->
                        <input type="radio" name="soal2" value="E" id="rb10" />

                        <label for="rb10">E. memukul</label>
                    </div>

                    <div class="soal">

                        <h6>23.</h6>
                        <input type="radio" name="soal3" value="A" id="rb11" />

                        <label for="rb11">A. lebar</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal3" value="B" id="rb12" />

                        <label for="rb12">B. keliling</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal3" value="C" id="rb13" />

                        <label for="rb13">C. luas</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal3" value="D" id="rb14" />

                        <label for="rb14">D. isi</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal3" value="E" id="rb15" />

                        <label for="rb15">E. panjang</label>
                    </div>

                    <div class="soal">

                        <h6>24.</h6>
                        <input type="radio" name="soal4" value="A" id="rb16" />

                        <label for="rb16">A. mengikat</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal4" value="B" id="rb17" />

                        <label for="rb17">B. menyatukan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal4" value="C" id="rb18" />

                        <label for="rb18">C. melepaskan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal4" value="D" id="rb19" />

                        <label for="rb19">D. mengaitkan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal4" value="E" id="rb20" />

                        <label for="rb20">E. melekatkan</label>
                    </div>

                    <div class="soal">

                        <h6>25.</h6>
                        <input type="radio" name="soal5" value="A" id="rb21" />

                        <label for="rb21">A. arah</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal5" value="B" id="rb22" />

                        <label for="rb22">B. timur</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal5" value="C" id="rb23" />

                        <label for="rb23">C. perjalanan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal5" value="D" id="rb24" />

                        <label for="rb24">D. tujuan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal5" value="E" id="rb25" />

                        <label for="rb25">E. selatan</label>
                    </div>

                    <div class="soal">

                        <h6>26.</h6>
                        <input type="radio" name="soal6" value="A" id="rb26" />

                        <label for="rb26">A. jarak</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal6" value="B" id="rb27" />

                        <label for="rb27">B. perpisahan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal6" value="C" id="rb28" />

                        <label for="rb28">C. tugas</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal6" value="D" id="rb29" />

                        <label for="rb29">D. batas</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal6" value="E" id="rb30" />

                        <label for="rb30">E. perceraian</label>
                    </div>

                    <div class="soal">

                        <h6>27.</h6>
                        <input type="radio" name="soal7" value="A" id="rb31" />

                        <label for="rb31">A. saringan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal7" value="B" id="rb32" />

                        <label for="rb32">B. kelambu</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal7" value="C" id="rb33" />

                        <label for="rb33">C. payung</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal7" value="D" id="rb34" />

                        <label for="rb34">D. tapisan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal7" value="E" id="rb35" />

                        <label for="rb35">E. jala</label>
                    </div>

                    <div class="soal">

                        <h6>28. </h6>
                        <input type="radio" name="soal8" value="A" id="rb36" />

                        <label for="rb36">A. putih</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal8" value="B" id="rb37" />

                        <label for="rb37">B. pucat</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal8" value="C" id="rb38" />

                        <label for="rb38">C. buram</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal8" value="D" id="rb39" />

                        <label for="rb39">D. kasar</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal8" value="E" id="rb40" />

                        <label for="rb40">E. berkilauan</label>
                    </div>

                    <div class="soal">

                        <h6>29.</h6>
                        <input type="radio" name="soal9" value="A" id="rb41" />

                        <label for="rb41">A. otobis </label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal9" value="B" id="rb42" />

                        <label for="rb42">B. pesawat terbang </label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal9" value="C" id="rb43" />

                        <label for="rb43">C. sepeda motor</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal9" value="D" id="rb44" />

                        <label for="rb44">D. sepeda</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal9" value="E" id="rb45" />

                        <label for="rb45">E. kapal api</label>
                    </div>

                    <div class="soal">

                        <h6>30. </h6>
                        <input type="radio" name="soal10" value="A" id="rb46" />

                        <label for="rb46">A. biola</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal10" value="B" id="rb47" />

                        <label for="rb47">B. seruling</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal10" value="C" id="rb48" />

                        <label for="rb48">C. klarinet</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal10" value="D" id="rb49" />

                        <label for="rb49">D. terompet</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal10" value="E" id="rb50" />

                        <label for="rb50">E. saxophon</label>
                    </div>

                    <div class="soal">

                        <h6>31. </h6>
                        <input type="radio" name="soal11" value="A" id="rb51" />

                        <label for="rb51">A. bergelombang</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal11" value="B" id="rb52" />

                        <label for="rb52">B. kasar</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal11" value="C" id="rb53" />
                       
                        <label for="rb53">C. berduri</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal11" value="D" id="rb54" />

                        <label for="rb54">D. licin</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal11" value="E" id="rb55" />

                        <label for="rb55">E. lurus</label>
                    </div>

                    <div class="soal">

                        <h6>32. </h6>
                        <input type="radio" name="soal12" value="A" id="rb56" />

                        <label for="rb56">A. jam</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal12" value="B" id="rb57" />

                        <label for="rb57">B. kompas</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal12" value="C" id="rb58" />

                        <label for="rb58">C. penunjuk jalan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal12" value="D" id="rb59" />

                        <label for="rb59">D. bintang pari</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal12" value="E" id="rb60" />

                        <label for="rb60">E. arah</label>
                    </div>

                    <div class="soal">

                        <h6>33. </h6>
                        <input type="radio" name="soal13" value="A" id="rb61" />

                        <label for="rb61">A. kebijaksanaan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" nname="soal13" value="B" id="rb62" />

                        <label for="rb62">B. pendidikan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal13" value="C" id="rb63" />

                        <label for="rb63">C. perencanaan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal13" value="D" id="rb64" />

                        <label for="rb64">D. penempatan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal13" value="E" id="rb65" />

                        <label for="rb65">E. pengerahan</label>
                    </div>

                    <div class="soal">

                        <h6>34. </h6>
                        <input type="radio" name="soal14" value="A" id="rb66" />

                        <label for="rb66">A. bermotor</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal14" value="B" id="rb67" />

                        <label for="rb67">B. berjalan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal14" value="C" id="rb68" />

                        <label for="rb68">C. berlayar</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal14" value="D" id="rb69" />

                        <label for="rb69">D. bersepeda</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal14" value="E" id="rb70" />

                        <label for="rb70">E. berkuda</label>
                    </div>

                    <div class="soal">

                        <h6>35. </h6>
                        <input type="radio" name="soal15" value="A" id="rb71" />

                        <label for="rb71">A. gambar</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal15" value="B" id="rb72" />

                        <label for="rb72">B. lukisan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal15" value="C" id="rb73" />

                        <label for="rb73">C. potret</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal15" value="D" id="rb74" />

                        <label for="rb74">D. patung</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal15" value="E" id="rb75" />

                        <label for="rb75">E. ukiran</label>
                    </div>

                    <div class="soal">

                        <h6>36. </h6>
                        <input type="radio" name="soal16" value="A" id="rb76" />

                        <label for="rb76">A. panjang</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal16" value="B" id="rb77" />

                        <label for="rb77">B. lonjong</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal16" value="C" id="rb78" />

                        <label for="rb78">C. runcing</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal16" value="D" id="rb79" />

                        <label for="rb79">D. bulat</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal16" value="E" id="rb80" />

                        <label for="rb80">E. bersudut</label>
                    </div>

                    <div class="soal">

                        <h6>37. </h6>
                        <input type="radio" name="soal17" value="A" id="rb81" />

                        <label for="rb81">A. kunci</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal17" value="B" id="rb82" />

                        <label for="rb82">B. palang pintu</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal17" value="C" id="rb83" />

                        <label for="rb83">C. gerendel</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal17" value="D" id="rb84" />

                        <label for="rb84">D. gunting</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal17" value="E" id="rb85" />

                        <label for="rb85">E. obeng</label>
                    </div>

                    <div class="soal">

                        <h6>38. </h6>
                        <input type="radio" name="soal18" value="A" id="rb86" />

                        <label for="rb86">A. jembatan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal18" value="B" id="rb87" />

                        <label for="rb87">B. batas</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal18" value="C" id="rb88" />

                        <label for="rb88">C. perkawinan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal18" value="D" id="rb89" />

                        <label for="rb89">D. pagar</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal18" value="E" id="rb90" />

                        <label for="rb90">E. masyarakat</label>
                    </div>

                    <div class="soal">

                        <h6>39. </h6>
                        <input type="radio" name="soal19" value="A" id="rb91" />

                        <label for="rb91">A. mengetam</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal19" value="B" id="rb92" />
                        <label for="rb92">B. memahat </label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal19" value="C" id="rb93" />

                        <label for="rb93">C. mengasah</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal19" value="D" id="rb94" />

                        <label for="rb94">D. melicinkan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal19" value="E" id="rb95" />

                        <label for="rb95">E. menggosok</label>
                    </div>

                    <div class="soal">

                        <h6>40.</h6>
                        <input type="radio" name="soal20" value="A" id="rb96" />

                        <label for="rb96">A. batu</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal20" value="B" id="rb97" />

                        <label for="rb97">B. baja</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal20" value="C" id="rb98" />

                        <label for="rb98">C. bulu</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal20" value="D" id="rb99" />

                        <label for="rb99">D. karet</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal20" value="E" id="rb100" />

                        <label for="rb100">E. kayu</label>
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
                }, 100000);
            </script>
            <!-- end menampilkan pop up-->

        </form>

        <!--end button-->
        <div class="form-group">
            <input type="hidden" name="post_id" id="post_id" />
            <div id="autoSave"></div>
            <br><br>
        </div>

    </div>
    <footer class="bg-dark fixed-bottom">
        <div class="footer text-light text-center" style="height: 25px; ">&copy; HiProg</div>
    </footer>
</body>

</html>