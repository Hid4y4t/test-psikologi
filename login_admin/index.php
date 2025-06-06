<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Login Admin</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    * {
  box-sizing: border-box;
}

html {
  height: 100%;
}

body {
  background-color: #354152;
  color: #7e8ba3;
  font: 300 1rem/1.5 Helvetica Neue, sans-serif;
  margin: 0;
  min-height: 100%;
}

.align {
  align-items: center;
  display: flex;
  flex-direction: row;
}
.align__item--start {
  align-self: flex-start;
}
.align__item--end {
  align-self: flex-end;
}

.site__logo {
  margin-bottom: 2rem;
}

input {
  border: 0;
  font: inherit;
}
input::placeholder {
  color: #7e8ba3;
}

.form__field {
  margin-bottom: 1rem;
}
.form input {
  outline: 0;
  padding: 0.5rem 1rem;
}
.form input[type=email], .form input[type=password] {
  width: 100%;
}

.grid {
  margin: 0 auto;
  max-width: 25rem;
  width: 100%;
}

h2 {
  font-size: 2.75rem;
  font-weight: 100;
  margin: 0 0 1rem;
  text-transform: uppercase;
}

svg {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}

a {
  color: #7e8ba3;
}

.register {
  box-shadow: 0 0 250px #000;
  text-align: center;
  padding: 4rem 2rem;
}
.register input {
  border: 1px solid #242c37;
  border-radius: 999px;
  background-color: transparent;
  text-align: center;
}
.register input[type=email], .register input[type=password] {
  background-repeat: no-repeat;
  background-size: 1.5rem;
  background-position: 1rem 50%;
}
.register input[type=email] {
  background-image: url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#242c37"><path d="M256.017 273.436l-205.17-170.029h410.904l-205.734 170.029zm-.034 55.462l-205.983-170.654v250.349h412v-249.94l-206.017 170.245z"/></svg>');
}
.register input[type=password] {
  background-image: url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#242c37"><path d="M195.334 223.333h-50v-62.666c0-61.022 49.645-110.667 110.666-110.667 61.022 0 110.667 49.645 110.667 110.667v62.666h-50v-62.666c0-33.452-27.215-60.667-60.667-60.667-33.451 0-60.666 27.215-60.666 60.667v62.666zm208.666 30v208.667h-296v-208.667h296zm-121 87.667c0-14.912-12.088-27-27-27s-27 12.088-27 27c0 7.811 3.317 14.844 8.619 19.773 4.385 4.075 6.881 9.8 6.881 15.785v22.942h23v-22.941c0-5.989 2.494-11.708 6.881-15.785 5.302-4.93 8.619-11.963 8.619-19.774z"/></svg>');
}
.register input[type=submit] {
  background-image: linear-gradient(160deg, #8ceabb 0%, #378f7b 100%);
  color: #fff;
  margin-bottom: 6rem;
  width: 100%;
}
</style>
</head>
<?php
  if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
      echo "Login gagal! username dan password salah!";
    } else if ($_GET['pesan'] == "logout") {
      echo "Anda telah berhasil logout";
    } else if ($_GET['pesan'] == "belum_login") {
      echo "Anda harus login untuk mengakses halaman";
    }
  }
  ?>
<body class="align">

    <div class="grid align__item">

        <div class="register">

        <img  width="40%" src="logo.png" alt="">        
     
 
            <h2>Admin Nuha</h2>

            <form action="proses.php" method="POST" class="form">

                <div class="form__field">
                    <input type="text" name="username_db" placeholder="username">
                </div>

                <div class="form__field">
                    <input type="password" name="password_db" placeholder="password">
                </div>

                <div class="form__field">
                    <input type="submit" value="login">
                </div>

            </form>

            

        </div>

    </div>

</body>

</html>