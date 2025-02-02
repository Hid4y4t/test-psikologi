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
    <style>
                                    /* The Modal (background) */
                                    .modal {
                                        display: none;
                                        /* Hidden by default */
                                        position: fixed;
                                        /* Stay in place */
                                        z-index: 1;
                                        /* Sit on top */
                                        left: 0;
                                        top: 0;
                                        width: 100%;
                                        /* Full width */
                                        height: 100%;
                                        /* Full height */
                                        overflow: auto;
                                        /* Enable scroll if needed */
                                        background-color: rgba(0, 0, 0, 0.4);
                                        /* Black w/ opacity */
                                        padding-top: 60px;
                                        opacity: 0;
                                        /* Initial opacity for smooth transition */
                                        transition: opacity 0.3s ease;
                                        /* Smooth transition */
                                    }

                                    /* Modal Content/Box */
                                    .modal-content {
                                        background-color: #fefefe;
                                        margin: 5% auto;
                                        /* 5% from the top and centered */
                                        padding: 20px;
                                        border: 1px solid #888;
                                        width: 50%;
                                        /* Adjusted width for better appearance */
                                        max-width: 500px;
                                        /* Maximum width */
                                        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
                                        border-radius: 10px;
                                        transition: transform 0.3s ease;
                                        /* Smooth transition */
                                        transform: translateY(-50px);
                                        /* Initial position for smooth transition */
                                    }

                                    /* The Close Button */
                                    .close {
                                        color: #aaa;
                                        float: right;
                                        font-size: 28px;
                                        font-weight: bold;
                                    }

                                    .close:hover,
                                    .close:focus {
                                        color: black;
                                        text-decoration: none;
                                        cursor: pointer;
                                    }

                                    /* Show modal with smooth transition */
                                    .modal.show {
                                        display: block;
                                        opacity: 1;
                                    }

                                    .modal-content.show {
                                        transform: translateY(0);
                                    }
                                </style>
</head>

<body id="page-top">


    
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
                        <h1 class="h3 mb-0 text-gray-800">Tambah User Mandiri</h1>

                    </div>

                   


                    <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                   
                    <div class="col-lg-12">
                        <div class="p-5">
                           

                            <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                                <div class="alert alert-success" role="alert">
                                    User berhasil ditambahkan!
                                </div>
                            <?php elseif (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
                                <div class="alert alert-danger" role="alert">
                                    Terjadi kesalahan saat menambahkan user.
                                </div>
                            <?php endif; ?>

                            <form class="user" name="pgenerate" method="post" action="user_mandiri/tambah_user_aksi.php" onsubmit="return validateForm()">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="nama_user" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="username_user" class="form-control form-control-user" id="exampleLastName" placeholder="Username" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" placeholder="Password" size=18 name="psd_user">
                                    </div>

                                </div>
                                <!-- Button to open the modal -->
                                <button type="button" class="btn btn-secondary btn-user btn-block" onclick="openModal()">Generate Password</button>

                               

                                
                                <div class="test-pilihan" style="margin-top: 5px; border: 1px solid #ced4da; padding: 10px; border-radius: 15px; margin-bottom: 10px;">
                                <h4 class="text-center" style="font-weight: bold; color: red; ">pilih test yang akan dijalankan </h4>   
                                <div class="form-group row">
                                      
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <div class="text-center" style="margin-top: 5px; border: 1px solid #ced4da; border-radius: 15px; padding: 10px;">
                                                <label class="form-label"style="font-weight: bold; color: blue;" >TEST IST</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="id_kd_ist" value="active" required>
                                                    <label class="form-check-label">IYA</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="id_kd_ist" value="disabled" required>
                                                    <label class="form-check-label">TIDAK</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="text-center" style="margin-top: 5px; border: 1px solid #ced4da; border-radius: 15px; padding: 10px;">
                                                <label class="form-label" style="font-weight: bold; color: blue;">TEST MSDT</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="id_kd_msdt" value="active" required>
                                                    <label class="form-check-label">IYA</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="id_kd_msdt" value="disabled" required>
                                                    <label class="form-check-label">TIDAK</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="text-center" style="margin-top: 5px; border: 1px solid #ced4da; border-radius: 15px; padding: 10px;">
                                            <label class="form-label" style="font-weight: bold; color: blue;">TEST PAPI</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="id_kd_papi" value="active" required>
                                                <label class="form-check-label">IYA</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="id_kd_papi" value="disabled" required>
                                                <label class="form-check-label">TIDAK</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">Buat Akun</button>
                            </form>
                             <!-- The Modal -->
                             <div id="passwordModal" class="modal">
                                    <div class="modal-content">
                                        <span class="close" onclick="closeModal()">&times;</span>
                                        <h2>Generate Password</h2>
                                        <form>
                                            <div class="form-group">
                                                <label for="passwordLength">Password Length:</label>
                                                <input style="border-radius: 15px; border: 1px solid #ced4da; padding: 10px; width: 100%; box-shadow: inset 0 1px 1px rgba(0,0,0,0.075); transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;" type="number" id="passwordLength" name="passwordLength" min="1" max="20" value="8">
                                            </div>
                                            <button type="button" class="btn btn-primary btn-user btn-block mb-2" onclick="generateAndPopulatePassword()">Create</button>
                                        </form>
                                    </div>
                                </div>
                                <br>
                           
                        </div>
                    </div>
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
                                    // Get the modal
                                    var modal = document.getElementById("passwordModal");

                                    // Function to open the modal with smooth transition
                                    function openModal() {
                                        modal.style.display = "block";
                                        setTimeout(function() {
                                            modal.style.opacity = 1;
                                        }, 10);
                                    }

                                    // Function to close the modal with smooth transition
                                    function closeModal() {
                                        modal.style.opacity = 0;
                                        setTimeout(function() {
                                            modal.style.display = "none";
                                        }, 300);
                                    }

                                    // Function to generate and populate password
                                    function generateAndPopulatePassword() {
                                        var length = document.getElementById("passwordLength").value;
                                        var password = generatepass(length);
                                        document.pgenerate.psd_user.value = password;
                                        closeModal();
                                    }

                                    // Close the modal if the user clicks outside of it
                                    window.onclick = function(event) {
                                        if (event.target == modal) {
                                            closeModal();
                                        }
                                    }
                                </script>
    <script>
        var keylist = "ABCDEFGHIJDKLMNOPQRSTUVWXYZ123456789"
        var temp = ''

        function generatepass(plength) {
            temp = ''
            for (i = 0; i < plength; i++)
                temp += keylist.charAt(Math.floor(Math.random() * keylist.length))
            return temp
        }

        function populateform(enterlength) {
            document.pgenerate.psd_user.value = generatepass(enterlength)
        };
    </script>
    <script>
        function validateForm() {
            var nama = document.forms["pgenerate"]["nama_user"].value;
            var username = document.forms["pgenerate"]["username_user"].value;
            var password = document.forms["pgenerate"]["psd_user"].value;
            if (nama == "" || username == "" || password == "") {
                alert("All fields must be filled out");
                return false;
            }
            return true;
        }
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