<?php
 $host = 'localhost';
 $username = 'root';
 $password = '';
 $db = 'admin_berita';

 $conn = mysql_connect($host, $username, $password);
 mysql_select_db($db, $conn);

 // ambil data
 $username= $_POST['username'];
 $password = $_POST['password'];

 if(!empty($username) and !empty($password)){
  $sql = 'SELECT * FROM admin';
  $sql .= ' WHERE username="'.$username.'"';
  $sql .= ' AND password="'.$password.'"';
  $rs = mysql_query($sql);
  $row = mysql_fetch_array($rs);

  $valid_id = $row['id'];
  $valid_user = $row['username'];
  $valid_pass = $row['password'];

  if($username == $valid_user and $password == $valid_pass){
   $_SESSION['login'] = true;
   $_SESSION['id'] = $valid_id;
   $_SESSION['username'] = $valid_user;

   header('Location: admin/index.php');
  }else{
   header('Location: home.php?p=Username dan password anda salah !');
  }
 }else{
  header('Location: home.php?p=Username dan password harus diisi!');
 }
