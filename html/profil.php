<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=kult', 'root', '');


?>



<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- ===== Mobile viewport optimized ===== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

    <!-- ===== Meta Tags - Description for Search Engine purposes ===== -->
    <meta name="description" content="Movify - Movies, Series & Cinema HTML Template">
    <meta name="keywords" content="movies, series, online streaming, html template, cinema html template">
    <meta name="author" content="GnoDesign">

    <!-- ===== Website Title ===== -->
    <title>KULT</title>

    <!-- ===== Favicon & Different size apple touch icons ===== -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/apple-touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/apple-touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/apple-touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/apple-touch-icon-ipad-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="assets/images/apple-touch-icon-ipad-pro.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon-iphone-6-plus.png">
    <link rel="icon" sizes="192x192" href="assets/images/icon-hd.png">
    <link rel="icon" sizes="128x128" href="assets/images/icon.png">

    <!-- ===== Google Fonts ===== -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- ===== CSS links ===== -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mmenu.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>


    <!-- =============== START OF PRELOADER =============== -->
    <div class="loading">
        <div class="loading-inner">
            <div class="loading-effect">
                <div class="object"></div>
            </div>
        </div>
    </div>
    <!-- =============== END OF PRELOADER =============== -->



    <!-- =============== START OF RESPONSIVE - MAIN NAV =============== -->
    <nav id="main-mobile-nav"></nav>
    <!-- =============== END OF RESPONSIVE - MAIN NAV =============== -->



    <!-- =============== START OF WRAPPER =============== -->
    <div class="wrapper">


        <!-- =============== START OF HEADER NAVIGATION =============== -->
        <!-- Insert the class "sticky" in the header if you want a sticky header -->
        <header class="header">
            <div class="container-fluid">

                <!-- ====== Start of Navbar ====== -->
                <nav class="navbar navbar-expand-lg">

                    <a class="navbar-brand" href="index.html">
                        <!-- INSERT YOUR LOGO HERE -->
                        <h4><strong>KULT</strong></h4>
                        <!-- INSERT YOUR WHITE LOGO HERE -->
                        <img src="assets/images/logo-white.svg" alt="white logo" width="150" class="logo-white">
                    </a>

                    <!-- Login Button on Responsive -->
                    <a href="#login-register-popup" class="login-mobile-btn popup-with-zoom-anim"><i class="icon-user"></i></a>
                    
                    <button id="mobile-nav-toggler" class="hamburger hamburger--collapse" type="button">
                     <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                  </span>
              </button>

              <!-- ====== Start of #main-nav ====== -->
              <div class="navbar-collapse" id="main-nav">

                <!-- ====== Start of Main Menu ====== -->
                <ul class="navbar-nav mx-auto" id="main-menu">
                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="fil-dactu.php">Fil D'actus</a>
                    </li>                            

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="groupe.php">Groupes</a>
                    </li> 

                    <li class="nav-item">
                        <a class="nav-link" href="profil.php">Profil</a>
                    </li>       

                    <!-- Menu Item -->
                    <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Informations</a>

                     <!-- Dropdown Menu -->
                     <ul class="dropdown-menu">
                        <!-- Menu Item -->
                        <li>
                            <a class="dropdown-item" href="fonctionnement.php">Kult, c'est quoi ?</a>
                        </li>

                        <!-- Menu Item -->
                        <li>
                            <a class="dropdown-item" href="pricing.php">Nos tarifs</a>
                        </li>

                    </ul>
                </li>

            </ul>
            <!-- ====== End of Main Menu ====== -->


            <!-- ====== Start of Extra Nav ====== -->
            <ul class="navbar-nav extra-nav">

                <!-- Menu Item -->
                <li class="nav-item">
                    <a class="nav-link toggle-search" href="#">
                        <i class="fa fa-search"></i>
                    </a>
                </li>

                <!-- Menu Item -->
                <li class="nav-item notification-wrapper">
                    <a class="nav-link notification" href="#">
                        <i class="fa fa-globe"></i>
                        <span class="notification-count">2</span>
                    </a>
                </li>

                <!-- Menu Item -->
                <li class="nav-item m-auto">
                    <?php
                    if (isset($_SESSION['Id'])):
                        ?>
                        <a href="logout.php" class="btn btn-main btn-effect login-btn">
                            <i class="icon-user"></i>Se déconnecter
                        </a>
                        <?php
                    else:
                        ?>
                        <a href="login.php" class="btn btn-main btn-effect login-btn">
                            <i class="icon-user"></i>Se connecter
                        </a>
                        <?php
                    endif
                    ?>                                  
                </li>
            </ul>
            <!-- ====== End of Extra Nav ====== -->

        </div>
        <!-- ====== End of #main-nav ====== -->
    </nav>
    <!-- ====== End of Navbar ====== -->

</div>
</header>
<!-- =============== END OF HEADER NAVIGATION =============== -->



<!-- =============== START OF PAGE HEADER =============== -->
<section class="page-header overlay-gradient" style="background: url(assets/images/posters/movie-collection.jpg);">
    <div class="container">
        <div class="inner">
            <h2 class="title">Mon Profil</h2>
            <ol class="breadcrumb">
                <li><a href="index.php">Accueil</a></li>
                <li>Mon profil </li>
            </ol>
        </div>
    </div>
</section>
<!-- =============== END OF PAGE HEADER =============== -->

<?php 
if (isset($_SESSION['Id'])):
    ?>

    <h2 style="text-align:center">Bienvenue <?php echo $_SESSION['Pseudo']; ?></h2>   

    <div class="col-md-10">
        <a href="edition.php" class="btn btn-main btn-effect login-btn"; left: 50px;>
         <i class="icon-user"; left: 50px></i> Editer mon profil 
     </a> 

 </div>

 <?php
endif
?>   


<!-- =============== START OF MAIN =============== -->
<main class="ptb100">
    <div class="container">

        <!-- Start of Filters -->
        <div class="row mb50">

            <div class="col-md-6">
                <!-- Layout Switcher -->
                <div class="layout-switcher">
                    <a href="movie-list.html" class="list"><i class="fa fa-align-justify"></i></a>
                    <a href="movie-grid.html" class="grid active"><i class="fa fa-th"></i></a>
                </div>
            </div>

            <div class="col-md-6">

                <!-- Sort by -->
                <div class="sort-by">
                    <div class="sort-by-select">
                        <select class="chosen-select-no-single">
                            <option>Default Order</option>
                            <option>Featured</option>
                            <option>Top Viewed</option>
                            <option>Top Rated</option>
                            <option>Newest</option>
                            <option>Oldest</option>
                        </select>
                    </div>
                </div>
                <!-- Sort by / End -->

            </div>

        </div>
        <!-- End of Filters -->

        <?php 
        if (isset($_SESSION['Id'])):
            ?>

            <div class="col-md-15">
                <h2 class="title"; style="text-align:center" >Films notés récemment</h2>
            </div>

            <?php
        else:
            echo '<font color="red">'."Connectez-vous pour accéder à votre profil ! "."</font>";

            ?>

            <a href="login.php" class="signInClick">
                <i class="icon-user"></i> Se connecter
            </a>


            <?php
        endif
        ?>   



        <!-- Start of Movie List -->
        <div class="row">

           <?php 

           
           if (isset($_SESSION['Id'])):
            

            try {
                $pdo = new PDO("mysql:host=localhost;dbname=kult", "root", "");
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $id = $_SESSION['Id'];
                $sql="SELECT IdFilm, Note FROM film_avis WHERE IdUtilisateur= '$id' ORDER BY Id DESC LIMIT 6";


                $results = $pdo->query($sql);
                
                foreach ($results as $row) {

                    $url="https://api.themoviedb.org/3/movie/".$row["IdFilm"]."?api_key=f28b73c15bf2d40ebce39e45e931d32e&language=fr-FR&page=1&region=FR"; 
                    
                    $json_response = file_get_contents($url);

                    $object_response = json_decode($json_response, true);

                    $size = count($object_response);

                    $poster=$object_response['poster_path'];  

                    //Synopsis

                    $overview=$object_response["overview"];


                    $single_id = $object_response["id"];
                    //echo $single_id ; 
                    //var_dump($single_id);

                    $url2="https://api.themoviedb.org/3/movie/".$single_id."/videos?api_key=f28b73c15bf2d40ebce39e45e931d32e&language=fr-FR";
                    $json_response2 = file_get_contents($url2);
                    //echo $json_response2; 
                    $object_response2 = json_decode($json_response2, true);

                    if($object_response2["results"] != null)
                        $id_film=$object_response2["results"][0]["key"];
                        //echo $id_film;
                    if($object_response2["results"] == null)
                        $id_film='NULL';


                    if (strlen($overview)>=150) {
                        $synopsis = substr($overview, 0, 150);
                        $synopsis .="...";
                    }
                    elseif(strlen($overview)<=150 && $overview!=""){
                        $nbmanquants = 150 - strlen($overview);

                        //for($j=0; $j<$nbmanquants; $j++){
                        $synopsis = $overview;
                        $synopsis .= str_repeat(". ", $nbmanquants) ;
                    }
                    
                    if($overview==""){
                     $synopsis = $overview;
                     $synopsis.="Désolés, nous ne disposons d'aucun résumé en français pour ce film (pour le moment).";
                     $synopsis .=str_repeat(". ", 66);

                 }


                 $title = $object_response['title'];
                 
                 if (strlen($title)>=14) {
                    $title = substr($title, 0, 14);
                    $title .="...";
                }

                


                echo '<!-- Movie List Item -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="movie-box-2 mb30">
                <div class="listing-container">

                <!-- Movie List Image -->
                <div class="listing-image">

                <!-- Play Button -->
                <div class="play-btn">

                <a href="https://www.youtube.com/watch?v='.$id_film.'" class="play-video">
                <i class="fa fa-play"></i>
                </a>
                </div>

                <!-- Buttons -->
                <div class="buttons">
                <a href="#" data-original-title="Rate" data-toggle="tooltip" data-placement="bottom" class="like">
                
                </a>

                
                
                </a>
                </div>';

                ?>


                <!-- Rating -->

                <?php

                echo '
                <div class="stars">
                <div class="rating">';

                if(isset($_SESSION['Id'])){

                    if($row['Note']=="0"){
                        echo '
                        <div class="mt10">
                        <span class="rating_stars rating_0">
                        <span class="s" data-low="0.5" data-high="1"><i class="fa fa-star-o"></i><i class="fa fa-star-half"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="1.5" data-high="2"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="2.5" data-high="3"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="3.5" data-high="4"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="4.5" data-high="5"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        </span>    
                        </div>';
                    }
                    elseif($row['Note']=="0.5"){
                        echo '
                        <div class="mt10">
                        <span class="rating_stars rating_0">

                        <span class="s active-low" data-low="0.5" data-high="1"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="1.5" data-high="2"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="2.5" data-high="3"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="3.5" data-high="4"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="4.5" data-high="5"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        </span>    
                        </div>';
                    }
                    elseif($row['Note']=="1"){
                        echo '
                        <div class="mt10">
                        <span class="rating_stars rating_0">
                        <span class="s active-high" data-low="0.5" data-high="1"><i class="fa fa-star-o"></i><i class="fa fa-star-half"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="1.5" data-high="2"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="2.5" data-high="3"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="3.5" data-high="4"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="4.5" data-high="5"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        </span>    
                        </div>';
                    }
                    elseif($row['Note']=="1.5"){
                        echo '
                        <div class="mt10">
                        <span class="rating_stars rating_0">
                        <span class="s active-high" data-low="0.5" data-high="1"><i class="fa fa-star-o"></i><i class="fa fa-star-half"></i><i class="fa fa-star"></i></span>
                        <span class="s active-low" data-low="1.5" data-high="2"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="2.5" data-high="3"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="3.5" data-high="4"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="4.5" data-high="5"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        </span>    
                        </div>';
                    }
                    elseif($row['Note']=="2"){
                        echo '
                        <div class="mt10">
                        <span class="rating_stars rating_0">
                        <span class="s active-high" data-low="0.5" data-high="1"><i class="fa fa-star-o"></i><i class="fa fa-star-half"></i><i class="fa fa-star"></i></span>
                        <span class="s active-high" data-low="1.5" data-high="2"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="2.5" data-high="3"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="3.5" data-high="4"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="4.5" data-high="5"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        </span>    
                        </div>';
                    }
                    elseif($row['Note']=="2.5"){
                        echo '
                        <div class="mt10">
                        <span class="rating_stars rating_0">
                        <span class="s active-high" data-low="0.5" data-high="1"><i class="fa fa-star-o"></i><i class="fa fa-star-half"></i><i class="fa fa-star"></i></span>
                        <span class="s active-high" data-low="1.5" data-high="2"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s active-low" data-low="2.5" data-high="3"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="3.5" data-high="4"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="4.5" data-high="5"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        </span>    
                        </div>';
                    }

                    elseif($row['Note']=="3"){
                        echo '
                        <div class="mt10">


                        <span class="rating_stars rating_0">
                        <span class="s active-high" data-low="0.5" data-high="1"><i class="fa fa-star-o"></i><i class="fa fa-star-half"></i><i class="fa fa-star"></i></span>
                        <span class="s active-high" data-low="1.5" data-high="2"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s active-high" data-low="2.5" data-high="3"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="3.5" data-high="4"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="4.5" data-high="5"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        </span>    
                        </div>';
                    }
                    elseif($row['Note']=="3.5"){
                        echo '
                        <div class="mt10">


                        <span class="rating_stars rating_0">
                        <span class="s active-high" data-low="0.5" data-high="1"><i class="fa fa-star-o"></i><i class="fa fa-star-half"></i><i class="fa fa-star"></i></span>
                        <span class="s active-high" data-low="1.5" data-high="2"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s active-high" data-low="2.5" data-high="3"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s active-low" data-low="3.5" data-high="4"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="4.5" data-high="5"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        </span>    
                        </div>';
                    }
                    elseif($row['Note']=="4"){
                        echo '
                        <div class="mt10">


                        <span class="rating_stars rating_0">
                        <span class="s active-high" data-low="0.5" data-high="1"><i class="fa fa-star-o"></i><i class="fa fa-star-half"></i><i class="fa fa-star"></i></span>
                        <span class="s active-high" data-low="1.5" data-high="2"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s active-high" data-low="2.5" data-high="3"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s active-high" data-low="3.5" data-high="4"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="4.5" data-high="5"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        </span>    
                        </div>';
                    }
                    elseif($row['Note']=="4.5"){
                        echo '
                        <div class="mt10">


                        <span class="rating_stars rating_0">
                        <span class="s active-high" data-low="0.5" data-high="1"><i class="fa fa-star-o"></i><i class="fa fa-star-half"></i><i class="fa fa-star"></i></span>
                        <span class="s active-high" data-low="1.5" data-high="2"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s active-high" data-low="2.5" data-high="3"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s active-high" data-low="3.5" data-high="4"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s active-low" data-low="4.5" data-high="5"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        </span>    
                        </div>';
                    }
                    elseif($row['Note']=="5"){
                        echo '
                        <div class="mt10">


                        <span class="rating_stars rating_0">
                        <span class="s active-high" data-low="0.5" data-high="1"><i class="fa fa-star-o"></i><i class="fa fa-star-half"></i><i class="fa fa-star"></i></span>
                        <span class="s active-high" data-low="1.5" data-high="2"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s active-high" data-low="2.5" data-high="3"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s active-high" data-low="3.5" data-high="4"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s active-high" data-low="4.5" data-high="5"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        </span>    
                        </div>';
                    }
                }
                echo '
                </div>
                </div>';







                echo '<!-- Image -->
                <img src="https://image.tmdb.org/t/p/w370_and_h556_bestv2/'.$poster.'" alt="">
                </div>

                <!-- Movie List Content -->
                <div class="listing-content">
                <div class="inner">
                <h2 class="title">'.$title.'</h2>

                <p>'.$synopsis.'</p>


                <a href="movie-detail.php?id='.$single_id.'" class="btn btn-main btn-effect">details</a>


                </div>
                </div>

                </div>
                </div>
                </div>

                <!-- test -->';

            }
        }
        catch (Exception $e) {
            print("Erreur : " . $e->getMessage());
        }

        ?>
        

        <?php
    endif
    ?>   

    


    





</div>
<!-- End of Movie List -->



                <!-- Start of Pagination 
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <nav class="pagination">
                            <ul>
                                <li><a href="#" class="current-page">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="ti-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            -->

        </div>
    </main>
    <!-- =============== END OF MAIN =============== -->



    <?php 
    if (isset($_SESSION['Id'])):
        ?>

        <div class="col-md-15">
            <h2 class="title"; style="text-align:center" >Films à voir plus tard</h2>
        </div>

        <?php
    endif
    ?>  


    <!-- =============== START OF FOOTER =============== -->
    <footer class="footer1 bg-dark">

        <!-- ===== START OF FOOTER WIDGET AREA ===== -->
        <div class="footer-widget-area ptb100">
            <div class="container">
                <div class="row">

                    <!-- Start of Widget 1 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget widget-about">

                            <!-- INSERT YOUR LOGO HERE -->
                            <!--<img src="assets/images/logo.svg" alt="logo" class="logo"> -->
                            <!-- INSERT YOUR WHITE LOGO HERE -->
                            <!--<img src="assets/images/logo-white.svg" alt="white logo" class="logo-white"> -->
                            <h4 class="widget-title">Kult</h4>
                            <p class="nomargin">Kult est une plateforme de recommandation de film pour des soirées en groupe. Ne perdez plus votre temps à chercher un film.</p>
                        </div>
                    </div>
                    <!-- End of Widget 1 -->

                    <!-- Start of Widget 2 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget widget-links">
                            <h4 class="widget-title">liens vers API</h4>

                            <ul class="general-listing">
                                <li><a href="https://waatch.docs.apiary.io/#">Captain watch</a></li>
                                <li><a href="https://developers.themoviedb.org/3">The Movie Database</a></li>
                                <li><a href="http://www.omdbapi.com/">Open Movie Database</a></li>
                            </ul>

                        </div>
                    </div>
                    <!-- End of Widget 2 -->

                    <!-- Start of Widget 3 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget widget-blog">
                            <h4 class="widget-title">Contact</h4>

                            <ul class="blog-posts">
                                <li><a href="#">Formulaire de contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End of Widget 3 -->

                    <!-- Start of Widget 4 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget widget-social">
                            <h4 class="widget-title">Suivez-nous</h4>

                            <p>Vous pouvez nous suivre sur les différents réseaux sociaux.</p>

                            <!-- Start of Social Buttons -->
                            <ul class="social-btns">
                                <!-- Social Media -->
                                <li>
                                    <a href="#" class="social-btn-roll facebook">
                                        <div class="social-btn-roll-icons">
                                            <i class="social-btn-roll-icon fa fa-facebook"></i>
                                            <i class="social-btn-roll-icon fa fa-facebook"></i>
                                        </div>
                                    </a>
                                </li>

                                <!-- Social Media -->
                                <li>
                                    <a href="#" class="social-btn-roll twitter">
                                        <div class="social-btn-roll-icons">
                                            <i class="social-btn-roll-icon fa fa-twitter"></i>
                                            <i class="social-btn-roll-icon fa fa-twitter"></i>
                                        </div>
                                    </a>
                                </li>

                                <!-- Social Media -->
                                <li>
                                    <a href="#" class="social-btn-roll google-plus">
                                        <div class="social-btn-roll-icons">
                                            <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                            <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                        </div>
                                    </a>
                                </li>

                                <!-- Social Media -->
                                <li>
                                    <a href="#" class="social-btn-roll instagram">
                                        <div class="social-btn-roll-icons">
                                            <i class="social-btn-roll-icon fa fa-instagram"></i>
                                            <i class="social-btn-roll-icon fa fa-instagram"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <!-- End of Social Buttons -->

                        </div>
                    </div>
                    <!-- End of Widget 4 -->

                </div>
            </div>
        </div>
        <!-- ===== END OF FOOTER WIDGET AREA ===== -->


        <!-- ===== START OF FOOTER COPYRIGHT AREA ===== -->
        <div class="footer-copyright-area ptb30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex">
                            <div class="links">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#">Privacy & Cookies</a></li>
                                    <li class="list-inline-item"><a href="#">Terms & Conditions</a></li>
                                    <li class="list-inline-item"><a href="#">Legal Disclaimer</a></li>
                                    <li class="list-inline-item"><a href="#">Community</a></li>
                                </ul>
                            </div>

                            <div class="copyright ml-auto">All Rights Reserved by <a href="#">Kult</a>.</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===== END OF FOOTER COPYRIGHT AREA ===== -->

    </footer>
    <!-- =============== END OF FOOTER =============== -->

</div>
<!-- =============== END OF WRAPPER =============== -->




<!-- =============== START OF GENERAL SEARCH WRAPPER =============== -->
<div class="general-search-wrapper">
    <form class="general-search" role="search" method="get" action="#">
        <input type="text" placeholder="Type and hit enter...">
        <span id="general-search-close" class="ti-close toggle-search"></span>
    </form>
</div>
<!-- =============== END OF GENERAL SEARCH WRAPPER =============== -->



<!-- =============== START OF LOGIN & REGISTER POPUP =============== -->
<div id="login-register-popup" class="small-dialog zoom-anim-dialog mfp-hide">

    <!-- ===== Start of Signin wrapper ===== -->
    <div class="signin-wrapper">
        <div class="small-dialog-headline">
            <h4 class="text-center">Sign in</h4>
        </div>


        <div class="small-dialog-content">

            <!-- Start of Login form -->
            <form id="cariera_login" method="post">
                <p class="status"></p>

                <div class="form-group">
                    <label for="username">Username or Email *</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Your Username or Email *" />
                </div>

                <div class="form-group">
                    <label for="password">Password *</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Your Password *" />
                </div>

                <div class="form-group">
                    <div class="checkbox pad-bottom-10">
                        <input id="check1" type="checkbox" name="remember" value="yes">
                        <label for="check1">Keep me signed in</label>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Sign in" class="btn btn-main btn-effect nomargin" />
                </div>
            </form>
            <!-- End of Login form -->

            <div class="bottom-links">
                <span>
                    Not a member?
                    <a  class="signUpClick">Sign up</a>
                </span>
                <a  class="forgetPasswordClick pull-right">Forgot Password</a>
            </div>
        </div>

    </div>
    <!-- ===== End of Signin wrapper ===== -->



    <!-- ===== Start of Signup wrapper ===== -->
    <div class="signup-wrapper">
        <div class="small-dialog-headline">
            <h4 class="text-center">Sign Up</h4>
        </div>

        <div class="small-dialog-content">

            <!-- Start of Registration form -->
            <form id="cariera_registration" action="#" method="POST">
                <p class="status"></p>

                <div class="form-group">
                    <label for="movify_user_login">Username</label>
                    <input name="movify_user_login" id="movify_user_login" class="form-control" type="text"/>
                </div>

                <div class="form-group">
                    <label for="movify_user_email">Email</label>
                    <input name="movify_user_email" id="movify_user_email" class="form-control" type="email"/>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="movify_user_pass" id="movify_password" class="form-control" type="password"/>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-main btn-effect nomargin" value="Register"/>
                </div>
            </form>
            <!-- End of Registration form -->

            <div class="bottom-links">
                <span>
                    Already have an account?
                    <a class="signInClick">Sign in</a>
                </span>

                <a class="forgetPasswordClick pull-right">Forgot Password</a>
            </div>

        </div> <!-- .small-dialog-content -->

    </div>
    <!-- ===== End of Signup wrapper ===== -->



    <!-- ===== Start of Forget Password wrapper ===== -->
    <div class="forgetpassword-wrapper">
        <div class="small-dialog-headline">
            <h4 class="text-center">Forgotten Password</h4>
        </div>

        <div class="small-dialog-content">

            <!-- Start of Forger Password form -->
            <form id="forget_pass_form" action="#"  method="post">
                <p class="status"></p>

                <div class="form-group">
                    <label for="password">Email Address *</label>
                    <input type="email" name="user_login" class="form-control" id="email3" placeholder="Email Address *" />
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" value="Get New Password" class="btn btn-main btn-effect nomargin" />
                </div>
            </form>
            <!-- End of Forger Password form -->

            <div class="bottom-links">
                <a class="cancelClick">Cancel</a>
            </div>

        </div><!-- .small-dialog-content -->

    </div>
    <!-- ===== End of Forget Password wrapper ===== -->

</div>
<!-- =============== END OF LOGIN & REGISTER POPUP =============== -->



<!-- ===== Start of Back to Top Button ===== -->
<div id="backtotop">
    <a href="#"></a>
</div>
<!-- ===== End of Back to Top Button ===== -->



<!-- ===== All Javascript at the bottom of the page for faster page loading ===== -->
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.ajaxchimp.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.mmenu.js"></script>
<script src="assets/js/jquery.inview.min.js"></script>
<script src="assets/js/jquery.countTo.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/headroom.js"></script>
<script src="assets/js/custom.js"></script>

<!-- ===== Slider Revolution core JavaScript files ===== -->
<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- ===== Slider Revolution extension scripts ===== -->
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>

</body>

</html>
