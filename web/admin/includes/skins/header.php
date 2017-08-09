<?php
// hindari akses langsung ke file ini
define('ACCESS','OPEN');
require 'admin-loader.php';

// is_login dapat dilihat di file functions.php
// retrun bool (true|false)
if (!is_login() && !is_admin()) {
    header('location:login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=$domain;?>assets/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?=$domain;?>assets/admin.css"/>
    <script src="<?=$domain;?>assets/jquery/jquery.min.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?=$domain;?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=$domain;?>admin/includes/ckeditor/ckeditor.js"></script>
</head>
<body>
<div class="container">
  <div class="row">