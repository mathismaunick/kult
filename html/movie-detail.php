<?php
session_start();
$db_handle=mysqli_connect("127.0.0.1","root", "", "kult");
$db_found = mysqli_select_db($db_handle,"kult");

    
        
if(isset($_POST['rating'])){
     $SQL2 = "INSERT INTO `film_avis`(`IdFilm`, `IdUtilisateur`, `Note`) VALUES (".$_GET['id']." , ".$_SESSION['Id'].",".$_POST['rating'].")";
     $result2 = mysqli_query($db_handle, $SQL2);
    
}
?>


<!DOCTYPE html>

<html lang="en">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/star.js"></script>
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
    
    <link type="text/css" rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">


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
                        <h4><strong>KULT</strong></h4>
                        <!-- INSERT YOUR WHITE LOGO HERE -->
                    </a>

                    <!-- Login Button on Responsive -->
                    <?php
                                    if (isset($_SESSION['Id'])):
                                    ?>
                                        <a href="logout.php" class="login-mobile-btn popup-with-zoom-anim"><i class="icon-user"></i>
                                        </a>
                                    <?php
                                    else:
                                    ?>
                                        <a href="login.php" class="login-mobile-btn popup-with-zoom-anim"><i class="icon-user"></i>
                                        </a>
                                    <?php
                                    endif
                                    ?>  
                    
                    
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

                        <li class="nav-item">

                            <?php
                            if (isset($_SESSION['Id'])):
                                ?>
                                <a class="nav-link" href="groupe.php?id=<?= $_SESSION['Id'] ?>"\'>Groupes</a>
                                <?php
                            else:
                                ?>
                                <a class="nav-link" a href="groupe.php">Groupes</a>
                                <?php
                            endif
                            ?>

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

                        <!-- Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="contact-us.php">Contactez nous</a>
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



        <!-- =============== START OF MOVIE DETAIL INTRO =============== -->
        <section class="movie-detail-intro overlay-gradient ptb100" style="background: url(assets/images/other/movie-detail-bg.jpg);">
        </section>
        <!-- =============== END OF MOVIE DETAIL INTRO =============== -->


<!-- Récupération des infos via les requetes-->
<?php
$id = $_GET['id'];

/////Requete à TMDB
$result = json_decode(file_get_contents('https://api.themoviedb.org/3/movie/'.$id.'?api_key=f28b73c15bf2d40ebce39e45e931d32e&language=fr-FR'), TRUE);

if($result['title'] != ""){
    $title = $result['title'];}
else{$title = " ";}

if($result['overview'] != ""){
    $overview = $result['overview'];}
else{$overview = " ";}

if($result['production_countries'] != null){
    $production_countries = $result['production_countries'][0]['iso_3166_1'];}
else{$production_countries = " ";}

if($result['runtime'] != null){
    $runtime = $result['runtime'];}
else{$runtime = " ";}

if($result['release_date'] != null){
    $release_date = $result['release_date'];}
else{$release_date = " ";}

if($result['spoken_languages'] != null){
    $spoken_languages = $result['spoken_languages'][0]['name'];}
else{$spoken_languages = " ";}

if($result['vote_count'] != null){
    $vote_count = $result['vote_count'];}
else{$vote_count = " ";}

//Traitement pour affichage du genre
if($result['genres'] != null){
    $genres = $result['genres'];
    $tmp = count($genres);
    $tot_genres='';
    for($i=0;$i<$tmp;$i++){
        $tot_genres .= $result['genres'][$i]['name'].', ';
    }
    $tot_genres = substr("$tot_genres", 0, -2);
    }
else{$tot_genres=' ';}


//Traitement pour affichage du budget
if($result['budget'] != null){
    $budget = $result['budget'];
    if($budget>=1000000){
        $budget = substr("$budget", 0, -6).' Million(s) USD';
    }
    if($budget>=1000000000){
        $budget = substr("$budget", 0, -9).' Milliard(s) USD';
    }
}
else{$budget ="/";}

//Blindage Affiches
if($result['poster_path'] != 'null'){
    $poster_path = $result['poster_path'];
}


/////Requete à TMDB (pour la vidéo)
$vid = json_decode(file_get_contents('https://api.themoviedb.org/3/movie/'.$id.'/videos?api_key=f28b73c15bf2d40ebce39e45e931d32e&language=fr-FR'), TRUE);
if($vid['results'] != null){
    $video = $vid['results'][0]['key'];
}


/////Requete à CaptainWatch
$capt = json_decode(file_get_contents('https://api.waatch.co/v1/movies/'.$id.'?api_key=5AC9C78B-DD2F-4515-ABD7-B651056B3D56'), TRUE);
if($capt['crews'] != null){$crews = $capt['crews'][0]['name'];}
else{$crews = " ";}

//Traitement pour affichage casting
$casting = $capt['casts'];
$tmp2 = count($casting);


?>

        <!-- =============== START OF MOVIE DETAIL INTRO 2 =============== -->
        <section class="movie-detail-intro2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="movie-poster">
                            <?php
                            if($poster_path != null){
                                echo '<img src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/'.$poster_path.'" alt="">';                        
                            }
                            else{
                                echo '<img src="assets/images/posters/poster-8.jpg" alt="">';
                            }
                            if($vid['results'] != null){
                                echo '<a href="https://www.youtube.com/watch?v='.$video.'" class="play-video">';
                            }
                            else{
                                echo '<a href="https://www.youtube.com/watch?v=skYJpowAYPw" class="play-video">';
                            }
                            ?>
                                <i class="fa fa-play"></i>
                            </a>
                        </div>


                        <div class="movie-details">
                            <?php echo '<h3 class="title">'.$title.'</h3>'?>

                            <ul class="movie-subtext">
                                <?php echo '<li>'.$runtime.' min</li>'?>
                                <?php echo '<li>'.$tot_genres.'</li>'?>
                                <?php echo '<li>'.$release_date.'</li>'?>
                            </ul>
                            <?php
                            if($vid['results'] != null){
                             echo '<a href="https://www.youtube.com/watch?v=' .$video. '" class="btn btn-main btn-effect">trailer</a>';
                            }
                            else{
                                echo '<a href="#" class="btn btn-main btn-effect">trailer</a>';
                            }
                                ?>
                            <a href="#" class="btn btn-main btn-effect">watch later</a>
                            <a href="#" class="btn rate-movie"><i class="icon-heart"></i></a>
                            
                            <?php 
                             $SQLnote = "SELECT * FROM film_avis WHERE IdFilm='".$_GET['id']."' AND IdUtilisateur='".$_SESSION['Id']."'";
                            $resultnote = mysqli_query($db_handle, $SQLnote);
                            $db_fieldnote=mysqli_fetch_assoc($resultnote);
                            
                            
                            if($db_fieldnote==NULL){
                                echo '<form method="post">
                            <div class="mt10">
                            
                            <span class="rating_stars rating_0">
                        <span class="s" data-low="0.5" data-high="1"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="1.5" data-high="2"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="2.5" data-high="3"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="3.5" data-high="4"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                        <span class="s" data-low="4.5" data-high="5"><i class="fa fa-star-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star"></i></span>
                            
                        
                        <span class="r r0_5" data-rating="1" data-value="0.5"></span>
                        <span class="r r1" data-rating="1" data-value="1"></span>
                        <span class="r r1_5" data-rating="15" data-value="1.5"></span>
                        <span class="r r2" data-rating="2" data-value="2"></span>
                        <span class="r r2_5" data-rating="25" data-value="2.5"></span>
                        <span class="r r3" data-rating="3" data-value="3"></span>
                        <span class="r r3_5" data-rating="35" data-value="3.5"></span>
                        <span class="r r4" data-rating="4" data-value="4"></span>
                        <span class="r r4_5" data-rating="45" data-value="4.5"></span>
                        <span class="r r5" data-rating="5" data-value="5"></span>
                        </span> <input type="submit" style="background: none; border: none; cursor: pointer; color: white;" value="Noter ce film"/>
                                <div class="values">
                
                      <div>
                        <input type="hidden" id="rating" value="0" />
                      </div>
                      <div>
                        <input type="hidden" name="rating" id="rating_val" value="0" />
                      </div>


                    </div>
                               
                        </div>
                                </form> ';
                                
                            }
                            elseif($db_fieldnote['Note']=="0"){
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
                            elseif($db_fieldnote['Note']=="0.5"){
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
                        elseif($db_fieldnote['Note']=="1"){
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
                        elseif($db_fieldnote['Note']=="1.5"){
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
                            elseif($db_fieldnote['Note']=="2"){
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
                            elseif($db_fieldnote['Note']=="2.5"){
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
                            
                            elseif($db_fieldnote['Note']=="3"){
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
                             elseif($db_fieldnote['Note']=="3.5"){
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
                            elseif($db_fieldnote['Note']=="4"){
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
                            elseif($db_fieldnote['Note']=="4.5"){
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
                            elseif($db_fieldnote['Note']=="5"){
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
                            
                            
                            
                            ?>
                             
                                <!-- <<div class="rating mt10">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i> -->
                           
                   
                               
                            </div> 
                   
                        <div class="clearfix"></div>

                    </div>
                   
                
                </div>
            </div>
        </section>
        <!-- =============== End OF MOVIE DETAIL INTRO 2 =============== -->

        <!-- =============== START OF MOVIE DETAIL MAIN SECTION =============== -->
        <section class="movie-detail-main ptb100">
            <div class="container">

                <div class="row">
                    <!-- Start of Movie Main -->
                    <div class="col-lg-8 col-sm-12">
                        <div class="inner pr50">

                            <!-- Storyline -->
                            <div class="storyline">
                                <h3 class="title">Résumé</h3>

                                <?php echo '<p> '.$overview.'</p>';?>
                            </div>

                            <!-- Media -->
                            <div class="movie-media mt50">
                                <h3 class="title"> Photos & Vidéos</h3>

                                <ul class="image-gallery isotope">
                                    <li class="element">
                                        <a href="assets/images/blog/bloglist-1.jpg">
                                            <img src="assets/images/blog/bloglist-1.jpg" class="img-responsive" alt="">
                                        </a>
                                    </li>

                                    <li class="element">
                                        <a href="assets/images/blog/bloglist-2.jpg">
                                            <img src="assets/images/blog/bloglist-2.jpg" class="img-responsive" alt="">
                                        </a>
                                    </li>

                                    <li class="element">
                                        <a href="assets/images/other/home2-bg.jpg">
                                            <img src="assets/images/other/home2-bg.jpg" class="img-responsive" alt="">
                                        </a>
                                    </li>

                                    <li class="element">
                                        <a href="assets/images/blog/bloglist-2.jpg">
                                            <img src="assets/images/blog/bloglist-2.jpg" class="img-responsive" alt="">
                                        </a>
                                    </li>

                                    <li class="element">
                                        <a href="assets/images/blog/bloglist-1.jpg">
                                            <img src="assets/images/blog/bloglist-1.jpg" class="img-responsive" alt="">
                                        </a>
                                    </li>

                                    <li class="element">
                                        <a href="assets/images/blog/bloglist-3.jpg">
                                            <img src="assets/images/blog/bloglist-3.jpg" class="img-responsive" alt="">
                                        </a>
                                    </li>

                                    <li class="element">
                                        <a href="assets/images/blog/bloglist-1.jpg">
                                            <img src="assets/images/blog/bloglist-1.jpg" class="img-responsive" alt="">
                                        </a>
                                    </li>

                                    <li class="element">
                                        <a href="assets/images/other/landscape.jpg">
                                            <img src="assets/images/other/landscape.jpg" class="img-responsive" alt="">
                                        </a>
                                    </li>

                                    <li class="element">
                                        <a href="assets/images/other/home2-bg.jpg">
                                            <img src="assets/images/other/home2-bg.jpg" class="img-responsive" alt="">
                                        </a>
                                    </li>
                                </ul>

                            </div>

                        </div>
                    </div>
                    <!-- End of Movie Main -->


                    <!-- Start of Sidebar -->
                    <div class="col-lg-4 col-sm-12">
                        <div class="sidebar">

                            <!-- Start of Details Widget -->
                            <aside class="widget widget-movie-details">
                                <h3 class="title">Détails</h3>

                                <ul>
                                    <?php echo '<li><strong>Date de sortie: </strong>'.$release_date.'</li>'?>
                                    <?php echo '<li><strong>Réalisateur: </strong>'.$crews.'</li>'?>
                                    <?php echo '<li><strong>Budget: </strong>'.$budget.'</li>'?>
                                    <?php echo '<li><strong>Pays de production: </strong>'.$production_countries.'</li>'?>
                                    <?php echo '<li><strong>Langue originale: </strong>'.$spoken_languages.'</li>'?>
                                </ul>
                            </aside>
                            <!-- End of Details Widget -->

                            <!-- Start of Details Widget -->
                            <aside class="widget widget-movie-cast">
                                <h3 class="title">Cast</h3>

                                <ul class="cast-wrapper">
                                    <?php 
                                    for($j=0;$j<$tmp2;$j++){

                                        $id_acteur = $capt['casts'][$j]['id'];
                                        $req_acteur = json_decode(file_get_contents('https://api.themoviedb.org/3/person/'.$id_acteur.'?api_key=f28b73c15bf2d40ebce39e45e931d32e&language=fr-FR'), TRUE);
                                        $img_acteur = $req_acteur['profile_path'];

                                    echo '
                                       <li>
                                            <a href="celebrity-detail.html">
                                                <span class="circle-img">
                                                    <img src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/'.$img_acteur.'" alt="">
                                                    
                                                </span>
                                                <h6 class="name">'.$capt['casts'][$j]['name'].'</h6>
                                            </a>
                                        </li> ';
                                    }
                                     

                                    ?>

                                    

                                    
                                </ul>

                                <a href="celebrities-list.html" class="btn btn-main btn-effect mt20">view all</a>

                            </aside>
                            <!-- End of Details Widget -->

                        </div>
                    </div>
                    <!-- End of Sidebar -->
                </div>

            </div>
        </section>
        <!-- =============== END OF MOVIE DETAIL MAIN SECTION =============== -->



        <!-- =============== START OF RECOMMENDED MOVIES SECTION =============== -->
        <section class="recommended-movies bg-light ptb100">
            <div class="container">

                <!-- Start of row -->
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <h2 class="title">People who liked this also liked...</h2>
                    </div>
                </div>
                <!-- End of row -->


                <!-- Start of Latest Movies Slider -->
                <div class="owl-carousel recommended-slider mt20">

                    <!-- === Start of Sliding Item 1 === -->
                    <div class="item">
                        <!-- Start of Movie Box -->
                        <div class="movie-box-1">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="assets/images/posters/poster-5.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-detail.html">Daredevil</a>
                                </h4>
                                <span class="released">19 Apr 2015</span>
                            </div>
                            <!-- End of Movie Details -->

                            <!-- Start of Rating -->
                           <!-- <div class="stars">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <span>8.7 / 10</span>
                            </div> -->
                            <!-- End of Rating -->

                        </div>
                        <!-- End of Movie Box -->
                    </div>
                    <!-- === End of Sliding Item 1 === -->


                    <!-- === Start of Sliding Item 2 === -->
                    <div class="item">
                        <!-- Start of Movie Box -->
                        <div class="movie-box-1">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="assets/images/posters/poster-6.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-detail.html">Stranger Things</a>
                                </h4>
                                <span class="released">15 Jul 2016</span>
                            </div>
                            <!-- End of Movie Details -->

                            <!-- Start of Rating -->
                            <div class="stars">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <span>9 / 10</span>
                            </div>
                            <!-- End of Rating -->

                        </div>
                        <!-- End of Movie Box -->
                    </div>
                    <!-- === End of Sliding Item 2 === -->


                    <!-- === Start of Sliding Item 3 === -->
                    <div class="item">
                        <!-- Start of Movie Box -->
                        <div class="movie-box-1">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="assets/images/posters/poster-7.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-detail.html">Luke Cage</a>
                                </h4>
                                <span class="released">30 Sep 2016</span>
                            </div>
                            <!-- End of Movie Details -->

                            <!-- Start of Rating -->
                            <div class="stars">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span>7.6 / 10</span>
                            </div>
                            <!-- End of Rating -->

                        </div>
                        <!-- End of Movie Box -->
                    </div>
                    <!-- === End of Sliding Item 3 === -->


                    <!-- === Start of Sliding Item 4 === -->
                    <div class="item">
                        <!-- Start of Movie Box -->
                        <div class="movie-box-1">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="assets/images/posters/poster-8.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-detail.html">The Flash</a>
                                </h4>
                                <span class="released">7 Oct 2014</span>
                            </div>
                            <!-- End of Movie Details -->

                            <!-- Start of Rating -->
                            <div class="stars">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span>8 / 10</span>
                            </div>
                            <!-- End of Rating -->

                        </div>
                        <!-- End of Movie Box -->
                    </div>
                    <!-- === End of Sliding Item 4 === -->


                    <!-- === Start of Sliding Item 5 === -->
                    <div class="item">
                        <!-- Start of Movie Box -->
                        <div class="movie-box-1">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="assets/images/posters/poster-5.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-detail.html">Daredevil</a>
                                </h4>
                                <span class="released">19 Apr 2015</span>
                            </div>
                            <!-- End of Movie Details -->

                            <!-- Start of Rating -->
                            <div class="stars">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <span>8.7 / 10</span>
                            </div>
                            <!-- End of Rating -->

                        </div>
                        <!-- End of Movie Box -->
                    </div>
                    <!-- === End of Sliding Item 5 === -->


                    <!-- === Start of Sliding Item 6 === -->
                    <div class="item">
                        <!-- Start of Movie Box -->
                        <div class="movie-box-1">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="assets/images/posters/poster-6.jpg" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie-detail.html">Stranger Things</a>
                                </h4>
                                <span class="released">15 Jul 2016</span>
                            </div>
                            <!-- End of Movie Details -->

                            <!-- Start of Rating -->
                            <div class="stars">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <span>9 / 10</span>
                            </div>
                            <!-- End of Rating -->

                        </div>
                        <!-- End of Movie Box -->
                    </div>
                    <!-- === End of Sliding Item 6 === -->

                </div>
                <!-- End of Latest Movies Slider -->

            </div>
        </section>
        <!-- =============== END OF RECOMMENDED MOVIES SECTION =============== -->


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
