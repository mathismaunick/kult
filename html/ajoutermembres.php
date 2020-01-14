    <?php
    session_start();

    //$bdd = new PDO('mysql:host=localhost;dbname=kult', 'root', 'root');
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=kult', 'root', '');
    $db_handle=mysqli_connect("127.0.0.1","root", "", "kult");
    $db_found = mysqli_select_db($db_handle,"kult");

     $SQL1 = "SELECT * FROM groupe WHERE Id='".$_GET['idgroupe']."'";
     $result1 = mysqli_query($db_handle, $SQL1);
     $db_field1=mysqli_fetch_assoc($result1);

    if(isset($_POST['groupe'])) {
        
        if(isset($_POST['pseudo'])){
            
             $SQL3 = "SELECT * FROM utilisateur WHERE Pseudo='".$_POST['pseudo']."'";
            $result3 = mysqli_query($db_handle, $SQL3);
            $db_field3=mysqli_fetch_assoc($result3);
            $SQL2 = "INSERT INTO `groupe_membre`(`IdGroupe`, `IdUtilisateur`) VALUES (".$_GET['idgroupe']." , ".$db_field3['Id'].")";
            $result2 = mysqli_query($db_handle, $SQL2);
            
            
        }
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



    <!-- =============== START OF WRAPPER =============== -->
    <div class="wrapper">
        <main class="login-register-page" style="background-image: url(assets/images/posters/movie-collection.jpg)">
            <div class="container">

                <!-- =============== START OF LOGIN & REGISTER POPUP =============== -->
                <div class="small-dialog login-register">

                    <!-- ===== Start of Signin wrapper ===== -->
                    <div class="signin-wrapper">
                        <div class="small-dialog-headline">
                            <h4 class="text-center">Ajouter des membres au groupe : <?php echo $db_field1['Nom']; ?></h4>
                        </div>


                        <div class="small-dialog-content">
                            Membres du groupe : 
                            <br>
                            <?php
                              $SQL30 = "SELECT * FROM groupe_membre WHERE IdGroupe='".$_GET['idgroupe']."'";
                              $result30 = mysqli_query($db_handle, $SQL30);
                            while($db_field30=mysqli_fetch_assoc($result30)){
                                $SQL40 = "SELECT * FROM utilisateur WHERE Id='".$db_field30['IdUtilisateur']."'";
                                  $result40 = mysqli_query($db_handle, $SQL40);
                                  while($db_field40=mysqli_fetch_assoc($result40)){
                                      echo $db_field40['Pseudo'].'<br>';
                            }
                            }
                                
                             ?> 
                            <!-- Start of Login form -->
                            <form id="cariera_login" method="post">
                                <p class="status"></p>

                                <div class="form-group">
                                    <label for="Nom">Pseudo</label>
                                    <input type="text" class="form-control" id="nom" name="pseudo" placeholder="Entrez le pseudo de la personne à ajouter *" />
                                </div>


                               

                                <div class="form-group">
                                    <input type="submit" name="groupe" value="Ajouter le membre" class="btn  nomargin btn-success" />

                                </div>
                                </form>
                                <div>
                                    <a href="groupe.php"><button class="btn btn-dark">Terminer</button></a>

                                </div>
                            

                            <!-- message d'erreur -->

                              <?php
                             if(isset($erreur)) {
                                echo '<font color="red">'.$erreur."</font>";
                             }
                             ?>                           
                            <!-- End of Login form -->

                            
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
                            <form id="cariera_registration" action="#" method="POST">
                                <p class="status"></p>

                                <div class="form-group">
                                    <label for="movify_user_login">Pseudo</label>
                                    <input name="movify_user_login" id="movify_user_login" class="form-control" type="text"/>
                                </div>

                                <div class="form-group">
                                    <label for="movify_user_email">Email</label>
                                    <input name="movify_user_email" id="movify_user_email" class="form-control" type="email"/>
                                </div>

                                <div class="form-group">
                                    <label for="password">Mot de passe</label>
                                    <input name="movify_user_pass" id="movify_password" class="form-control" type="password"/>
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-main btn-effect nomargin" value="Register"/>
                                </div>
                            </form>
                            <!-- End of Registration form -->

                            <div class="bottom-links">
                                <span>
                                    Déjà un compte?
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

                <a href="index.php" class="text-white">Back to Home</a>

            </div>
        </main>
    </div>
    <!-- =============== END OF WRAPPER =============== -->



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
