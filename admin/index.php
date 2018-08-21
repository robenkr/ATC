<?php
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }
     if (!isset($_SESSION['user'])){
         header('Location: ../index.php') ;
     }

    include_once ('../controllers/coursInfo.php');
    include_once ('../controllers/entrepriseInfo.php');

    include_once('../controllers/formationsEncours.php');
    include_once('../controllers/listDemandes.php');
    include_once('../controllers/listFormateurs.php');
?>
<!DOCTYPE html>
<html>
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
<!--/main-header-->
<div class="w3layouts-top-strip">
    <div class="top-srip-agileinfo">

        <div class="agileits-contact-info text-right">
            <ul>
                <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +243 090 480 088</li>
                <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:atcformation@gmail.com">atcformation@gmail.com</a></li>
                <li><i class="fa fa-user" aria-hidden="true"></i> <?php echo strtoupper($_SESSION['user']);?></li>
                <li><a href="deconnexion.php"><i class="fa fa-lock" aria-hidden="true"></i> Deconnexion</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--/banner-section-->
<div id="demo-1" class="banner-inner">
    <!--/header-w3l-->
    <div class="header-w3-agileits" id="home">
        <div class="inner-header-agile">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a  href="index.php"><span>A</span>TC <p class="s-log">Formation</p></a>

                    </h1>
                </div>
                <!-- navbar-header -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                    </ul>

                </div>
                <div class="clearfix"> </div>
            </nav>
            <div class="w3ls_search">
                <div class="cd-main-header">
                    <ul class="cd-header-buttons">
                        <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                    </ul> <!-- cd-header-buttons -->
                </div>
                <div id="cd-search" class="cd-search">
                    <form action="#" method="post">
                        <input name="Search" type="search" placeholder="Search...">
                    </form>
                </div>
            </div>

        </div>


        <!--//header-w3l-->
    </div>
</div>
<!--/banner-section-->
<!--//main-header-->
<!-- breadcrumb -->
<div class="w3_breadcrumb">
    <div class="breadcrumb-inner">
        <ul>
            <!--<li><a href="index.php">Admin</a></li>-->
        </ul>
    </div>
</div>
<!-- //breadcrumb -->
<!--/content-inner-section-->
<div class="col-md-12 w3l_about_bottom_right">
    <!--<h3 class="tittle why text-center">Admin</h3>-->
    <div class="col-md-6">
        <form action="../controllers/NewFormateur.php" method="post">
            <?php
            if (isset($_GET['successF'])) {
                echo '<em class="alert alert-success alert-dismissible">Ajout reussi avec succes</em>';
            }elseif (isset($_GET['failedF'])) {
                echo '<em class="alert alert-danger alert-dismissible">Erreur dans les donnees.</em>';
            }
            else{
            }
            ?>
            <h3 class="text-center tittle">Ajouter un Formateur</h3>
            <hr>
            <div class="md-form">
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                </div>

            </div>
            <div class="md-form">
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="pnom" name="pnom" placeholder="Post-nom">
                </div>
            </div>
            <div class="md-form">
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="prenom"  name="prenom" placeholder="Prenom">
                </div>
            </div>
            <div class="md-form">
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="matricule"  name="matricule" placeholder="Matricule">
                </div>
            </div>
            <div class="md-form">
                <div class="col-sm-9">
                    <select name="genre" id="genre" class="form-control" required>
                        <option value="" selected disabled>Genre</option>
                        <option value="m">Masculin</option>
                        <option value="f">F&eacute;minin</option>
                    </select>
                </div>
            </div>
            <div class="md-form">
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="domaine" name="domaine" placeholder="Domaine">
                </div>
            </div>
            <div class="md-form">
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="mail" name="mail" required placeholder="Email">
                </div>
            </div>
            <div class="md-form">
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="adress" name="adresse" required placeholder="Adresse">
                </div>
            </div>
            <div class="md-form">
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="tphone" name="tel" required placeholder="Numero de Telephone">
                </div>
            </div>
            <div class="md-form">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success btn-outline-success">Enregistrer</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <form action="../controllers/add_cours.php" method="post" role="form">
            <?php
            if (isset($_GET['success'])) {
                echo '<em class="alert alert-success alert-dismissible">Ajout reussi avec succes</em>';
            }elseif (isset($_GET['failed'])) {
                echo '<em class="alert alert-danger alert-dismissible">Erreur dans les donnees.</em>';
            }
            else{
            }
            ?>
            <h3 class="text-center tittle">Ajouter Cours</h3>
            <hr>
            <div class="md-form">
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nomCours" placeholder="Nom Cours" name="nom_cours">
                </div>
            </div>
            <div class="md-form">
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="prix" placeholder="Prix" name="prix_cours">
                </div>
            </div>
            <div class="md-form">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success btn-outline-success">Enregistrer</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <h2 class="tittle text-center">Liste des demandes</h2>
        <hr>
        <table class="table table-striped table-hover">
            <thead class="thead-inverse">
            <tr>
                <th class="text-center">Cours</th>
                <th class="text-center">Societe</th>
<!--                <th class="text-center">Nb Agents</th>-->
                <th class="text-center">Date Debut</th>
                <th class="text-center">Date Fin</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($res as $demande){
                $cours = getCourbyId($demande['idCours']);
                $entreprise = getEntreprisebyId($demande['idEntreprise']);
                ?>
            <tr>
                <td><?php echo ucfirst($cours['nomCours']) ?></td>
                <td><?php echo ucfirst($entreprise['nomEntreprise'])?></td>
<!--                <td>10</td>-->
                <td><?php echo $demande['dateDebut']?></td>
                <td><?php echo $demande['dateFin']?></td>
                <td>
                    <a class="teal-text" href="valider.php?idCours=<?php echo $demande['idCours']?>&idEntreprise=<?php echo $demande['idEntreprise']?>&debut=<?php echo $demande['dateDebut']?>&fin=<?php echo $demande['dateFin']?>"><i class="fa fa-check"></i> Validation</a>
                    <a class="red-text" href="../controllers/refuserDemande.php?idAdmin=<?php echo $_SESSION['idAdmin'];?>&idCours=<?php echo $demande['idCours'];?>&idEntreprise=<?php echo $demande['idEntreprise']?>"><i class="fa fa-times"></i> Refuser</a>
                </td>
                </td>
            </tr>
            <?php }?>
            </tbody>
        </table>
    </div>

    <div class="clearfix"></div>

    <div class="col-md-5">
        <h2 class="tittle text-center">Liste des Formations en cours</h2>
        <hr>
        <table class="table table-striped table-hover">
            <thead class="thead-inverse">
            <tr>
                <th>Cours</th>
<!--                <th>Formateur</th>-->
                <th>Societe</th>
<!--                <th>Nb Agents</th>-->
                <th>Debut</th>
                <th>Fin</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($myFormations as $form){
                $cours = getCourbyId($form['idCours']);
                $entreprise = getEntreprisebyId($form['idEntreprise']);?>
            <tr>
                <td><?php echo ucfirst($cours['nomCours']) ?></td>
<!--                <th>Helene</th>-->
                <td><?php echo ucfirst($entreprise['nomEntreprise'])?></td>
<!--                <td>--><?php //echo $form['etat']?><!--</td>-->
                <th><?php echo $form['dateDebut']?></th>
                <th><?php echo $form['dateFin']?></th>
            </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
    <div class="col-md-7">
        <h2 class="tittle text-center">Liste des Formateurs</h2>
        <hr>
        <table class="table table-striped table-hover">
            <thead class="thead-inverse">
            <tr>
                <th>Matricule</th>
                <th>Nom</th>
                <th>Genre</th>
                <th>Domaine</th>
                <th>Adresse</th>
                <th>Numero</th>
                <th>Email</th>
                <!--<th>-&#45;&#45;&#45;&#45;</th>-->
            </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $formator){?>
                <tr>
                    <td><?php echo $formator['matFormateur']?></td>
                    <th><?php echo strtoupper($formator['nomFormateur'])." ".ucfirst($formator['postnomFormateur'])." ".ucfirst($formator['prenomFormateur'])?></th>
                    <td><?php echo ucfirst($formator['genreFormateur']) ?></td>
                    <td><?php echo strtoupper($formator['domaineFormateur']) ?></td>
                    <th><?php echo ucfirst($formator['adresseFormateur'])?></th>
                    <th><?php echo $formator['telFormateur']?></th>
                    <th><?php echo $formator['mailFormateur']?></th>
                </tr>
            <?php }?>
            </tbody>
        </table>
    </div>


</div>
<!--//content-inner-section-->

<!-- Footer -->
<div class="w3agile_footer_copy">
    <p>© 2017 Resort. All rights reserved | Design by <a href="#/">Roben</a></p>
</div>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<!-- Dropdown-Menu-JavaScript -->
<script>
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //Dropdown-Menu-JavaScript -->


<script type="text/javascript" src="../js/jquery.zoomslider.min.js"></script>
<!-- search-jQuery -->
<script src="../js/main.js"></script>

<!--/script-->
<script src="../js/lightbox-plus-jquery.min.js"> </script>
<!--/script-->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
              containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
         };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- Calendar -->
<link rel="stylesheet" href="../css/jquery-ui.css" />
<script src="../js/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
    });
    
    //for modal
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    });
</script>
<!-- //Calendar -->
<!--end-smooth-scrolling-->
<!-- JQuery -->
<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>

<!-- Tooltips -->
<script type="text/javascript" src="../js/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
<!---->
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../js/compiled.min324d.js"></script>
<!--js for bootstrap working-->
<script src="../js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>