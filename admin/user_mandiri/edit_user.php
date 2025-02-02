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
                                <h1 class="h4 text-gray-900 mb-4">Edit User <br> Mandiri</h1>
                            </div>

<?php
                            include '../../koneksi/koneksi.php';
                            $id_user = $_GET['id_user'];
                            $data = mysqli_query($koneksi, "select * from user_mandiri where id_user='$id_user'");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>

                                <form class="user" name="pgenerate" method="post" action="aksi_edit.php">
                                    <div class="form-group row">


                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" name="nama_user" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $d['nama_user']; ?>">
                                        </div>


                                        <div class="col-sm-6">
                                            <input type="text" name="username_user" class="form-control form-control-user" id="exampleLastName" value="<?php echo $d['username_user']; ?>">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" placeholder="password" size=18 name="psd_user"> <b>Panjang Password:</b> <input type="text" class="form-control form-control-user" name="thelength" size=3 value="8">
                                        <br>
                                        <center>
                                            <input type="button" class="btn btn-primary " value="Buat" onClick="populateform(this.form.thelength.value)">
                                        </center>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0 border-1">
                                            <center>
                                                TEST IST <br>
                                                <input type="radio" name="id_kd_ist" value="active" <?php if ($d['id_kd_ist'] == 'active') echo 'checked' ?> /> IYA
                                                <td><input type="radio" name="id_kd_ist" value="disabled" <?php if ($d['id_kd_ist'] == 'disabled') echo 'checked' ?> />TIDAK
                                            </center>
                                        </div>
                                        <div class="col-sm-6 border-1">
                                            <center>
                                                TEST MSDT <br>
                                                <input type="radio" name="id_kd_msdt" value="active" <?php if ($d['id_kd_papi'] == 'active') echo 'checked' ?> /> IYA
                                                <td><input type="radio" name="id_kd_msdt" value="disabled" <?php if ($d['id_kd_papi'] == 'disabled') echo 'checked' ?> />TIDAK
                                            </center>
                                        </div>
                                    </div>

                                    <div class="form-group border-1">
                                        <center>
                                            TEST PAPI <br>
                                            <input type="radio" name="id_kd_papi" alue="active" <?php if ($d['id_kd_papi'] == 'active') echo 'checked' ?> /> IYA
                                            <td><input type="radio" name="id_kd_papi" value="disabled" <?php if ($d['id_kd_papi'] == 'disabled') echo 'checked' ?> />TIDAK
                                        </center>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block"> Buat Akun</button>


                                    <hr>


                                </form>
                            <?php
                            }
                            ?>
                            <a href="../data_user.php"><button class="btn btn-danger btn-user btn-block"> Kembali</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
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
            document.pgenerate.psd_user.value = generatepass(enterlength)
        };

        // =====================================
        // non aktif sebelum semua terisi
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>