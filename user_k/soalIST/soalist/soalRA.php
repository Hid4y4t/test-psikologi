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
    <title>Soal RA</title>
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
    <form method="post" action="../proses/proses_ra.php">
            <center>
                <img src="../images/logo.png" alt="" srcset="" width="80px">
                <h3>SELAMAT MENGERJAKAN</h3>
                <h5>Kelompok Soal RA <br> nomer 77-96</h5>
            </center>
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

                        <h6>77. Jika seorang anak memiliki 50 rupiah dan memberikan 15 rupiah kepada orang lain, berapa
                            rupiahkah yang masih tinggal padanya ?
                            <br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input  name="soal1" id="soal1"placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>78. Berapa km-kah yang dapat ditempuh oleh kereta api dalam waktu 7 jam, jika kecepatannya 40
                            km/jam ?
                            <br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input  name="soal2" id="soal2" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">
                        <h6>
                            79. 15 peti buah-buahan beratnya 250 kg dan setiap peti kosong beratnya 3 kg, berapakah berat
                            buah-buahan itu ?
                            <br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input  name="soal3" id="soal3" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            80. 15 peti buah-buahan beratnya 250 kg dan setiap peti kosong beratnya 3 kg, berapakah berat
                            buah-buahan itu ?
                            <br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input  name="soal4" id="soal4" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            81. 3 batang coklat harganya Rp. 5,-. Berapa batangkah yang dapat kita beli dengan Rp. 50,-
                            ?
                            <br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input  name="soal5" id="soal5" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            82. Seseorang dapat berjalan 1,75 m dalam waktu ¼ detik. Berapa meterkah yang dapat ia tempuh
                            dalam waktu 10 detik ?
                            <br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input  name="soal6" id="soal6" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            83. Jika sebuah batu terletak 15 m disebelah selatan dari sebatang pohon dan pohon itu berada
                            300 m di sebelah selatan dari sebuah rumah, berapa meterkah jarak antara batu dan rumah itu
                            ?
                            <br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input  name="soal7" id="soal7" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>

                            84. Jika 4 ½ m bahan sandang harganya Rp. 90,-. Berapa rupiahkah harganya 2 ½ m ?
                            <br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input  name="soal8" id="soal8" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            85. 7 orang dapat menyelesaikan sesuatu pekerjaan dalam 6 hari. Berapa orangkah yang
                            diperlukan untuk menyelesaikan pekerjaan itu dalam setengah hari ?
                            <br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input  name="soal9" id="soal9" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">

                        <h6>
                            86. Karena dipanaskan, kawat yang panjangnya 48 cm akan mengembang menjadi 52 cm. Setelah
                            pemanasan, berapakah panjangnya kawat yang berukuran 72 cm ?
                            <br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input  name="soal10" id="soal10" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            87. Suatu pabrik dapat menghasilkan 304 batang pinsil dalam waktu 8 jam. Berapa batangkah
                            dihasilkan dalam waktu setengah jam ?
                            <br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input  name="soal11" id="soal11" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            88. Untuk suatu campuran diperlukan 2 bagian perak dan 3 bagian timah. Berapa gramkah perak
                            yang diperlukan untuk mendapatkan campuran itu yang beratnya 15 gram ?
                            <br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input  name="soal12" id="soal12" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            89. Untuk setiap Rp. 3,- yang dimiliki Sidin, Hamid memiliki Rp. 5,-. Jika mereka bersama
                            mempunyai Rp. 120,- berapa rupiahkah yang dimiliki Hamid ?
                            <br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input  name="soal13" id="soal13" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">

                        <h6>
                            90. Mesin A menenun 60 m kain, sedangkan mesin B menenun 40 m. Berapa meterkah yang ditenun
                            mesin A, jika mesin B menenun 60 m ?
                            <br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input  name="soal14" id="soal14" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            91. Seseorang membelikan ⅒ dari uangnya untuk perangko dan 4 kali jumlah itu untuk alat
                            tulis. Sisa uangnya masih Rp. 60,-. Berapa rupiahkah uangnya semula ?
                            <br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input  name="soal15" id="soal15" placeholder="ketik jawaban disini" />
                       
                    </div>

                    <div class="soal">

                        <h6>
                            92. Didalam dua peti terdapat 43 buah piring. Di dalam peti yang satu terdapat 9 buah piring
                            lebih banyak dari pada di dalam peti yang lain. Berapa buah piring terdapat didalam peti yang
                            lebih kecil ?
                            <br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input  name="soal16" id="soal16" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            93. Suatu lembaran kain yang panjangnya 60 cm harus dibagi sedemikian rupa sehingga
                            panjangnya satu bagian ialah ⅔ dari bagian yang lain. Berapa panjangnya bagian yang terpendek
                            ?
                            <br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input  name="soal17" id="soal17" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            94. Suatu perusahaan mengekspor ¾ dari hasil produksinya dan menjual ⅘ dari sisa itu di dalam
                            Negeri. Berapa % kah hasil produksi yang masih tinggal ?
                            <br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input  name="soal18" id="soal18" placeholder="ketik jawaban disini" />

                    </div>

                    <div class="soal">

                        <h6>
                            95. Jika suatu botol berisi anggur hanya ⅞ bagian dan harganya ialah Rp. 84,-, berapakah
                            harga anggur itu jika botol itu hanya terisi ½ penuh ?
                            <br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input  name="soal19" id="soal19" placeholder="ketik jawaban disini" />
                        
                    </div>

                    <div class="soal">

                        <h6>
                            96. Di dalam suatu keluarga setiap anak perempuan mempunyai jumlah saudara laki-laki yang
                            sama dengan jumlah saudara perempuan dan setiap anak laki-laki mempunyai dua kali lebih banyak
                            saudara perempuan dari pada saudara laki-laki. Berapa anak laki-lakikah yang terdapat didalam
                            keluarga itu ?
                            <br> <b>(&nbsp;1&nbsp; 2 &nbsp;3&nbsp; 4 &nbsp;5&nbsp; 6&nbsp; 7&nbsp; 8 &nbsp;9 &nbsp;0 )</b>
                        </h6>
                        <b>Jawab</b>: <input  name="soal20" id="soal20" placeholder="ketik jawaban disini" />
                       
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
                }, 100000);
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