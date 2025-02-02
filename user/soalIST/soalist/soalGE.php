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
    <title>Soal GE</title>
    
    
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
        <div class="clashilang"><span id="waktu">490</span></div> 
    <form method="post" action="../proses/proses_ge.php">
            <center>
                <img src="../images/logo.png" alt="" srcset="" width="80px">
                <h3>SELAMAT MENGERJAKAN</h3>
                <h5>Kelompok Soal GE <br> nomer 61-76</h5>
            </center>
            <hr>
            <div class="nama">
                    <p><b>Nama : </b><select name='nama_user' id='nama_user' style="-webkit-appearance: none;">
                            <option value='<?php echo $_SESSION['nama_user']; ?>'> <?php echo $nama_user; ?> </option>

                        </select></p>
                </div>
            <br>
            <form class="subsoal col-md-6">
                <fieldset class="section is-active">


                    <div class="soal">
                        <h6>61. Mawar – melati</h6>
                        <b>Jawab</b>: <input  name="soal1" id="soal1"placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">
                        <h6>62. Mata – telinga</h6>
                        <b>Jawab</b>: <input  name="soal2" id="soal2" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">
                        <h6>63. Gula – intan</h6>
                        <b>Jawab</b>: <input  name="soal3" id="soal3" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">
                        <h6>64. Hujan – salju</h6>
                        <b>Jawab</b>: <input  name="soal4" id="soal4" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">
                        <h6>65. Pengantar surat – telepon</h6>
                        <b>Jawab</b>: <input  name="soal5" id="soal5" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">
                        <h6>66. Kamera – kacamata</h6>
                        <b>Jawab</b>: <input  name="soal6" id="soal6" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">
                        <h6>67. Lambung – usus</h6>
                        <b>Jawab</b>: <input  name="soal7" id="soal7" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">
                        <h6>68. Banyak – sedikit</h6>
                        <b>Jawab</b>: <input  name="soal8" id="soal8" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">
                        <h6>69. Telur – benih</h6>
                        <b>Jawab</b>: <input  name="soal9" id="soal9" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">
                        <h6>70. Bendera – lencana</h6>
                        <b>Jawab</b>: <input  name="soal10" id="soal10" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">
                        <h6>71. Rumput – gajah</h6>
                        <b>Jawab</b>: <input  name="soal11" id="soal11" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">
                        <h6>72. Ember – kantong</h6>
                        <b>Jawab</b>: <input  name="soal12" id="soal12" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">
                        <h6>73. Awal – akhir</h6>
                        <b>Jawab</b>: <input  name="soal13" id="soal13" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">
                        <h6>74. Kikir – boros</h6>
                        <b>Jawab</b>: <input  name="soal14" id="soal14" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">
                        <h6>75. Penawaran – permintaan</h6>
                        <b>Jawab</b>: <input  name="soal15" id="soal15" placeholder="ketik jawaban disini" />
                    </div>

                    <div class="soal">
                        <h6>76. Atas – bawah</h6>
                        <b>Jawab</b>: <input  name="soal16" id="soal16" placeholder="ketik jawaban disini" />
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
                }, 480000);
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