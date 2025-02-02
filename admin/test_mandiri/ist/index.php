<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Nuha</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- session -->
    <?php
    session_start();
    if (!isset($_SESSION["username_db"])) {
        echo "Anda harus login dulu <br><a href='../../../login_admin/index.php'>Klik disini</a>";
        exit;
    }
    $id_admin = $_SESSION["id_admin"];
    $username_db = $_SESSION["username_db"];
    $nama_admin = $_SESSION["nama_admin"];
    ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include 'menu.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline " style="color: white; font-weight: bold;"><?php echo $_SESSION['nama_admin']; ?></span>
                                <img class="img-profile rounded-circle" src="../../img/USER.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="../../../login_admin/logout.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <div class="container-fluid">
                    <div class="my-4 text-center">
                        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">KELOMPOK TEST IST MANDIRI</h1>
                        <p class="mt-2 text-gray-600">Selamat datang di halaman kelompok test IST Mandiri. Silakan pilih salah satu tes di bawah ini.</p>
                    </div>

                    <div class="row text-center justify-content-center">
                        <div class="col-lg-3 col-md-6 mb-4">
                            <a href="an/index.php" class="btn btn-info btn-icon-split btn-lg shadow-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-brain"></i>
                                </span>
                                <span class="text">AN</span>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <a href="fa/index.php" class="btn btn-success btn-icon-split btn-lg shadow-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-flask"></i>
                                </span>
                                <span class="text">FA</span>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <a href="ge/index.php" class="btn btn-warning btn-icon-split btn-lg shadow-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-globe"></i>
                                </span>
                                <span class="text">GE</span>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <a href="me/index.php" class="btn btn-danger btn-icon-split btn-lg shadow-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-cogs"></i>
                                </span>
                                <span class="text">ME</span>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <a href="ra/index.php" class="btn btn-primary btn-icon-split btn-lg shadow-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-rocket"></i>
                                </span>
                                <span class="text">RA</span>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <a href="se/index.php" class="btn btn-secondary btn-icon-split btn-lg shadow-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-lightbulb"></i>
                                </span>
                                <span class="text">SE</span>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <a href="wa/index.php" class="btn btn-dark btn-icon-split btn-lg shadow-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-water"></i>
                                </span>
                                <span class="text">WA</span>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <a href="wu/index.php" class="btn btn-light btn-icon-split btn-lg shadow-sm">
                                <span class="icon text-gray-600">
                                    <i class="fas fa-wind"></i>
                                </span>
                                <span class="text">WU</span>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <a href="zr/index.php" class="btn btn-primary btn-icon-split btn-lg shadow-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-atom"></i>
                                </span>
                                <span class="text">ZR</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; HiProg</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script>
        // fungsi hapus artikel
        $('.btn-hapus').on('click', function() {

            var post_id = $(this).attr("post_id");
            konfirmasi = confirm("Yakin ingin menghapus?")

            if (konfirmasi) {
                $.ajax({
                    url: 'papi/hapus.php',
                    method: 'post',
                    data: {
                        id: id,
                    },
                    success: function(data) {
                        window.location.href = 'index.php?halaman=papi&hapus=berhasil';
                    }
                });
            }
        });
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="j../../s/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../js/demo/chart-area-demo.js"></script>
    <script src="../../js/demo/chart-pie-demo.js"></script>
    <!-- Page level plugins -->
    <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="../../js/demo/datatables-demo.js"></script>


</body>

</html>