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
        .clashilang {
            visibility: hidden;
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
        <div class="clashilang"><span id="waktu">370</span></div>

        <center>
            <img src="../images/logo.png" alt="" srcset="" width="80px">
            <h3>SELAMAT MENGERJAKAN</h3>
            <h5>Kelompok Soal SE <br> nomer 1-20</h5>
        </center>
        <hr>
        <form method="post" action="../proses/proses_se.php">


            <form class="subsoal col-md-6">
                <div class="nama">
                    <p><b>Nama : </b><select name='nama_user' id='nama_user' style="-webkit-appearance: none;">
                            <option value='<?php echo $_SESSION['nama_user']; ?>'> <?php echo $nama_user; ?> </option>

                        </select></p>
                </div>
                <fieldset class="section is-active">
                    <div class="soal">
                        <h6>1. Pengaruh seseorang terhadap orang lain seharusnya bergantung pada .....</h6>
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
                        <input type="radio" name="soal1" value="1" id="rb5" />
                        <label for="rb5">E. kewibawaan</label>
                    </div>
                    <!-- SSSSSSS -->
                    <div class="soal">
                        <h6>2. Lawan “hemat” ialah ..........</h6>
                        <input type="radio" name="soal2" value="A" id="rb6" />
                        <label for="rb6">A. murah</label>
                        <br>
                        <!-- ======================== -->
                        <input type="radio" name="soal2" value="B" id="rb7" />
                        <label for="rb7">B. kikir</label>
                        <br>
                        <!-- ======================== -->
                        <input type="radio" name="soal2" value="1" id="rb8" />
                        <label for="rb8">C. boros</label>
                        <br>
                        <!-- ======================== -->
                        <input type="radio" name="soal2" value="D" id="rb9" />
                        <label for="rb9">D. bernilai</label>
                        <br>
                        <!-- ======================== -->
                        <input type="radio" name="soal2" value="E" id="rb10" />
                        <label for="rb10">E. kaya</label>
                    </div>
                    <!-- SSSSSSSSSSSSSSSSS -->

                    <div class="soal">

                        <h6>3. .......... tidak termasuk cuaca</h6>
                        <input type="radio" name="soal3" value="A" id="rb11" />
                        <label for="rb11">A. angin puyuh</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal3" value="B" id="rb12" />
                        <label for="rb12">B. halilintar</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal3" value="C" id="rb13" />
                        <label for="rb13">C. salju</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal3" value="1" id="rb14" />
                        <label for="rb14">D. gempa bumi</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal3" value="E" id="rb15" />
                        <label for="rb15">E. kabut</label>
                    </div>

                    <div class="soal">

                        <h6>4. Lawannya “setia” ialah ..........</h6>
                        <input type="radio" name="soal4" value="A" id="rb16" />
                        <label for="rb16">A. cinta</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal4" value="B" id="rb17" />
                        <label for="rb17">B. benci</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal4" value="C" id="rb18" />
                        <label for="rb18">C. persahabatan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal4" value="1" id="rb19" />
                        <label for="rb19">D. khianat</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal4" value="E" id="rb20" />
                        <label for="rb20">E. permusuhan</label>
                    </div>

                    <div class="soal">

                        <h6>5. Seekor kuda selalu mempunyai ..........</h6>
                        <input type="radio" name="soal5" value="A" id="rb21" />
                        <label for="rb21">A. kandang</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal5" value="B" id="rb22" />
                        <label for="rb22">B. ladam</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal5" value="C" id="rb23" />
                        <label for="rb23">C. pelana</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal5" value="1" id="rb24" />
                        <label for="rb24">D. kuku</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal5" value="E" id="rb25" />
                        <label for="rb25">E. surai</label>
                    </div>

                    <div class="soal">

                        <h6>6. Seorang paman .......... lebih tua dari kemenakannya.</h6>
                        <input type="radio" name="soal6" value="A" id="rb26" />
                        <label for="rb26">A. jarang</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal6" value="1" id="rb27" />
                        <label for="rb27">b. biasanya</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal6" value="C" id="rb28" />
                        <label for="rb28">C. selalu</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal6" value="D" id="rb29" />
                        <label for="rb29">D. tidak pernah</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal6" value="E" id="rb30" />
                        <label for="rb30">E. kadang-kadang</label>
                    </div>

                    <div class="soal">

                        <h6>7. Pada jumlah yang sama, nilai kalori yang tertinggi terdapat pada ..........</h6>
                        <input type="radio" name="soal7" value="A" id="rb31" />
                        <label for="rb31">A. ikan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal7" value="B" id="rb32" />
                        <label for="rb32">B. daging</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal7" value="1" id="rb33" />
                        <label for="rb33">C. lemak</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal7" value="D" id="rb34" />
                        <label for="rb34">D. tahu</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal7" value="E" id="rb35" />
                        <label for="rb35">E. sayuran</label>
                    </div>

                    <div class="soal">

                        <h6>8. Pada suatu pertandingan selalu terdapat ..........</h6>
                        <input type="radio" name="soal8" value="1" id="rb36" />
                        <label for="rb36">A. lawan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal8" value="B" id="rb37" />
                        <label for="rb37">B. wasit</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal8" value="C" id="rb38" />
                        <label for="rb38">C. penonton</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal8" value="D" id="rb39" />
                        <label for="rb39">D. sorak</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal8" value="E" id="rb40" />
                        <label for="rb40">E. kemenangan</label>
                    </div>

                    <div class="soal">

                        <h6>9. Suatu pernyataan yang belum dipastikan dikatakan sebagai pernyataan yang
                            ..........</h6>
                        <input type="radio" name="soal9" value="A" id="rb41" />
                        <label for="rb41">A. paradoks </label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal9" value="B" id="rb42" />
                        <label for="rb42">B. tergesa-gesa </label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal9" value="C" id="rb43" />
                        <label for="rb43">C. mempunyai arti rangkap</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal9" value="D" id="rb44" />
                        <label for="rb44">D. menyesatkan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal9" value="1" id="rb45" />
                        <label for="rb45">E. hipotesis</label>
                    </div>

                    <div class="soal">

                        <h6>10. Pada sepatu selalu terdapat ..........</h6>
                        <input type="radio" name="soal10" value="A" id="rb46" />
                        <label for="rb46">A. kulit</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal10" value="1" id="rb47" />
                        <label for="rb47">B. sol</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal10" value="C" id="rb48" />
                        <label for="rb48">C. tali sepatu</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal10" value="D" id="rb49" />
                        <label for="rb49">D. gesper</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal10" value="E" id="rb50" />
                        <label for="rb50">E. lidah</label>
                    </div>

                    <div class="soal">

                        <h6>11. Suatu .......... tidak menyangkut persoalan pencegahan kecelakaan.</h6>
                        <input type="radio" name="soal11" value="A" id="rb51" />
                        <label for="rb51">A. lampu lalu lintas</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal11" value="B" id="rb52" />
                        <label for="rb52">B. kacamata pelindung</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal11" value="1" id="rb53" />
                        <label for="rb53">C. kotak PPPK</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal11" value="D" id="rb54" />
                        <label for="rb54">D. tanda peringatan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal11" value="E" id="rb55" />
                        <label for="rb55">E. palang kereta api</label>
                    </div>

                    <div class="soal">

                        <h6>12. Lembar kertas uang Rp. 50.000,- mempunyai panjang .......... cm.</h6>
                        <input type="radio" name="soal12" value="A" id="rb56" />
                        <label for="rb56">A. 20</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal12" value="B" id="rb57" />
                        <label for="rb57">B. 29</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal12" value="C" id="rb58" />
                        <label for="rb58">C. 17</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal12" value="1" id="rb59" />
                        <label for="rb59">D. 15</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal12" value="E" id="rb60" />
                        <label for="rb60">E. 24</label>
                    </div>

                    <div class="soal">

                        <h6>13. Seseorang yang bersikap menyangsikan setiap kemajuan ialah seorang yang
                            ..........</h6>
                        <input type="radio" name="soal13" value="A" id="rb61" />
                        <label for="rb61">A. demokratis</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" nname="soal13" value="B" id="rb62" />
                        <label for="rb62">B. radikal</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal13" value="C" id="rb63" />
                        <label for="rb63">C. liberal</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal13" value="1" id="rb64" />
                        <label for="rb64">D. konservatif</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal13" value="E" id="rb65" />
                        <label for="rb65">E. anarkis</label>
                    </div>

                    <div class="soal">

                        <h6>14. Lawannya “tidak pernah” ialah ..........</h6>
                        <input type="radio" name="soal14" value="A" id="rb66" />
                        <label for="rb66">A. sering</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal14" value="B" id="rb67" />
                        <label for="rb67">B. kadang-kadang</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal14" value="C" id="rb68" />
                        <label for="rb68">C. jarang</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal14" value="D" id="rb69" />
                        <label for="rb69">D. kerap sekali</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal14" value="1" id="rb70" />
                        <label for="rb70">E. selalu</label>
                    </div>

                    <div class="soal">

                        <h6>15. Jarak antara Jakarta - Surabaya kira-kira ..........</h6>
                        <input type="radio" name="soal15" value="A" id="rb71" />
                        <label for="rb71">A. 650</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal15" value="B" id="rb72" />
                        <label for="rb72">B. 1000</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal15" value="1" id="rb73" />
                        <label for="rb73">C. 800</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal15" value="D" id="rb74" />
                        <label for="rb74">D. 600</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal15" value="E" id="rb75" />
                        <label for="rb75">E. 950</label>
                    </div>

                    <div class="soal">

                        <h6>16. Untuk dapat membuat nada yang rendah dan mendalam, kita memerlukan banyak
                            ..........</h6>
                        <input type="radio" name="soal16" value="1" id="rb76" />
                        <label for="rb76">A. kekuatan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal16" value="B" id="rb77" />
                        <label for="rb77">B. peranan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal16" value="C" id="rb78" />
                        <label for="rb78">C. ayunan</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal16" value="D" id="rb79" />
                        <label for="rb79">D. berat</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal16" value="E" id="rb80" />
                        <label for="rb80">E. suara</label>
                    </div>

                    <div class="soal">

                        <h6>17. Ayah .......... lebih berpengalaman dari pada anaknya.</h6>
                        <input type="radio" name="soal17" value="A" id="rb81" />
                        <label for="rb81">A. selalu</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal17" value="1" id="rb82" />
                        <label for="rb82">B. biasanya</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal17" value="C" id="rb83" />
                        <label for="rb83">C. jauh</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal17" value="D" id="rb84" />
                        <label for="rb84">D. jarang</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal17" value="E" id="rb85" />
                        <label for="rb85">E. pada dasarnya</label>
                    </div>

                    <div class="soal">

                        <h6>18. Di antara kota-kota berikut ini, maka kota .......... letaknya paling selatan.</h6>
                        <input type="radio" name="soal18" value="A" id="rb86" />
                        <label for="rb86">A. Jakarta</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal18" value="1" id="rb87" />
                        <label for="rb87">B. Bandung</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal18" value="C" id="rb88" />
                        <label for="rb88">C. Cirebon</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal18" value="D" id="rb89" />
                        <label for="rb89">D. Semarang</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal18" value="E" id="rb90" />
                        <label for="rb90">E. Surabaya</label>
                    </div>

                    <div class="soal">

                        <h6>19. Jika kita mengetahui jumlah presentase nomor-nomor lotere yang tidak menang, maka kita
                            dapat
                            menghitung ..........</h6>
                        <input type="radio" name="soal19" value="A" id="rb91" />
                        <label for="rb91">A. jumlah nomor yang menang</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal19" value="B" id="rb92" />
                        <label for="rb92">B. pajak lotere </label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal19" value="1" id="rb93" />
                        <label for="rb93">C. kemungkinan menang</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal19" value="D" id="rb94" />
                        <label for="rb94">D. jumlah pengikut</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal19" value="E" id="rb95" />
                        <label for="rb95">E. tinggi keuntungan</label>
                    </div>

                    <div class="soal">

                        <h6>20. Seorang anak yang berumur 10 tahun tingginya rata-rata .......... cm.</h6>
                        <input type="radio" name="soal20" value="A" id="rb96" />
                        <label for="rb96">A. 150</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal20" value="1" id="rb97" />
                        <label for="rb97">B. 130</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal20" value="C" id="rb98" />
                        <label for="rb98">C. 110</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal20" value="D" id="rb99" />
                        <label for="rb99">D. 105</label>
                        <br>
                        <!-- =================== -->
                        <input type="radio" name="soal20" value="E" id="rb100" />
                        <label for="rb100">E. 115</label>
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
                }, 360000);
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