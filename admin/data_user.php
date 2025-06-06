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

                <div class="container-fluid" style="border-radius: 10px;">



                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">User Mandiri</h1>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>IST</th>
                                            <th>MSDT</th>
                                            <th>PAPI</th>
                                            <th>OPSI</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>IST</th>
                                            <th>MSDT</th>
                                            <th>PAPI</th>
                                            <th>OPSI</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        include '../koneksi/koneksi.php';
                                        $no = 1;
                                        $data = mysqli_query($koneksi, "select * from user_mandiri");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $d['nama_user']; ?></td>
                                                <td><?php echo $d['username_user']; ?></td>
                                                <td>
                                                    <?php if ($d['id_kd_ist'] == 'active') { ?>
                                                        <i class="fas fa-check-circle text-primary"></i>
                                                    <?php } else { ?>
                                                        <i class="fas fa-times-circle text-danger"></i>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if ($d['id_kd_msdt'] == 'active') { ?>
                                                        <i class="fas fa-check-circle text-primary"></i>
                                                    <?php } else { ?>
                                                        <i class="fas fa-times-circle text-danger"></i>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if ($d['id_kd_papi'] == 'active') { ?>
                                                        <i class="fas fa-check-circle text-primary"></i>
                                                    <?php } else { ?>
                                                        <i class="fas fa-times-circle text-danger"></i>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal<?php echo $d['id_user']; ?>">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </button>
                                                    <a href="user_mandiri/hapus_user.php?id_user=<?php echo $d['id_user']; ?>" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </a>
                                                </td>
                                            </tr>

                                            <!-- Edit Modal -->
                                            <div class="modal fade" id="editModal<?php echo $d['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel">Edit User Mandiri</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" action="user_mandiri/aksi_edit.php">
                                                                <input type="hidden" name="id_user" value="<?php echo $d['id_user']; ?>">
                                                                <div class="form-group">
                                                                    <label for="nama_user">Nama User</label>
                                                                    <input type="text" class="form-control" id="nama_user" name="nama_user" value="<?php echo $d['nama_user']; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="username_user">Username</label>
                                                                    <input type="text" class="form-control" id="username_user" name="username_user" value="<?php echo $d['username_user']; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="psd_user">Password</label>
                                                                    <input type="text" class="form-control" id="psd_user" name="psd_user">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>IST</label><br>
                                                                    <input type="radio" name="id_kd_ist" value="active" <?php if ($d['id_kd_ist'] == 'active') echo 'checked'; ?>> IYA
                                                                    <input type="radio" name="id_kd_ist" value="disabled" <?php if ($d['id_kd_ist'] == 'disabled') echo 'checked'; ?>> TIDAK
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>MSDT</label><br>
                                                                    <input type="radio" name="id_kd_msdt" value="active" <?php if ($d['id_kd_msdt'] == 'active') echo 'checked'; ?>> IYA
                                                                    <input type="radio" name="id_kd_msdt" value="disabled" <?php if ($d['id_kd_msdt'] == 'disabled') echo 'checked'; ?>> TIDAK
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>PAPI</label><br>
                                                                    <input type="radio" name="id_kd_papi" value="active" <?php if ($d['id_kd_papi'] == 'active') echo 'checked'; ?>> IYA
                                                                    <input type="radio" name="id_kd_papi" value="disabled" <?php if ($d['id_kd_papi'] == 'disabled') echo 'checked'; ?>> TIDAK
                                                                </div>
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
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
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>


</body>

</html>