<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=kult', 'root', '');

if(isset($_SESSION['Id'])) {
   $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE Id = ?");
   $requser->execute(array($_SESSION['Id']));
   $user = $requser->fetch();
   if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['Pseudo']) {
      $newpseudo = htmlspecialchars($_POST['newpseudo']);   
      $insertpseudo = $bdd->prepare("UPDATE utilisateur SET Pseudo = ? WHERE Id = ?");
      $insertpseudo->execute(array($newpseudo, $_SESSION['Id']));
      var_dump($user['Pseudo']);
       $_SESSION['Pseudo'] =$user['Pseudo'];
      header('Location: profil.php?id='.$_SESSION['Id']);

   }
   if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['Mail']) {
      $newmail = htmlspecialchars($_POST['newmail']);
      $insertmail = $bdd->prepare("UPDATE utilisateur SET Mail = ? WHERE Id = ?");
      $insertmail->execute(array($newmail, $_SESSION['Id']));
      //header('Location: profil.php?id='.$_SESSION['Id']);
   }
   if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
      $mdp1 = sha1($_POST['newmdp1']);
      $mdp2 = sha1($_POST['newmdp2']);
      if($mdp1 == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE utilisateur SET MDP= ? WHERE Id = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['Id']));
         //header('Location: profil.php?id='.$_SESSION['Id']);
      } else {
         $msg = "Vos mots de passe sont différents";
      }
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



    <!-- =============== START OF WRAPPER =============== -->
    <div class="wrapper">
        <main class="login-register-page" style="background-image: url(assets/images/posters/movie-collection.jpg)">
            <div class="container">

                <!-- =============== START OF LOGIN & REGISTER POPUP =============== -->
                <div class="small-dialog login-register">

                    <!-- ===== Start of Signin wrapper ===== -->
                    <div class="signin-wrapper">
                        <div class="small-dialog-headline">
                            <h4 class="text-center">edition du profil</h4>
                        </div>


                        <div class="small-dialog-content">

                            <!-- Start of Login form -->
                            <form id="cariera_login" action="" method="POST" enctype="multipart/form-data">
                                <p class="status"></p>


                                <div class="form-group">
                                    <label for="mailconnect">Nouveau pseudo</label>
                                    <input type="text" class="form-control" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['Pseudo']; ?>" />
                                </div>

                                <div class="form-group">
                                    <label for="mailconnect">Nouvel email</label>
                                    <input type="text" class="form-control" name="newmail" placeholder="Mail" value="<?php echo $user['Mail']; ?>" />
                                </div>

                                <div class="form-group">
                                    <label for="mdpconnect">Nouveau mot de passe</label>
                                    <!--
                                    <input type="password" class="form-control" id="mdpconnect" name="mdpconnect" placeholder="Entrez votre mot de passe *" />
                                    -->
                                    <input type="password" class="form-control" name="newmdp1" placeholder="Mot de passe"/>

                                </div>

                                <div class="form-group">
                                    <label for="mdpconnect">Confirmation mot de passe</label>
                                    <input type="password" class="form-control" name="newmdp2" placeholder="Confirmation du mot de passe" />
                                </div>

                                <div class="form-group">
                                    <div class="checkbox pad-bottom-10">
                                        <input id="check1" type="checkbox" name="remember" value="yes">
                                        <label for="check1">Me garder connecté</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="formconnexion" value="Enregistrer" class="btn btn-main btn-effect nomargin" />

                                </div>
                            </form>

                            <!-- message d'erreur -->

                              
                            <?php if(isset($msg)) { echo $msg; } ?>
                                                        
                            <!-- End of Login form -->

                            <div class="bottom-links">
                                <a  class="forgetPasswordClick pull-right">Mot de passe oublié</a>
                            </div>
                        </div>

                    </div>
                    <!-- ===== End of Signin wrapper ===== -->


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