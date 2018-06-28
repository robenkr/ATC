<?php
    session_start();
    require_once ('../models/dao/connexiondb.class.php');
    require_once ('../models/structure/Formation.class.php');
    require_once ('../models/dao/formationsDAO.php');

    $idAdmin = $_SESSION['idAdmin'];
    if (isset($_GET['idCours'],$_GET['idEntreprise'])){
        $idCours = $_GET['idCours'];
        $idEntreprise = $_GET['idEntreprise'];
        $formation = new Formation(0,0,0,$idEntreprise,$idAdmin,$idCours,0);
        $formationdao = new FormationsDAO();

        $res = $formationdao->refuser($formation);

        header('Location: ../admin/index.php');
    }
    else{
        header('Location: ../admin/index.php');
    }
?>