<?php
session_start();
$db_handle=mysqli_connect("127.0.0.1","root", "", "kult");
    $db_found = mysqli_select_db($db_handle,"kult");
    # controle
    if (mysqli_connect_error())
    {
        echo "Echec de connexion à la base de donnée";
        echo "Error code : ". mysqli_connect_error();
    }
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

                    <a class="navbar-brand" href="index.php">
                        <!-- INSERT YOUR LOGO HERE -->
                        KULT
                        <!-- INSERT YOUR WHITE LOGO HERE -->
                        
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
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accueil</a>

                                <!-- Dropdown Menu -->
                                <ul class="dropdown-menu">
                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="index.php">Home Version 1</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="index2.html">Home Version 2</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="index3.html">Home Version 3</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="index4.html">Home Version 4</a>
                                    </li>

                                </ul>
                            </li>

                            <!-- Menu Item -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fil d'actus</a>

                                <!-- Dropdown Menu -->
                                <ul class="dropdown-menu">
                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="404.html">404 Page</a>
                                    </li>

                                    <!-- Divider -->
                                    <li class="divider" role="separator"></li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="celebrities-list.html">celebrities list</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="celebrities-grid.html">celebrities grid</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="celebrity-detail.html">celebrity detail</a>
                                    </li>

                                    <!-- Divider -->
                                    <li class="divider" role="separator"></li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="contact-us.html">Contact us</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="coming-soon.html">Coming soon</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="pricing.html">Pricing Plan</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="login-register.html">Login - Register</a>
                                    </li>
                                    
                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Menu Item -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Groupes</a>

                                <!-- Dropdown Menu -->
                                <ul class="dropdown-menu">
                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="movie-list.html">Movie List 1</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="movie-list2.html">Movie List 2</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="movie-grid.html">Movie Grid 1</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="movie-grid2.html">Movie Grid 2</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="movie-grid3.html">Movie Grid 3</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="movie-grid4.html">Movie Grid 4</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="movie-detail.html">Movie Detail</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="movie-detail2.html">Movie Detail 2</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="watch-later.html">Watch Later</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Menu Item -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>

                                <!-- Dropdown Menu -->
                                <ul class="dropdown-menu">
                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="blog-list.html">Blog List</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="blog-list-fullwidth.html">Blog List Fullwidth</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="blog-post-detail.html">Blog Detail</a>
                                    </li>

                                    <!-- Menu Item -->
                                    <li>
                                        <a class="dropdown-item" href="blog-post-detail-fullwidth.html">Blog Detail Fullwidth</a>
                                    </li>

                                </ul>
                            </li>

                            <!-- Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="contact-us.html">Contact us</a>
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
                                <a href="#login-register-popup" class="btn btn-main btn-effect login-btn popup-with-zoom-anim">
                                    <i class="icon-user"></i>Se connecter
                                </a>
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
                    <h2 class="title">MES GROUPES</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                    
                    </ol>
                </div>
            </div>
        </section>
        <!-- =============== END OF PAGE HEADER =============== -->



        <!-- =============== START OF MAIN =============== -->
        <main class="ptb100">
            <div class="container">
                <a href="creationgroupe.php" class="list active">CREER UN NOUVEAU GROUPE</a>
                <!-- Start of Filters -->
                <div class="row mb50">

                    <div class="col-md-6">
                        <!-- Layout Switcher -->
                        <div class="layout-switcher">
                            <!-- <a href="groupe.php" class="list active"><i class="fa fa-align-justify"></i></a>-->
                           
                        </div>
                    </div>

                    <div class="col-md-6">

                        <!-- Sort by -->
                        <div class="sort-by">
                            <div class="sort-by-select">
                               <select class="chosen-select-no-single">
                                    <option>Ordre par défaut</option>
                                    <option>Featured</option>
                                    <option>Plus vu</option>
                                    <option>Mieux noté</option>
                                    <option>Récent</option>
                                    <option>Ancien</option>
                                </select>
                            </div>
                        </div>
                        <!-- Sort by / End -->

                    </div>

                </div>
                <!-- End of Filters -->



                <!-- Start of Movie List -->
                <div class="row">

                    <!-- Groupe List Item -->
                    <?php

                //if(isset($_POST['recherche'])) {
                    if(isset($_SESSION['id'])){
                    //$id = 1;
                  //Requête à ma BDD pour récupérer les groupes de l'utilisateur
                    if($db_handle && $db_found){
                         $SQL1 = "SELECT * FROM groupe_membre WHERE IdUtilisateur='".$_SESSION['id']."'";
                         $result1 = mysqli_query($db_handle, $SQL1);

                        while($db_field1=mysqli_fetch_assoc($result1)){

                         $SQL2 = "SELECT * FROM groupe WHERE Id='".$db_field1['IdGroupe']."'";
                         $result2 = mysqli_query($db_handle, $SQL2);
                         $db_field2=mysqli_fetch_assoc($result2);
                        
                        echo '<div class="col-md-12 col-sm-12">
                        <div class="movie-list-1 mb30">
                            <div class="listing-container">

                                <!-- Movie List Image -->
                                <div class="listing-content">
                                <div class="inner">
                                        <h3 style="font-color: white;" class="title">'.$db_field2['Nom'].'</h3>

                                        <p></p>

                                         <a href="groupe-detail.php?id='.$db_field2['Id'].'" class="btn btn-main btn-effect">details</a>
                                    </div>
                                    

                                    <!-- Buttons -->
                                    <div class="buttons">
                                        
                                    </div>

                                    <!-- Rating -->
                                    <div class="stars">
                                        
                                    </div>

                                    
                                </div>

                                <!-- Movie List Content -->
                                <div style="margin-top: 50px;"class="listing-content">';
                                $SQL3 = "SELECT * FROM groupe_membre WHERE IdGroupe='".$db_field2['Id']."'";
                             $result3 = mysqli_query($db_handle, $SQL3);
                              while($db_field3=mysqli_fetch_assoc($result3)){
                                  $SQL4 = "SELECT * FROM utilisateur WHERE Id='".$db_field3['IdUtilisateur']."'";
                                  $result4 = mysqli_query($db_handle, $SQL4);
                                  while($db_field4=mysqli_fetch_assoc($result4)){
                                      if($db_field4['Id']!=$_SESSION['Id']){
                                            echo '<h3 style="color: white;" class="title">'.$db_field4['Pseudo'].'</h3>';
                                      }
                                      else{
                                          echo '<h3 style="color: white;" class="title"> Moi </h3>';
                                      }
                              }} 
                                
                                echo '</div>

                            </div>
                        </div>
                    </div>';
                             
                            
                                
                        }
                            

                         

                        }


                     }

                //}

  ?>  
                    
                </div>
                <!-- End of Movie List -->



                <!-- Start of Pagination -->
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
                <!-- End of Pagination -->

            </div>
        </main>
        <!-- =============== END OF MAIN =============== -->



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
                                <img src="assets/images/logo.svg" alt="logo" class="logo">
                                <!-- INSERT YOUR WHITE LOGO HERE -->
                                <img src="assets/images/logo-white.svg" alt="white logo" class="logo-white">
                                <p class="nomargin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ducimus, atque. Praesentium suscipit provident explicabo dignissimos nostrum numquam deserunt earum accusantium et fugit.</p>
                            </div>
                        </div>
                        <!-- End of Widget 1 -->

                        <!-- Start of Widget 2 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget widget-links">
                                <h4 class="widget-title">Useful links</h4>

                                <ul class="general-listing">
                                    <li><a href="#">about movify</a></li>
                                    <li><a href="#">blog</a></li>
                                    <li><a href="#">forum</a></li>
                                    <li><a href="#">my account</a></li>
                                    <li><a href="#">watch list</a></li>
                                </ul>

                            </div>
                        </div>
                        <!-- End of Widget 2 -->

                        <!-- Start of Widget 3 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget widget-blog">
                                <h4 class="widget-title">latest news</h4>

                                <ul class="blog-posts">
                                    <li><a href="#">blog post 1</a><small>januar 13, 2018</small></li>
                                    <li><a href="#">blog post 2</a><small>januar 13, 2018</small></li>
                                    <li><a href="#">blog post 3</a><small>januar 13, 2018</small></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End of Widget 3 -->

                        <!-- Start of Widget 4 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget widget-social">
                                <h4 class="widget-title">follow us</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ducimus, atque.</p>

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

                                <div class="copyright ml-auto">All Rights Reserved by <a href="#">Movify</a>.</div>

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
                <h4 class="text-center">Se connecter</h4>
            </div>


            <div class="small-dialog-content">

                <!-- Start of Login form -->
                <form id="cariera_login" method="post">
                    <p class="status"></p>

                    <div class="form-group">
                        <label for="username">Pseudo ou Email</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Pseudo ou Email" />
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" />
                    </div>

                    <div class="form-group">
                        <div class="checkbox pad-bottom-10">
                            <input id="check1" type="checkbox" name="remember" value="yes">
                            <label for="check1">Rester connecté</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Se connecter" class="btn btn-main btn-effect nomargin" />
                    </div>
                </form>
                <!-- End of Login form -->

                <div class="bottom-links">
                    <span>
                        Pas déjà inscrit ?
                        <a  class="signUpClick">S'inscrire</a>
                    </span>
                    <a  class="forgetPasswordClick pull-right">Mot de passe oublié</a>
                </div>
            </div>

        </div>
        <!-- ===== End of Signin wrapper ===== -->



        <!-- ===== Start of Signup wrapper ===== -->
        <div class="signup-wrapper">
            <div class="small-dialog-headline">
                <h4 class="text-center">S'inscrire</h4>
            </div>

            <div class="small-dialog-content">

                <!-- Start of Registration form -->
                <form method="POST" action="">
                    <p class="status"></p>

                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" placeholder="Votre nom" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />
                    </div>

                    <div class="form-group">
                        <label for="prenom">Prenom</label>
                       <input type="text" placeholder="Votre prenom" id="prenom" name="prenom" value="<?php if(isset($prenom)) { echo $prenom; } ?>" />
                    </div>


                    <div class="form-group">
                        <label for="nom">Pseudo</label>
                        <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                    </div>


                    <div class="form-group">
                        <label for="mail">Email</label>
                        <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                    </div>


                    <div class="form-group">
                        <label for="mail2">Confirmation Email</label>
                        <input type="email" placeholder="Confirmation de votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
        
                    </div>

                     <div class="form-group">
                        <label for="mdp">Mot de passe</label>
                        <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                    </div>


                    <div class="form-group">
                        <label for="mdp2">Confirmer votre mot de passe</label>
                        <input type="password" placeholder="Confirmation du mot de passe" id="mdp2" name="mdp2" />
                    </div>
             

                    <div class="form-group">

                        <input type="submit" class="btn btn-main btn-effect nomargin" name="forminscription" value="S'inscrire"/>

                    </div>
                </form>

                <!-- message d'erreur  -->

                 <?php
                 if(isset($erreur)) {
                    echo '<font color="red">'.$erreur."</font>";
                 }
                 ?>                

                <!-- End of Registration form -->

                <div class="bottom-links">
                    <span>
                        Déjà un compte ?
                        <a class="signInClick">Se connecter</a>
                    </span>

                    <a class="forgetPasswordClick pull-right">Mot de passe oublié</a>
                </div>

            </div> <!-- .small-dialog-content -->

        </div>
        <!-- ===== End of Signup wrapper ===== -->



        <!-- ===== Start of Forget Password wrapper ===== -->
        <div class="forgetpassword-wrapper">
            <div class="small-dialog-headline">
                <h4 class="text-center">Mot de passe oublié</h4>
            </div>

            <div class="small-dialog-content">

                <!-- Start of Forger Password form -->
                <form id="forget_pass_form" action="#"  method="post">
                    <p class="status"></p>

                    <div class="form-group">
                        <label for="password">Adresse Email</label>
                        <input type="email" name="user_login" class="form-control" id="email3" placeholder="Email Address *" />
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" value="Get New Password" class="btn btn-main btn-effect nomargin" />
                    </div>
                </form>
                <!-- End of Forger Password form -->

                <div class="bottom-links">
                    <a class="cancelClick">Annuler</a>
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


   
</body>
</html>