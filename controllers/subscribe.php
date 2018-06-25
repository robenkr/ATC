<?php
//    session_start();
    require_once("../models/dao/formationsDAO.php");
    require_once("../models/dao/connexiondb.class.php");
    require_once("../models/dao/entrepriseDAO.php");
    require_once("../models/structure/Entreprise.class.php");
    require_once("../models/structure/Formation.class.php");

    if(isset($_POST['name'],$_POST['adresse'],$_POST['email'],$_POST['phone'],$_POST['datedebut'],
        $_POST['datefin'], $_POST['idCours'])){

            $idCours = $_POST['idCours'];
            $ent = new Entreprise(0,$_POST['name'],$_POST['adresse'],$_POST['email'],$_POST['phone']);
            $ent_dao = new EntrepriseDAO();
            $var_ent = $ent_dao->subscribe($ent);

            $idEntreprise = $var_ent;

            $form = new Formation(0,$_POST['datedebut'],$_POST['datefin'],$idEntreprise,0,$idCours,0);

            $form_dao = new FormationsDAO();
            $var_form = $form_dao->subscribe($form);
        header('Location: ../index.php');
            
    }else{
        echo "Erreur dans les données";
    }

?>