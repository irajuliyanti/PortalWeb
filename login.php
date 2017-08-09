<?php
session_start();
include 'admin/conector.php';
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("SELECT * FROM admin WHERE username='$username' and password='$password' ") or die(mysql_error());
if (mysql_num_rows($query)==1) {
  $_SESSION['username']=$username;
  header("location : admin/index.php");
} else{
  header("location:index.php?pesan=gagal")or die (mysql_error());
  // mysql_error();
}
//echo $password;
?>







$error='';
if(isset($_POST['submit'])){
  if (empty($_POST['username']) || empty($_POST['password'])){
    $error = "username or password is invalid ";
  }
  else{
    // variabel username dan password
    $username=$_POST['username'];
    $password=$_POST['password'];
    //Membangun koneksi ke database 
    $connection = mysql_connect("localhost", "root", "");
    //mencegah mysql injection
    $username = stripslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);
    //seleksi database
    $db = mysql_select_db("tes_db", $connection);
    //sql query untuk memeriksa apakah karyawan terdapat di database
    $query = mysql_query("SELECT * FROM admin WHERE password='$password' AND username='$username'", $connection);
    $rows = mysql_num_rows($query);
      if ($rows == 1){
        $_SESSION['login_user']=$username; // membuat sesi
        header("location : index.php");
      } else {
        $error = "Username atau Password belum terdaftar";
      }
      mysql_close($connection);
  }
}
?>

 