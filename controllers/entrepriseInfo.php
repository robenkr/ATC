<?php
    require_once ('../models/dao/connexiondb.class.php');
    require_once ('../models/structure/Entreprise.class.php');
    require_once ('../models/dao/entrepriseDAO.php');

    if(!function_exists("getEntreprisebyId")){
        function getEntreprisebyId($idEntreprise){
            $entreprise = new Entreprise($idEntreprise,0,0,0,0);
            $entreprisedao = new EntrepriseDAO();

            $res = $entreprisedao->getEntrepriseById($entreprise);

            return $res;
        }
    }
?>