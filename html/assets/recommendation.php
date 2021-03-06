<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=kult', 'root', '');

$id = $_GET['id'];
$request = $bdd->prepare('SELECT * FROM GROUPE WHERE Id='.$id);
$request->execute();
$request2 = $bdd->prepare('SELECT * FROM UTILISATEUR AS a JOIN GROUPE_MEMBRE AS b ON a.Id=b.IdUtilisateur where b.IdGroupe='.$id);
$request2->execute();

$table_pseudo = array();

while ($data = $request2->fetch() )
{
    $table_pseudo[] = $data['Pseudo'];
}
$number = $request2->rowCount();

while ($data = $request->fetch() )
{
    $nomGroupe = $data['Nom'];
    $descriptionGroupe = $data['Description'];
    $dateGroupe = $data['Date_Creation'];
}
if($dateGroupe!=NULL){
    $fdate = explode(" ", $dateGroupe);
    $fdate2 = explode("-", $fdate[0]);
    $year= $fdate2[0];
    $month= $fdate2[1];
    $day=$fdate2[2];
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
    <title>Movify - Movies, Series & Cinema HTML Template</title>

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
                        <h4><strong>KULT</strong></h4>
                        <!-- INSERT YOUR WHITE LOGO HERE -->
                    </a>

                    <!-- Login Button on Responsive -->
                    <?php
                    if (isset($_SESSION['Id'])):
                        ?>
                        <a href="logout.php" class="login-mobile-btn"><i class="icon-user"></i>
                        </a>
                        <?php
                    else:
                        ?>
                        <a href="login.php" class="login-mobile-btn"><i class="icon-user"></i>
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
                            <a class="nav-link" href="groupe.php">Groupes</a>
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
<section class="celeb-detail-intro overlay-gradient ptb100" style="background: url(assets/images/other/actor-img.jpg);">
</section>
<!-- =============== END OF MOVIE DETAIL INTRO =============== -->



<!-- =============== START OF CELEBRITY DETAIL =============== -->
<section class="celeb-detail pb100">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-12">
                <div class="celeb-img">
                    <img src="assets/images/celebrities/celebrity2a.jpg" alt="">
                </div>
            </div>


            <div class="col-md-8 col-12">
                <div class="celeb-details">
                    <h3 class="title"><?php echo $nomGroupe ?></h3>


                    <!-- tab links -->
                    <ul class="nav tab-links">
                        <li class="nav-item">
                            <a class="nav-link active" id="bio-tab" data-toggle="tab" href="#bio" aria-controls="bio" aria-expanded="false">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="film-tab" data-toggle="tab" href="#filmography" aria-controls="filmography" aria-expanded="false">Membres du groupe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="film-tab" href="recommendation.php" aria-expanded="false">Trouver un film</a>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content mt70">

                        <div class="tab-pane fade active show" id="bio" role="tabpanel" aria-labelledby="bio-tab" aria-expanded="false">
                            <div class="bio-description">
                                <p><?php echo $descriptionGroupe ?></p>
                            </div>

                            <div class="bio-details">
                                <ul class="bio-wrapper">
                                    <li><h6>Date de création du groupe:</h6> <?php if($dateGroupe!=NULL){
                                        echo 'Le ',$day,'/',$month,'/',$year,' ' ; 
                                    } ?></li>
                                </ul>
                            </div>

                            <div class="clearfix"></div>
                        </div>

                        <div class="tab-pane fade" id="filmography" role="tabpanel" aria-labelledby="film-tab" aria-expanded="false">
                            <ul class="film-list">
                                <?php for ($i=0; $i<$number; $i++)
                                {
                                    echo '
                                    <html>
                                    <head>
                                    </head>
                                    <body>
                                    <li><a href="#">'.$table_pseudo[$i].'</a></li>
                                    </body>
                                    </html>';
                                }
                                ?>  

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =============== End OF CELEBRITY DETAIL =============== -->


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
