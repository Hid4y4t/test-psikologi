<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah User</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <style>  
     body{
	background: #fcfcfc;
}
h1{
	text-align: center;
	font-family: sans-serif;
	font-weight: 300;
	color: #fff;
}
 
.tombol{
	padding: 8px 15px;
	border-radius: 3px;
	background: #ECF0F1;
	border: none;
	color: #232323;
	font-size: 12pt;
}
 
.kotak{
	margin: 20px auto;
	background: #1ABC9C;
	width: 900px;	
	padding: 20px 50px 50px 50px;
	border-radius: 3px;
}
	</style>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block "> <img src="../img/artikel1.jpg" width="100%" height="100%" alt=""></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Artikel </h1>
                            </div>



                            <div class="container">

                                <form action="tambah_proses_artikel.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Nama Artikel :</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Nama artikel" name="nama_artikel" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>Konten:</label>

                                        <textarea name="konten" class="ckeditor" id="ckedtor"></textarea>

                                    </div>

                                    <div class="form-group">
                                        <label>Foto :</label>
                                        <input type="file" name="foto" required="required">
                                        <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                                    </div>
                                    <input type="submit" name="" value="Simpan" class="btn btn-primary">
                                </form>
                            </div>
                            <a href="../data_user.php"><button class="btn btn-danger btn-user btn-block"> Kembali</button></a>
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