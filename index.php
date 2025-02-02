<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.min.css">

  <!-- Favicons -->
  <link href="logo.png" rel="icon">
  <link href="logo.png" rel="apple-touch-icon">

  <title>Nuha Solution</title>

  <!-- vendor -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Tablet nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list tablet-nav-toggle d-xl-none"></i>


  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#home" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="user/index.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Test</span></a></li>
        <li><a href="#blog" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Artikel</span></a>
        </li>
        <li><a href="kontak/index.php" class="nav-link scrollto"><i class="bx bx-envelope"></i>
            <span>Contact</span></a></li>
        <li><a href="login/index.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Login</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <div class="mobile-version">
    <nav id="mobile2" class="navbar2 fixed-bottom">
      <div class="menu-bawah">
        <ul>
          <li><a href="#home"> <img src="img/house.png" alt="">Home</a></li>
          <li><a href="user/index.php"> <img src="img/online-course.png" alt="">Test</a></li>
          <li><a href="#blog"><img src="img/form.png" alt="">Artikel</a></li>
          <li><a href="kontak/index.php"> <img src="img/customer-service.png" alt="">Contact</a></li>
          <li><a href="login/index.php"><img src="img/login.png" alt="">Login</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Psikologi</h1>
      <p>Our main test service <span class="typed" data-typed-items="PAPI, IST, MSDT"></span></p>
    </div>
  </section><!-- End Hero -->




  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
      <h5 class="text-center pb-2 ">Artikel </h5>

      <div class="row">
        <div class="col-md-12">

          <div class="posts-list">
            <div class="row">
              <?php
              include "koneksi/koneksi.php";
              error_reporting(0);

              $batas = 6;
              $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
              $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

              $previous = $halaman - 1;
              $next = $halaman + 1;

              $data = mysqli_query($koneksi, "select * from artikel");
              $jumlah_data = mysqli_num_rows($data);
              $total_halaman = ceil($jumlah_data / $batas);

              $data = mysqli_query($koneksi, "select * from artikel ORDER BY id_artikel DESC limit $halaman_awal, $batas");
              $nomor = $halaman_awal + 1;



              // $data = mysqli_query($koneksi, "select * from artikel order by id_artikel desc ");
              while ($d = mysqli_fetch_array($data)) {
              ?>
                <div class="col-md-4 mt-2" style="border-radius: 10px;">
                  <article class="d-flex flex-column">

                    <div class="post-img">
                      <img src="gambar/<?php echo $d['foto'] ?>" class="card-img-top" style="width:100% ;" alt="...">
                    </div>

                    <h6 class="title">
                      <a style="font-size:20px;" href="view.php?id_artikel=<?php echo $d['id_artikel']; ?>"><?php echo $d['nama_artikel']; ?></a>
                    </h6>



                    <div class="read-more mt-auto align-self-end">
                      <a href="view.php?id_artikel=<?php echo $d['id_artikel']; ?>" class="btn btn-primary">
                      <i class="fas fa-arrow-right"></i> Selengkapnya
                      </a>
                    </div>
                    <style>
                      .btn-primary {
                        position: relative;
                        overflow: hidden;
                        transition: all 0.4s ease;
                      }

                      .btn-primary::before {
                        content: '';
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        width: 300%;
                        height: 300%;
                        background-color: rgba(255, 255, 255, 0.15);
                        transition: all 0.75s ease;
                        border-radius: 50%;
                        transform: translate(-50%, -50%) scale(0);
                      }

                      .btn-primary:hover::before {
                        transform: translate(-50%, -50%) scale(1);
                      }

                      .btn-primary:hover {
                        color: #fff;
                        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
                        transform: translateY(-2px);
                      }
                    </style>

                    <script>
                      document.querySelectorAll('.btn-primary').forEach(button => {
                        button.addEventListener('mouseenter', function(e) {
                          const rect = button.getBoundingClientRect();
                          const x = e.clientX - rect.left;
                          const y = e.clientY - rect.top;
                          button.style.setProperty('--x', `${x}px`);
                          button.style.setProperty('--y', `${y}px`);
                        });
                      });
                    </script>

                  </article>
                </div><!-- End post list item -->
              <?php
              }
              ?>

              <nav class="mt-5">
                <ul class="pagination justify-content-center">
                
                  <?php
                  for ($x = 1; $x <= $total_halaman; $x++) {
                  ?>
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                  <?php
                  }
                  ?>
                  <li class="page-item">
                    <a class="page-link" <?php if ($halaman < $total_halaman) {echo "href='?halaman=$next'";
                  } ?>>Next</a>
                  </li>
                </ul>
              </nav>


            </div>
          </div><!-- End blog posts list -->

        </div>
      </div>
    </div>
  </section><!-- End Blog Section -->



  <!-- ======= About Section ======= -->
  <section id="#">
    <div class="container-fluid " data-aos="fade-up">
      <div class="container">
        <div class="about">
          <div class="row">
            <div class="col-md-6">
              <div class="gambar">
                <img src="logo.png" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="about-kiri">
                <h1 class="title-left">
                  Apa itu Nuha?
                </h1>
                <p class="lead">
                  Nuha Solution merupakan unit usaha dibawah CV Nuha Solusi Pratama yang berdiri pada bulan maret 2018
                  di Surakarta. Nuhaa Solution merupakan pusat layanan psikologi yang memberikan layan psikologi dan
                  intervensi psikologi dalam berbagai lingkup kebutuhan, seperti pengembangan diri, keluarga, sekolah,
                  perusahaan swasta maupun BUMN. Kami berharap keberadaan kami mampu memberikan khazanah dalam bidang
                  layanan psikologi terapan di Surakarta pada Khususnya, dan nasional pada umumnya.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section><!-- End About Section -->



  <!-- ======= Services ======= -->
  <section id="fitur" class="fitur nuhasolutionfitur">
    <div id="#" class="container" data-aos="fade-up">
      <h5 class="text-center">PELAYANAN TES PSIKOLOGI</h5>
      <div class="fitur col-md-12">
        <div class="row">
          <center>
            <div class="card">
              <img src="">
              <div class="card-body">
                <h5 class="card-title">IST</h5>
                <p class="card-text">Tes IST merupakan salah satu tes yang digunakan untuk mengukur inteligensi
                  individu.
                  Tes ini
                  dikembangkan oleh Rudolf Amthauer di Frankfurt, Jerman pada</p>
                <!-- <a href="artikel.html" class="btn ">Go somewhere</a> -->
              </div>
            </div>

            <div class="card ">
              <img src="">
              <div class="card-body ">
                <h5 class="card-title">MSDT</h5>
                <p class="card-text">MSDT singkatan dari Management Style Diagnostic Test adalah alat tes yang bertujuan
                  memahami tipe
                  kepemimpinan seseorang. Berikut tujuan tes MSDT adalah</p>
                <!-- <a href="artikel.html" class="btn">Go somewhere</a> -->
              </div>
            </div>

            <div class="card ">
              <img src="">
              <div class="card-body">
                <h5 class="card-title">PAPI</h5>
                <p class="card-text">PAPI Kostick merupakan laporan inventori kepribadian (self report inventory),
                  terdiri
                  dari 90 pasangan
                  pernyataan pendek berhubungan dalam situasi kerja </p>
                <!-- <a href="artikel.html" class="btn ">Go somewhere</a> -->
              </div>
            </div>

            <!-- <div class="card">
            <img src="">
            <div class="card-body">
              <h5 class="card-title">RMIB</h5>
              <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto in quibusdam
                asperiores,</p>
              <a href="#" class="btn ">Go somewhere</a>
            </div>
          </div> -->

            <div class="card">
              <img src="">
              <div class="card-body">
                <h5 class="card-title">Assesment Psikologi</h5>
                <p class="card-text">1. Pendidikan : Tes IQ, dll.
                  <br>
                  2. Industri & Organisasi: Psikotest karyawan, dll. <br>
                  3. Bidang individu & Keluarga: Deteksi dini Perkembangan, dll.
                </p>
                <!-- <a href="#" class="btn ">Go somewhere</a> -->
              </div>
            </div>

            <div class="card">
              <img src="">
              <div class="card-body">
                <h5 class="card-title">Bimbingan dan konseling</h5>
                <p class="card-text"> 1. Gangguan belajar dan pendampingan anak ABK <br>
                  2. Meningkatkan motivasi dan kepercayaan diri <br>
                  3. Gangguan kecemasan, dll <br>
                </p>
                <!-- <a href="#" class="btn ">Go somewhere</a> -->
              </div>
            </div>

            <div class="card">
              <img src="">
              <div class="card-body">
                <h5 class="card-title">Seminar,Training dan outband</h5>
                <p class="card-text"> 1. Training motivasi <br>
                  2. Training team work <br>
                  3. Training Karakter Siswa/mahasiswa <br>
                  4. Parenting program, dll <br><br></p>
                <!-- <a href="#" class="btn ">Go somewhere</a> -->
              </div>
            </div>

          </center>

        </div>
      </div>
    </div>
  </section>
  <!-- service -->





  <div class="container-fluid bg-dark">
    <div class="container">
      <div class="Contact col-md-12">
        <div class="row">
          <div class="info col-md-4">
            <img src="logo.png" alt="" srcset="">
            <p>Apa itu Nuha ? Nuha Solution merupakan unit usaha dibawah CV Nuha Solusi Pratama yang berdiri pada
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
              <li>1. Memberikan layanan psikologi secara objektif, serta mengedepankan pelayanan yang
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
  <a style="text-decoration: none;" href="https://candraaprillia19.wixsite.com/ruang-curhat-ns" class="back-to-top d-flex align-items-center justify-content-center"><img src="logo.png" width="30px" alt="" srcset="">
    Ruang Curhat</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

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