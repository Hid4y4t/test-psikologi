<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../images/logo.png" rel="icon">
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
    <title>Soal AN</title>
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
        <div class="clashilang"><span id="waktu">430</span></div> 
        
        <form method="post" action="../proses/proses_an.php">
            <center>
                <img src="../images/logo.png" alt="" srcset="" width="80px">
                <h3>SELAMAT MENGERJAKAN</h3>
                <h5>Kelompok Soal AN <br> nomer 41-60</h5>
            </center>
            <hr>
            <div class="nama">
                <p><b>Nama : </b><select name='nama_user' id='nama_user' style="-webkit-appearance: none;">
                        <option value='<?php echo $_SESSION['nama_user']; ?>'> <?php echo $nama_user; ?> </option>

                    </select></p>
            </div> <br>
            <form class="subsoal col-md-6">
                <fieldset class="section is-active">


                    <div class="soal">

                        <h6>41. Menemukan : menghilangkan = mengingat : ?</h6>
                        <input type="radio" name="soal1" value="A" id="rb1" />

                        <label for="rb1">A. menghapal</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal1" value="B" id="rb2" />

                        <label for="rb2">B. mengenai</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal1" value="1" id="rb3" />

                        <label for="rb3">C. melupakan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal1" value="D" id="rb4" />

                        <label for="rb4">D. berpikir</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal1" value="E" id="rb5" />

                        <label for="rb5">E. memimpikan</label>
                    </div>

                    <div class="soal">

                        <h6>42. Bunga : jambangan = burung : ?</h6>
                        <input type="radio" name="soal2" value="A" id="rb6" />

                        <label for="rb6">A. sarang</label>
                        <br>
                        <!-- ======================== -->
                        <input type="radio" name="soal2" value="B" id="rb7" />

                        <label for="rb7">B. langit</label>
                        <br>
                        <!-- ======================== -->
                        <input type="radio" name="soal2" value="C" id="rb8" />

                        <label for="rb8">C. pagar</label>
                        <br>
                        <!-- ======================== -->
                        <input type="radio" name="soal2" value="D" id="rb9" />

                        <label for="rb9">D. pohon</label>
                        <br>
                        <!-- ======================== -->
                        <input type="radio" name="soal2" value="1" id="rb10" />

                        <label for="rb10">E. sangkar</label>
                    </div>

                    <div class="soal">

                        <h6>43.Kereta api : rel = otobis : ?</h6>
                        <input type="radio" name="soal3" value="A" id="rb11" />

                        <label for="rb11">A. roda</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal3" value="B" id="rb12" />

                        <label for="rb12">B. poros</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal3" value="C" id="rb13" />

                        <label for="rb13">C. ban</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal3" value="1" id="rb14" />

                        <label for="rb14">D. jalan raya</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal3" value="E" id="rb15" />

                        <label for="rb15">E. kecepatan</label>
                    </div>

                    <div class="soal">

                        <h6>44. Perak : emas = cincin : ?</h6>
                        <input type="radio" name="soal4" value="A" id="rb16" />

                        <label for="rb16">A. arloji</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal4" value="B" id="rb17" />

                        <label for="rb17">B. berlian</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal4" value="C" id="rb18" />

                        <label for="rb18">C. permata</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal4" value="1" id="rb19" />

                        <label for="rb19">D. gelang</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal4" value="E" id="rb20" />

                        <label for="rb20">E. platina</label>
                    </div>

                    <div class="soal">

                        <h6>45. Lingkaran : bola = bujur sangkar : ?</h6>
                        <input type="radio" name="soal5" value="A" id="rb21" />

                        <label for="rb21">A. bentuk</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal5" value="B" id="rb22" />
                        <label for="rb22">B. gambar</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal5" value="C" id="rb23" />

                        <label for="rb23">C. segi empat </label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal5" value="1" id="rb24" />

                        <label for="rb24">D. kubus</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal5" value="E" id="rb25" />

                        <label for="rb25">E. piramida</label>
                    </div>

                    <div class="soal">

                        <h6>46. Saran : keputusan = merundingkan : ?</h6>
                        <input type="radio" name="soal6" value="A" id="rb26" />

                        <label for="rb26">A. menawarkan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal6" value="1" id="rb27" />

                        <label for="rb27">B. menentukan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal6" value="C" id="rb28" />

                        <label for="rb28">C. menilai</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal6" value="D" id="rb29" />

                        <label for="rb29">D. menimbang</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal6" value="E" id="rb30" />

                        <label for="rb30">E. merenungkan</label>
                    </div>

                    <div class="soal">

                        <h6>47. Lidah : asam = hidung : ?</h6>
                        <input type="radio" name="soal7" value="A" id="rb31" />

                        <label for="rb31">A. mencium</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal7" value="B" id="rb32" />

                        <label for="rb32">B. bernapas</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal7" value="C" id="rb33" />

                        <label for="rb33">C. mengecap</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal7" value="1" id="rb34" />

                        <label for="rb34">D. tengik</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal7" value="E" id="rb35" />

                        <label for="rb35">E. asin</label>
                    </div>

                    <div class="soal">

                        <h6>48. Darah : pembuluh = air : ?</h6>
                        <input type="radio" name="soal8" value="A" id="rb36" />

                        <label for="rb36">A. pintu air</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal8" value="1" id="rb37" />
                        <label for="rb37">B. sungai</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal8" value="C" id="rb38" />
                        <label for="rb38">C. talang</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal8" value="D" id="rb39" />
                        <label for="rb39">D. hujan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal8" value="E" id="rb40" />
                        <label for="rb40">E. ember</label>
                    </div>

                    <div class="soal">

                        <h6>49. Saraf : penyalur = pupil : ?</h6>
                        <input type="radio" name="soal9" value="A" id="rb41" />

                        <label for="rb41">A. penyinaran </label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal9" value="B" id="rb42" />

                        <label for="rb42">B. mata </label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal9" value="C" id="rb43" />

                        <label for="rb43">C. melihat</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal9" value="D" id="rb44" />

                        <label for="rb44">D. cahaya</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal9" value="1" id="rb45" />

                        <label for="rb45">E. pelindung</label>
                    </div>

                    <div class="soal">

                        <h6>50. Pengantar surat : pengantar telegram = pandai besi : ?</h6>
                        <input type="radio" name="soal10" value="A" id="rb46" />

                        <label for="rb46">A. palu godam</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal10" value="B" id="rb47" />

                        <label for="rb47">B. pedangan besi</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal10" value="C" id="rb48" />

                        <label for="rb48">C. api</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal10" value="1" id="rb49" />

                        <label for="rb49">D. tukang emas</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal10" value="E" id="rb50" />

                        <label for="rb50">E. besi tempa</label>
                    </div>

                    <div class="soal">

                        <h6>51. Buta : warna = tuli : ?</h6>
                        <input type="radio" name="soal11" value="A" id="rb51" />

                        <label for="rb51">A. pendengaran</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal11" value="B" id="rb52" />

                        <label for="rb52">B. mendengar</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal11" value="1" id="rb53" />

                        <label for="rb53">C. nada</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal11" value="D" id="rb54" />

                        <label for="rb54">D. kata</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal11" value="E" id="rb55" />

                        <label for="rb55">E. telinga</label>
                    </div>

                    <div class="soal">

                        <h6>52. Makanan : bumbu = ceramah : ?</h6>
                        <input type="radio" name="soal12" value="A" id="rb56" />

                        <label for="rb56">A. penghinaan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal12" value="B" id="rb57" />

                        <label for="rb57">B. pidato</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal12" value="1" id="rb58" />

                        <label for="rb58">C. kelakar</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal12" value="D" id="rb59" />

                        <label for="rb59">D. kesan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal12" value="E" id="rb60" />

                        <label for="rb60">E. ayat</label>
                    </div>

                    <div class="soal">

                        <h6>53. Marah : emosi = duka cita : ?</h6>
                        <input type="radio" name="soal13" value="A" id="rb61" />

                        <label for="rb61">A. suka cita</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" nname="soal13" value="B" id="rb62" />

                        <label for="rb62">B. sakit hati</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal13" value="1" id="rb63" />

                        <label for="rb63">C. suasana hati</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal13" value="D" id="rb64" />

                        <label for="rb64">D. sedih</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal13" value="E" id="rb65" />

                        <label for="rb65">E. rindu</label>
                    </div>

                    <div class="soal">

                        <h6>54. Mantel : jubah = wool : ?</h6>
                        <input type="radio" name="soal14" value="A" id="rb66" />

                        <label for="rb66">A. bahan sandang</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal14" value="B" id="rb67" />

                        <label for="rb67">B. domba</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal14" value="1" id="rb68" />

                        <label for="rb68">C. sutra</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal14" value="D" id="rb69" />

                        <label for="rb69">D. jas</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal14" value="E" id="rb70" />

                        <label for="rb70">E. tekstil</label>
                    </div>

                    <div class="soal">

                        <h6>55. Ketinggian puncak : tekanan udara = ketinggian nada : ?</h6>
                        <input type="radio" name="soal15" value="A" id="rb71" />

                        <label for="rb71">A. garpu tala</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal15" value="B" id="rb72" />

                        <label for="rb72">B. sopran</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal15" value="C" id="rb73" />

                        <label for="rb73">C. nyanyian</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal15" value="1" id="rb74" />

                        <label for="rb74">D. panjang senar</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal15" value="E" id="rb75" />

                        <label for="rb75">E. suara</label>
                    </div>

                    <div class="soal">

                        <h6>56. Negara : revolusi = hidup : ?</h6>
                        <input type="radio" name="soal16" value="A" id="rb76" />

                        <label for="rb76">A. biologi</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal16" value="B" id="rb77" />

                        <label for="rb77">B. keturunan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal16" value="1" id="rb78" />

                        <label for="rb78">C. mutasi</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal16" value="D" id="rb79" />

                        <label for="rb79">D. seleksi</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal16" value="E" id="rb80" />

                        <label for="rb80">E. ilmu hewan</label>
                    </div>

                    <div class="soal">

                        <h6>57. Kekurangan : penemuan = panas : ?</h6>
                        <input type="radio" name="soal17" value="A" id="rb81" />

                        <label for="rb81">A. halus</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal17" value="B" id="rb82" />

                        <label for="rb82">B. khatulistiwa</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal17" value="1" id="rb83" />

                        <label for="rb83">C. es </label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal17" value="D" id="rb84" />

                        <label for="rb84">D. matahari</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal17" value="E" id="rb85" />

                        <label for="rb85">E. dingin</label>
                    </div>

                    <div class="soal">

                        <h6>58. Kayu : diketam = besi : ?</h6>
                        <input type="radio" name="soal18" value="A" id="rb86" />

                        <label for="rb86">A. dipalu</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal18" value="B" id="rb87" />

                        <label for="rb87">B. digergaji</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal18" value="C" id="rb88" />

                        <label for="rb88">C. dituang</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal18" value="D" id="rb89" />

                        <label for="rb89">D. dikikir</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal18" value="1" id="rb90" />

                        <label for="rb90">E. ditempa</label>
                    </div>

                    <div class="soal">

                        <h6>59. Olahragawan : lembing = cendikiawan : ?</h6>
                        <input type="radio" name="soal19" value="A" id="rb91" />

                        <label for="rb91">A. perpustakaan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal19" value="B" id="rb92" />

                        <label for="rb92">B. penelitian</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal19" value="C" id="rb93" />

                        <label for="rb93">C. karya</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal19" value="D" id="rb94" />

                        <label for="rb94">D. studi</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal19" value="1" id="rb95" />

                        <label for="rb95">E. mikroskop</label>
                    </div>

                    <div class="soal">

                        <h6>60. Keledai : kuda pacuan = pembakaran : ?</h6>
                        <input type="radio" name="soal20" value="A" id="rb96" />

                        <label for="rb96">A. pemadam api</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal20" value="B" id="rb97" />
                        
                        <label for="rb97">B. obor</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal20" value="C" id="rb98" />

                        <label for="rb98">C. letupan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal20" value="D" id="rb99" />

                        <label for="rb99">D. korek api</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal20" value="1" id="rb100" />

                        <label for="rb100">E. lautan api</label>
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
                }, 420000);
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