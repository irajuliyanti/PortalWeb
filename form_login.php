<?php
 session_start();

 // set session
 $_SESSION['login'] = false;
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style type="text/css">
body { font-family: Verdana; font-size: 14px; background-color: #FFFF7F; }
input, button { padding: 7px; }
button { cursor: pointer; }
.container { background-color: #FFAAFF; border: 1px solid #000000; padding: 20px; width: 350px; margin: 0 auto; }
.container .form-control { margin-bottom: 10px; width: 100%; }
.container .form-control:last-child { margin-bottom: 0; }
.container .form-control input { width: 330px; }
.container .form-control button { width: 350px; }
.container .pesan { color: #000000; text-align: center; padding: 7px; background-color: #FF0000; font-weight: bold; }
</style>
</head>
<body>
<div class="container">
<h1><center>PT. PLN (PERSERO) DISTRIBUSI JAKARTA RAYA</center></h1>
<hr />
<form action="cek_login.php" method="POST">
<div class="form-control">
  <input type="text" name="username" placeholder="Masukan username">
</div>
<div class="form-control">
  <input type="password" name="password" placeholder="Masukan password">
</div>
<div class="form-control">
  <button type="submit"><b>LOGIN</b></button>
</div>
<?php
// jika mendapatkan parameter $_GET['p']
if(isset($_GET['p'])){
?>
<div class="pesan">
<?php echo $_GET['p']; ?>
</div>
<?php } ?>
</form>
</div>
</body>
</html>
