<?php
    require_once ('../models/structure/Formation.class.php');
    require_once ('../models/dao/connexiondb.class.php');
    require_once ('../models/dao/formationsDAO.php');

    $formationdao = new FormationsDAO();

    $res = $formationdao->afficherListeDemande();