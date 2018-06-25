<?php
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }
    include_once ('../controllers/coursInfo.php');
    include_once ('../controllers/entrepriseInfo.php');

    if (isset($_GET['idCours'], $_GET['idEntreprise'], $_GET['debut'], $_GET['fin'])){
        $idCours =$_GET['idCours'];
        $idEntreprise = $_GET['idEntreprise'];
        $cours = getCourbyId($idCours);
        $entreprise = getEntreprisebyId($idEntreprise);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> ATC :: Admin | Valider </title>
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

<!-- Modal Contact -->
    <form action="../controllers/validerDemande.php" method="post" class="modal-dialog">
        <!--Content-->
        <div class="">
            <!--Header-->
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Validation</h4>
            </div>
            <!--Body-->
            <div class="">
                <div class="md-form">
                    <p>Formation : <b><?php echo strtoupper($cours['nomCours']) ;?></b></p>
                </div>

                <div class="md-form">
                    <p>Entreprise : <b><?php echo strtoupper($entreprise['nomEntreprise'])?></b></p>
                </div>

                <div class="md-form">
                    <p>Date-Debut : <b><?php echo $_GET['debut'];?></b></p>
                </div>

                <div class="md-form">
                    <p>Date-Fin : <b><?php echo $_GET['fin'];?></b></p>
                </div>
                <div class="md-form">
                    <input type="hidden" name="idAdmin">
                </div>
                <div class="md-form">
                    <input type="hidden" name="idCours" value="<?php echo $_GET['idCours'];?>">
                </div>
                <div class="md-form">
                    <input type="hidden" name="idEntreprise" value="<?php echo $idEntreprise;?>">
                </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="submit" class="btn btn-default">Valider</button>
            </div>
        </div>
        <!--/.Content-->
    </form>
<!--</div>-->

</body>
</html>