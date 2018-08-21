<?php
    require_once ('../models/dao/connexiondb.class.php');
    require_once ('../models/structure/Cours.class.php');
    require_once ('../models/dao/coursDAO.php');

    if(!function_exists("getCourbyId")){
         function getCourbyId($idCours){
            $cours = new Cours($idCours,0,0,0);
            $coursdao = new coursDAO();

            $res = $coursdao->getCoursById($cours);

            return $res;
        }
    }
    ?>