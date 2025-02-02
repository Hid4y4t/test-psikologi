<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nuha Solution</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/logo.png" rel="icon">
  <link href="img/logo.png" rel="apple-touch-icon">


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
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="../index.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a>
        </li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Test</span></a></li>
        <li><a href="../index.php" class="nav-link scrollto"><i class="bx bx-book-content"></i>
            <span>Artikel</span></a>
        </li>
        <li><a href="../kontak/index.php" class="nav-link scrollto"><i class="bx bx-envelope"></i>
            <span>Contact</span></a></li>
        <li><a href="#" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Login</span></a>
        </li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <div class="mobile-version">
    <nav id="mobile2" class="navbar2 fixed-bottom">
      <div class="menu-bawah">
        <ul>
          <li><a href="../index.php"> <img src="img/house.png" alt="">Home</a></li>
          <li><a href="#resume"> <img src="img/online-course.png" alt="">Test</a></li>
          <li><a href="../index.php"><img src="img/form.png" alt="">Artikel</a></li>
          <li><a href="../kontak/index.php"> <img src="img/customer-service.png" alt="">Contact</a></li>
          <li><a href="#"><img src="img/login.png" alt="">Login</a></li>
        </ul>
      </div>
    </nav>
  </div>



  <?php
  if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
      echo "Login gagal! username dan password salah!";
    } else if ($_GET['pesan'] == "logout") {
      echo "Anda telah berhasil logout";
    } else if ($_GET['pesan'] == "belum_login") {
      echo "Anda harus login untuk mengakses halaman";
    }
  }
  ?>
  <div class="container">
    <div class="login-wrap">

      <div class="login-html">

        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Mandiri</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Group</label>
        <div class="login-form mt-2">


          <div class="sign-in-htm">
            <form action="mandiri.php" method="POST">
              <div class="group">
                <label for="user" class="label">Username</label>
                <input id="user" name="username_user" type="text" class="input">
              </div>
              <div class="group">
                <label for="pass" class="label">Password</label>
                <input id="pass" type="password" name="psd_user" class="input" data-type="password">
              </div>

              <div class="group">
                <input type="submit" class="button" value="Login">
              </div>
            </form>

          </div>


          <div class="sign-up-htm">
            <form action="kelompok.php" method="POST">
              <div class="group">
                <label for="user" class="label">Username</label>
                <input id="user" name="username_user_k" type="text" class="input">
              </div>
              <div class="group">
                <label for="pass" class="label">Password</label>
                <input id="pass" name="psd_user_k" type="password" class="input" data-type="password">
              </div>

              <div class="group">
                <input type="submit" class="button" value="Login">
              </div>
            </form>
          </div>




        </div>
      </div>
    </div>

  </div>

  <div class="container-fluid bg-dark">
    <div class="container">
      <div class="Contact col-md-12">
        <div class="row">
          <div class="info col-md-4">
            <a href="../login_admin/index.php"><img src="img/logo.png" alt="" srcset=""></a>
            <p>Apa itu Nuha ? Nuhaa Solution merupakan unit usaha dibawah CV Nuha Solusi Pratama yang berdiri pada
              bulan
              maret 2018 di Surakarta. Nuhaa Solution merupakan pusat layanan psikologi yang memberikan layan
              psikologi
              dan intervensi psikologi dalam berbagai lingkup kebutuhan, seperti pengembangan diri, keluarga, sekolah,
              perusahaan swasta maupun BUMN. Kami berharap keberadaan kami mampu memberikan khazanah dalam bidang
              layanan psikologi terapan di Surakarta pada Khususnya, dan nasional pada umumnya.</p>
          </div>

          <div class="link col-md-4">
            <h5>Visi</h5>
            <p>Menjadi lembaga psikologi terapan yang objektif, ramah, tuntas dan profesional, sehingga mampu membantu
              dalam membangun SDM Bangsa Indonesia.</p>
            <h5>Misi</h5>
            <ul>
              <li>1. Memberikan layanan psikologi secara professional dan objektif, serta mengedepankan pelayanan yang
                professional.</li>
              <li>2. Memberikan pelayanan psikologi secara tuntas, ramah dan menyenangkan.</li>
            </ul>
          </div>

          <div class="maps-responsive col-md-4">
            <h5>Location</h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.0333882885384!2d110.78259861477682!3d-7.571338894539952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1563c0d87a87%3A0xae8d66581da2ac20!2sjasa%20psikologi%20solo%20nuha%20solution!5e0!3m2!1sid!2sid!4v1657004045425!5m2!1sid!2sid" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Hiprog</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer>
  <!-- End Footer -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

</body>

</html>