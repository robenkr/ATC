<?php
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }
    require_once("../models/dao/connexiondb.class.php");
    require_once("../models/structure/Formateur.class.php");
    require_once("../models/dao/formateurDAO.php");

    $idAdmin = $_SESSION['idAdmin'];

    if(isset($_POST['matricule'],$_POST['nom'],$_POST['pnom'],$_POST['prenom'],$_POST['genre'],$_POST['domaine'],$_POST['adresse'],$_POST['mail'],$_POST['tel'],$idAdmin)){

        $formateur = new Formateur(0,$_POST['matricule'],$_POST['nom'],$_POST['pnom'],$_POST['prenom'],$_POST['genre'],$_POST['domaine'],$_POST['adresse'],$_POST['mail'],$_POST['tel'],$idAdmin);
        continuer($formateur,$idAdmin);
    }else{

        header('Location: ../admin/index.php?failedF');
    }

    function continuer($formateur,$idAdmin){
        
        $formateurdao= new FormateurDAO();
        $result = $formateurdao->ajouterFormateur($formateur,$idAdmin);
        if ($result){
            header('Location: ../admin/index.php?successF');
        }

    }
?>