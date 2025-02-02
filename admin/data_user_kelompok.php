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

                <div class="container-fluid">



                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">User Kelompok</h1>


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
                                            <th>Kelompok</th>
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
                                            <th>Kelompok</th>
                                            <th>IST</th>
                                            <th>MSDT</th>
                                            <th>PAPI</th>
                                            <th>OPSI</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        include "../koneksi/koneksi.php";
                                        $data = mysqli_query($koneksi, "SELECT * FROM user_kelompok INNER JOIN kelompok ON user_kelompok.id_kelompok = kelompok.id_kelompok");
                                        $no = 1;
                                        foreach ($data as $row) :
                                        ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $row['nama_user_k']; ?></td>
                                                <td><?= $row['username_user_k']; ?></td>
                                                <td><?= $row['nama_kelompok']; ?></td>
                                                <td><?= $row['id_kd_ist'] == 'active' ? '<span style="color: green;">&#10004;</span>' : '<span style="color: red;">&#10008;</span>'; ?></td>
                                                <td><?= $row['id_kd_msdt'] == 'active' ? '<span style="color: green;">&#10004;</span>' : '<span style="color: red;">&#10008;</span>'; ?></td>
                                                <td><?= $row['id_kd_papi'] == 'active' ? '<span style="color: green;">&#10004;</span>' : '<span style="color: red;">&#10008;</span>'; ?></td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#editModal<?= $row['id_user_k']; ?>"><i class="fas fa-edit"></i></a> |
                                                    <a href="user_kelompok/hapus_user.php?id_user_k=<?= $row['id_user_k']; ?>" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>

                                            <!-- Edit Modal -->
                                            <div class="modal fade" id="editModal<?= $row['id_user_k']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel">Edit User</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <?php
                                                            $id_user_k = $row['id_user_k'];
                                                            $data_edit = mysqli_query($koneksi, "SELECT * FROM user_kelompok WHERE id_user_k='$id_user_k'");
                                                            while ($d = mysqli_fetch_array($data_edit)) {
                                                            ?>
                                                                <form class="user" name="pgenerate" method="post" action="user_kelompok/aksi_edit.php">
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                                            <input type="hidden" name="id_user_k" value="<?= $d['id_user_k']; ?>">
                                                                            <input type="text" name="nama_user_k" class="form-control form-control-user" value="<?= $d['nama_user_k']; ?>">
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <input type="text" name="username_user_k" class="form-control form-control-user" value="<?= $d['username_user_k']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <label class="input-group-text" for="inputGroupSelect01">Kelompok</label>
                                                                            </div>
                                                                            <select class="custom-select" id="inputGroupSelect01" name="id_kelompok">
                                                                                <?php
                                                                                $sql = "SELECT * FROM kelompok";
                                                                                $hasil = mysqli_query($koneksi, $sql);
                                                                                while ($data = mysqli_fetch_array($hasil)) {
                                                                                ?>
                                                                                    <option value="<?= $data['id_kelompok']; ?>" <?= $data['id_kelompok'] == $d['id_kelompok'] ? 'selected' : ''; ?>>
                                                                                        <?= $data['nama_kelompok']; ?>
                                                                                    </option>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control form-control-user" readonly placeholder="password" size=18 name="psd_user">
                                                                        <b>Panjang Password:</b>
                                                                        <input type="text" class="form-control form-control-user" name="thelength" size=3 value="8">
                                                                        <br>
                                                                        <center>
                                                                            <input type="button" class="btn btn-primary" value="Buat" onClick="populateform(this.form.thelength.value)">
                                                                        </center>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-6 mb-3 mb-sm-0 border-1">
                                                                            <center>
                                                                                TEST IST <br>
                                                                                <input type="radio" name="id_kd_ist" value="active" <?= $d['id_kd_ist'] == 'active' ? 'checked' : ''; ?> /> IYA
                                                                                <input type="radio" name="id_kd_ist" value="disabled" <?= $d['id_kd_ist'] == 'disabled' ? 'checked' : ''; ?> /> TIDAK
                                                                            </center>
                                                                        </div>
                                                                        <div class="col-sm-6 border-1">
                                                                            <center>
                                                                                TEST MSDT <br>
                                                                                <input type="radio" name="id_kd_msdt" value="active" <?= $d['id_kd_msdt'] == 'active' ? 'checked' : ''; ?> /> IYA
                                                                                <input type="radio" name="id_kd_msdt" value="disabled" <?= $d['id_kd_msdt'] == 'disabled' ? 'checked' : ''; ?> /> TIDAK
                                                                            </center>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group border-1">
                                                                        <center>
                                                                            TEST PAPI <br>
                                                                            <input type="radio" name="id_kd_papi" value="active" <?= $d['id_kd_papi'] == 'active' ? 'checked' : ''; ?> /> IYA
                                                                            <input type="radio" name="id_kd_papi" value="disabled" <?= $d['id_kd_papi'] == 'disabled' ? 'checked' : ''; ?> /> TIDAK
                                                                        </center>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary btn-user btn-block">Update</button>
                                                                </form>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
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

</html>of