<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit User</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block "><img src="../img/artikel1.jpg" width="100%" height="100%" alt=""></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit  <br> Kelompok</h1>
                            </div>
 
<?php
                            include '../../koneksi/koneksi.php';
                            $id_kelompok = $_GET['id_kelompok'];
                            $data = mysqli_query($koneksi, "select * from kelompok where id_kelompok='$id_kelompok'");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>

                                <form class="user" name="pgenerate" method="post" action="proses_edit_kelompok.php">
                                    <div class="form-group row">


                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="hidden" name="id_kelompok" value="<?php echo $d['id_kelompok']; ?>">
                                            <input type="text" name="nama_kelompok" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $d['nama_kelompok']; ?>">
                                        </div>


                                        <div class="col-sm-6">
                                            <input type="text" name="keterangan_kelompok" class="form-control form-control-user" id="exampleLastName" value="<?php echo $d['keterangan_kelompok']; ?>">
                                        </div>
                                    </div>

                                    

                                    <button type="submit" class="btn btn-primary btn-user btn-block"> Buat kelompok</button>


                                    <hr>


                                </form>
                            <?php
                            }
                            ?>
                            <a href="../kelompok.php"><button class="btn btn-danger btn-user btn-block"> Kembali</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>