<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Mengirim pesan email</title>
<style>
   form input{margin:3px;padding:3px 5px;}
</style>
</head>
<body>
   <h2>Mengirim pesan email</h2>
   <form name="form1" action="proses.php" method="post">
     Penerima : <input type="text" name="penerima"><br>
     Subyek : <input type="text" name="subyek"><br>
     Pesan : <br>
     <textarea name="pesan" cols="40" rows="10"></textarea><br>
     <input type="submit" name="submit" value="submit"> <input type="reset" value="reset">
   </form>
</body>
</html>