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
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <!-- <link rel="stylesheet" href="../soal/assets/css/style.css"> -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="../soal/assets/css/css.css"> -->
    <title>Soal SE</title>
</head>

<body>
    <!-- ======= Resume Section ======= -->
    <div class="container ">
        <form method="post" action="simpan.php">
            <center>
                <img src="../images/logo.png" alt="" srcset="" width="80px">
                <h3>Silahkan Hapalkan kata-kata berikut</h3>
                <h5>waktu anda menghapal 3 menit </h5>
            </center>
            <hr>
            <br><br>
            <section id="resume" class="resume">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--mengatur berpindah halaman-->

                            <script type="text/javascript">
                                setTimeout(
                                    function() {
                                        window.location = "soalME.php"
                                    },
                                    180000); // waktu tunggu atau delay
                            </script>

                            <!--membuat waktu-->

                            <!-- Start header -->

                            <div id="overviews" class="section lb">
                                <div class="container">

                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            var detik = 60;
                                            var menit = 2;

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




                                    <center>
                                        <table border="0">
                                            <tr>
                                                <td>bunga&nbsp;&nbsp;</td>
                                                <td>:&nbsp;&nbsp;&nbsp;Soka – Larat – Flamboyan – Yasmin - Dahlia</td>
                                            </tr>
                                            <tr>
                                                <td>PERKAKAS</td>
                                                <td>:&nbsp;&nbsp;&nbsp;Wajan – Jarum – Kikir – Cangkul - Palu</td>
                                            </tr>
                                            <tr>
                                                <td>BURUNG</td>
                                                <td>:&nbsp;&nbsp;&nbsp;Itik – Elang – Walet – Tekukur - Nuri</td>
                                            </tr>
                                            <tr>
                                                <td>KESENIAN</td>
                                                <td>:&nbsp;&nbsp;&nbsp;Quintet – Arca – Opera – Gamelan - Ukiran</td>
                                            </tr>
                                            <tr>
                                                <td>BINATANG</td>
                                                <td>:&nbsp;&nbsp;&nbsp;Musang – Rusa – Beruang – Zebra – Harimau</td>
                                            </tr>
                                        </table>
                                        <br><br>
                                    </center>
                                </div><!-- end container -->
                            </div><!-- end section -->

          
                           
                        </div>
                    </div>

                </div>
            </section><!-- End Resume Section -->

          

           
        </form>

        <!--end button-->
    </div>
</body>

</html>