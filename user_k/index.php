<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Soal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
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
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
  <!-- <link rel="stylesheet" href="../soal/assets/css/css.css"> -->
</head>

<body>
  <!-- session -->
  <?php
session_start();

if (!isset($_SESSION["username_user_k"])) {
	echo "Anda harus login dulu <br><a href='../login_k/index.php'>Klik disini</a>";
	exit;
}

$id_user_k=$_SESSION["id_user_k"];
$username_k=$_SESSION["username_user_k"];
$nama_user_k=$_SESSION["nama_user_k"];
$id_kelompok=$_SESSION["id_kelompok"];
$id_kd_ist = $_SESSION["id_kd_ist"] ;
$id_kd_msdt=$_SESSION["id_kd_msdt"];
$nama_kd_papi=$_SESSION["id_kd_papi"] ;



?>
<!-- end session -->
  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <!-- <i class="bi bi-list mobile-nav-toggle d-xl-none"></i> -->
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="../login/logout.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Logout</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->
  </header><!-- End Header -->

  <div class="mobile-version">
    <nav id="mobile2" class="navbar2 fixed-bottom">
      <div class="menu-bawah">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"> <img src="assets/img/house.png" width="25px" alt="" srcset=""> <br><span>Home</span></a></li>
          <li><a href="../login/logout.php" class="nav-link scrollto"><img src="assets/img/login.png" width="25px" alt="" srcset=""> <br><span>Logout</span></a></li>
        </ul>
      </div>
    </nav>
  </div>


  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">
      <img src="assets/img/logo.png" alt="" width="40px"> <br>
      <P>Selamat Datang,<b class="text-danger"> <?php echo $_SESSION['nama_user_k']; ?>.!</b> </P>
      <div class="section-title">
        <p>Pilih Test Sesuai yang Diintruksikan</p>
      </div>
      <center>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 " data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-file"></i>
              </div>
              <h4>Test IST</h4>
              <p>Kerjakan soal secara jujur dan teliti</p>
              <br>

              
              <small class="readmore">
                <a href="soalIST/subsoalIST.php" > <button class="<?php echo $_SESSION['id_kd_ist']; ?>" <?php echo $_SESSION['id_kd_ist']; ?>>Mulai</button></a>
                <br>
              </small>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-layer"></i>
              </div>
              <h4>Test PAPI</h4>
              <p>Kerjakan soal secara jujur dan teliti</p>
              <br>
              <small class="readmore">
              <a href="soalPAPI/panduanPAPI.php"><button class="<?php echo $_SESSION['id_kd_papi']; ?>" <?php echo $_SESSION['id_kd_papi']; ?>>Mulai</button></a>
              </small>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-tachometer"></i>
              </div>
              <h4>Test MSDT</h4>
              <p>Kerjakan soal secara jujur dan teliti</p>
              <br>
              <small class="readmore">
               <a href="soalMSDT/panduanMSDT.php"><button class="<?php echo $_SESSION['id_kd_msdt']; ?>" <?php echo $_SESSION['id_kd_msdt']; ?>>Mulai</button></a>
              </small>
            </div>

          </div>

        </div>
      </center>
  </section><!-- End Services Section -->

  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Hi-Prog
      </div>
    </div>
  </footer><!-- End Footer -->


  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/soal.js"></script>

</body>

</html>