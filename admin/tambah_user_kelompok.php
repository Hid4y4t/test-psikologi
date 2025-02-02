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
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <?php
    session_start();
    if (!isset($_SESSION["username_db"])) {
        echo "Anda harus login dulu <br><a href='../login_admin/index.php'>Klik disini</a>";
        exit;
    }
    $id_admin = $_SESSION["id_admin"];
    $username_db = $_SESSION["username_db"];
    $nama_admin = $_SESSION["nama_admin"];
    ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
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
                                <img class="img-profile rounded-circle" src="img/USER.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="../login_admin/logout.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah User Kelompok</h1>

                    </div>

                    <div class="row">
                   
                    <div class="col-lg-12">
                        <div class="p-5">
                         

                            <form class="user" name="pgenerate" method="post" action="user_kelompok/tambah_user_aksi.php">
                                <div class="form-group row">


                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="nama_user_k" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama">
                                    </div>


                                    <div class="col-sm-6">
                                        <input type="text" name="username_user_k" class="form-control form-control-user" id="exampleLastName" placeholder="Username">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Kelompok</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name="id_kelompok">

                                            <?php
                                            include '../koneksi/koneksi.php';


                                            $sql = "select * from kelompok";

                                            $hasil = mysqli_query($koneksi, $sql);
                                            $no = 0;
                                            while ($data = mysqli_fetch_array($hasil)) {
                                                $no++;
                                            ?>

                                                <option value="<?php echo $data['id_kelompok']; ?>">

                                                    <?php echo $data['nama_kelompok']; ?>

                                                </option>

                                            <?php
                                            }
                                            ?>


                                         
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">

                                <input class="form-control" type="text" placeholder="Readonly input here…" readonly placeholder="password" size=18 name="psd_user_k">
                                    <!-- <input type="text" class="form-control form-control-user" placeholder="password" size=18 name="psd_user">  -->
                                    
                                    
                                    
                                    <b>Panjang Password:</b> <input type="text" class="form-control form-control-user" name="thelength" size=3 value="8">
                                    <br>
                                    <center>
                                        <input type="button" class="btn btn-primary " value="Buat" onClick="populateform(this.form.thelength.value)">
                                    </center>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0 border">
                                        <center>
                                            <b class=""> TEST IST</b> <br>
                                            <input type="radio" name="id_kd_ist" value="active" /> IYA
                                            <td><input type="radio" name="id_kd_ist" value="disabled" />TIDAK
                                        </center>
                                    </div>
                                    <div class="col-sm-6 border border">
                                        <center>
                                           <b> TEST MSDT</b> <br>
                                            <input type="radio" name="id_kd_msdt" value="active" /> IYA
                                            <td><input type="radio" name="id_kd_msdt" value="disabled" />TIDAK
                                        </center>
                                    </div>
                                </div>

                                <div class="form-group border">
                                    <center>
                                        <b>TEST PAPI</b> <br>
                                        <input type="radio" name="id_kd_papi" value="active" /> IYA
                                        <td><input type="radio" name="id_kd_papi" value="disabled" />TIDAK
                                    </center>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block"> Buat Akun</button>


                                <hr>


                            </form>
                           
                        </div>
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
        var keylist = "!@#$$&*()<>?+ABCDEFGHIJDKLMNOPQRSTUVWXYZ123456789"
        var temp = ''

        function generatepass(plength) {
            temp = ''
            for (i = 0; i < plength; i++)
                temp += keylist.charAt(Math.floor(Math.random() * keylist.length))
            return temp
        }

        function populateform(enterlength) {
            document.pgenerate.psd_user_k.value = generatepass(enterlength)
        };

        // =====================================
        // non aktif sebelum semua terisi
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>