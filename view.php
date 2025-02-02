<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/view_artikell.css">
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


  <main id="main">
   
      <!-- ======= About Section ======= -->
      <div id="about" class="paddsection">

        <div class="container">
          <div class="section-title">
            <h2>View</h2>
            <p>Artikel</p>
          </div><br>

          <div class="row justify-content-between">
            <?php
            include 'koneksi/koneksi.php';
            $id_artikel = $_GET['id_artikel'];
            $data = mysqli_query($koneksi,"select * from artikel where id_artikel='$id_artikel'");
            while($d = mysqli_fetch_array($data)){
              ?>
            <div class="col-lg-4 ">
              <div class="div-img-bg">
                <div class="about-img">
                  <img src="gambar/<?php echo $d['foto'] ?>" alt="">
                </div>
              </div>
            </div>

            <div class="col-lg-7">
              <div class="about-descr">

                <p class="p-heading"><?php echo $d['nama_artikel']; ?><br>
              
                <p class="separator" style="text-align:justify"> <?php echo $d['konten']; ?></p>
                <a style="font-weight: bold; text-decoration: none;"  href="index.php">Kembali</a>

              </div>

            </div>
          </div>
          <?php 
        }
        ?>
        </div>
      </div><!-- End About Section -->

   

  </main><!-- End #main -->


<!-- Vendor JS Files -->
<script src="../assets/vendor/purecounter/purecounter.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../assets/vendor/typed.js/typed.min.js"></script>
<script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>


</body>

</html>