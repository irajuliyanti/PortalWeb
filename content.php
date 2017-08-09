<?php

$con=mysqli_connect('localhost','root','','admin_berita');
$getId=mysqli_fetch_row(mysqli_query($con,"select max(id) from berita"));

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
                    <li class="clr1"><a href="index.php"><strong>Home</strong></a></li>
                    
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
    
<div class="container" style="margin-top:40px">
    <div class="row">
    <?php 
    $id=$_GET['id'];
        $query = mysqli_query($con, "SELECT * FROM berita WHERE id = " . $_GET['id'] . " ORDER BY id DESC LIMIT 1");
        while ($berita = mysqli_fetch_object($query)) {
            $tanggal = $berita->tanggal;
        echo <<<HTML

<div class="col-md-9">
    <div class="panel panel-default">
        <div class="panel-body">
            <h2>$berita->judul</h2>
                <div class="info-meta">
                    <ul class="list-inline">
                        <li><i class="fa fa-clock-o">$berita->tanggal</i></li>
                    </ul>
                </div>
                <hr>
                  
                    <div class = "media">
                          <img src = "admin_berita/img/$berita->gambar" alt="$berita->judul" height="700%" width="600px" style="margin: 0 8px 4px 0;">
                       
                       <div class = "media-body">
                       $berita->konten
                       </div>
                        
                    </div>
                    <a href=""></a>
                    
                    
               </div>
HTML;
}
?>
    
<hr>
    <div id="disqus_thread"></div>
    <script>

    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://www-plndisjaya-com.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

               
            </div>
         </div>  
        <div class="col-md-3">
            <div class="panel panel-default">
               <div class="panel-heading"><h4 class="text-center">Berita Lainnya</h4></div>
               <div class="panel-body">
                    <?php
                    $query = mysqli_query($con, "SELECT * FROM berita WHERE id <> " . $_GET['id'] . " ORDER BY id DESC LIMIT 2");

                        while ($berita = mysqli_fetch_object($query)) {
                            $tanggal = $berita->tanggal;
                            $subkalimat = substr($berita->konten, 0, 100);
                            echo <<<HTML
<div class="recent">
    <a href="content.php?id=$berita->id">
        <img class="img-responsive" src="admin_berita/img/$berita->gambar" alt="$berita->judul">
    </a>
    <div class="info-meta">
        <ul class="list-inline">
            <li><i class="fa fa-clock-o"></i>$berita->tanggal</a></li>
        </ul>
    </div>
    <h4>
        <a href="content.php?id=$berita->id">$berita->judul</a>
    </h4>
    <p class="isi-title">
        $subkalimat <a href="content.php?id=$berita->id">Lihat selanjutnya</a>
    </p>
</div>
<hr>
HTML;
                        }
                    ?>
                </div>
            </div>      
        </div>          
    </div>          
</div>
<!--FOOTER-->
    <div class="footer">
        <div class="container-fluid text-center">
            <p>Copyright &copy; Your Website 2017</p>
       </div>
       </div>    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>