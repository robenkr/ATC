<?php
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> ATC :: Admin</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Resort Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Material Design Bootstrap -->
    <link href="../css/compiled.min1c9b.css" rel="stylesheet">
    <!-- pop-up -->
    <link rel="stylesheet" href="../css/lightbox.css">
    <!-- //pop-up -->
    <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" property="" />

    <link rel="stylesheet" type="text/css" href="../css/zoomslider.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link href="../css/font-awesome.css" rel="stylesheet">
    <script type="text/javascript" src="../js/modernizr-2.6.2.min.js"></script>
    <!--/web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!--//web-fonts-->
</head>
<body>
<div class="w3layouts-top-strip">
    <div class="top-srip-agileinfo">

        <div class="agileits-contact-info text-right">
            <ul>
                <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +243 090 480 088</li>
                <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:atcformation@gmail.com">atcformation@gmail.com</a></li>
                <li><a href="index.php"><i class="fa fa-lock" aria-hidden="true"></i> Retour</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
   <?php
        if (isset($_GET['success'])) {
            echo '<em class="alert alert-success alert-dismissible">Votre operation a reussi avec succes</em>';
        }elseif (isset($_GET['failed'])) {
            echo '<em class="alert alert-danger alert-dismissible">Votre operation a echoue! Veuillez recommencer.</em>';
        }
        else{

        }
    ?>

   <div class="col-md-6 offset-md-3">
       <form action="../controllers/new_admin.php" method="post">
           <h3 class="text-center tittle">Ajouter Admin</h3>
           <hr>
           <div class="md-form">
               <div class="col-sm-9">
                   <input type="text" class="form-control" id="nom" name="nom"  placeholder="Nom Admin">
               </div>
           </div>
           <div class="md-form">
               <div class="col-sm-9">
                   <input type="text" class="form-control"  name="login" id="login" placeholder="Username">
               </div>
           </div>
           <div class="md-form">
               <div class="col-sm-9">
                   <input type="password" class="form-control"  name="pwd" id="pwd" placeholder="Password">
               </div>
           </div>

           <div class="md-form">
               <div class="col-sm-offset-2 col-sm-10">
                   <input type="submit" class="btn btn-success btn-outline-success" value="Valider">
               </div>
           </div>
       </form>
   </div>
</body>
</html>

