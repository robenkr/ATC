<?php
    session_start();
    require_once ('../models/dao/connexiondb.class.php');
    require_once ('../models/structure/Formation.class.php');
    require_once ('../models/dao/formationsDAO.php');

        $idAdmin = $_SESSION['idAdmin'];

        if (isset($_POST['idCours'], $_POST['idEntreprise'])){
            $idCours = $_POST['idCours'];
            $idEntreprise = $_POST['idEntreprise'];

            $formation = new Formation(0,0,0,$idEntreprise,$idAdmin,$idCours,0);
            $formationdao = new FormationsDAO();

            $res = $formationdao->valider($formation);
            if($res){
                header('Location: ../admin/index.php');
            }
            else{
                print_r("Erreur!");
            }
        }
        else{
            header('Location: ../admin/index.php');
        }

    ?>