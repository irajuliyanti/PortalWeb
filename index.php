<?php

$con = mysqli_connect('localhost','root','','admin_berita');

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PLN Disjaya</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="aktif.js" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
    <div id="navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="clr1 active"><a href="index.php"><strong>Home</strong></a></li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
        </div>
    </nav>

    <div class="container">
        <div id="header">
            <img src="images/logo3.jpg">    
        </div>
    </div>

    <hr>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div id="side-menu" class="col-md-3">
                <ul>

                    <li class="list-group-item list-group-item-warning"><a href="#"><img style="height: 20px; width: 20px" src="images/icon1.jpg" style="padding-right: 5px"><span class="mm-text"> Aplikasi Umum</span></a>
                    </li>

                    <li class="list-group-item list-group-item-warning"><a href="#"><img style="height: 20px; width: 20px" src="images/icon6.jpg" style="padding-right:5px"><span class="mm-text"> Aplikasi Bidang SDM</span></a>
                    </li>

                    <li class="list-group-item list-group-item-warning">
                        <a href="#"><img style="height: 20px; width: 20px" src="images/icon7.jpg" style="padding-right:15px"><span class="mm-text"> Aplikasi Bidang Keuangan</span></a>
                    <li class="list-group-item list-group-item-warning"><a href="#"><img style="height: 20px; width: 20px" src="images/icon2.jpg" style="padding-right:5px"><span class="mm-text"> Aplikasi Bidang Niaga</span></a>
                    <li class="list-group-item list-group-item-warning"><a href="#"><img style="height: 20px; width: 20px" src="images/icon3.jpg" style="padding-right:5px"><span class="mm-text"> Aplikasi Bidang Distribusi</span></a>
                    <li class="list-group-item list-group-item-warning"><a href="#"><img style="height: 20px; width: 20px" src="images/icon4.jpg" style="padding-right:5px"><span class="mm-text"> Aplikasi Bidang Pembangkitan</span></a>
                    
                </ul>
            </div>



            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="images/slide.jpg" alt="lampu">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/pln12.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/pln3.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

                            

            <hr>

            <div class="container">
                <h2 class="text">BERITA PLN DISJAYA</h2>
                <h4 class="text">Informasi Terkini Seputar Kegian PT. PLN (Persero) Distribusi Jakarta Raya</h4>
                <hr class="line">
                </div>

                <div class="row">
                    <?php
                        $query = mysqli_query($con, "SELECT * FROM berita ORDER BY id DESC");

                        while ($berita = mysqli_fetch_object($query)) {
                            $tanggal = $berita->tanggal;
                            $subkalimat = substr($berita->konten, 0, 150);
                            echo <<<HTML
<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail" id="content3">
        <img src="admin_berita/img/$berita->gambar" alt="$berita->judul">
        <div class="caption">
            <h5 class="pull-right">$tanggal</h5>
            <h5 class="judul">$berita->judul</h5>
                $subkalimat
                <a href="content.php?id=$berita->id">Lihat selanjutnya</a>
        </div>
    </div>
</div>
HTML;
                        }
                    ?>

                </div>

            </div>
           

        </div>

        <hr>
        <div class="container">
        <div id="profileorg">
            <h2 class="text">PROFILE PERUSAHAAN</h2>
            <hr class="line">
            <p><h4>PT. PLN (Persero) Distribusi Jakarta Raya </h4><br>
            PLN  Distribusi  Jakarta  Raya</strong> merupakan  salah  satu    unit  bisnis PT. PLN (persero) yang dipimpin oleh Direktur Transmisi  dan Distribusi, dimana Disjaya  dan Tangerang  termasuk dalam unit bisnis distribusi  Jawa Bali. <br>
            <br>PLN Distribusi Jakarta  Raya dan Tangerang memiliki tugas khusus,  yaitu  seperti  yang  tertera  pada  keputusan  Direksi  PT.  PLN  (Persero)  No.252 pasal 2,antara lain :<br>
            1. Mengusahakan pendistribusian tenaga listrik dalam jumlah dan mutu yang memadai untuk memberikan kontribusi dalam pembangunan nasional. 
            <br>2. Melakukan usaha sesuai dengan kaidah ekonomi yang sehat.
            <br>3. Memperhatikan kepentingan Stake Holder (pemilik perusahaan).
            <br>4. Meningkatkan kepuasan pelanggan. <br>
            <p>
            <p><img src="images/profile2.jpg" style="float: left; margin: 0 8px 4px 0;"/></p>
            <p><br><strong>Alamat :</strong>
            <br>Jl. Moh. Ikhwan Ridwan Rais No.1, RT.7/RW.1, Gambir, Kota Jakarta Pusat
            <p><br><strong>Telp :</strong>
            <br>(021) 3510654/ 3454000 / 5000
            <p><br><strong>Fax :</strong>
            <br>(021) 3510654
            <p><br><strong>Kode pos :</strong>
            <br>11410
            </p>
        </div>
        </div>

    </div>

        <hr>

       <div class="footer">
        <div class="container-fluid text-center">
            <p>Copyright &copy; Your Website 2017</p>
       </div>
       </div>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>