<?php
    require_once ('../models/dao/connexiondb.class.php');
    require_once ('../models/structure/Formateur.class.php');
    require_once ('../models/dao/formateurDAO.php');

    $formateurdao = new FormateurDAO();

    $result = $formateurdao->afficherFormateur();