<?php
//    if (session_status() == PHP_SESSION_NONE){
//        session_start();
//    }

    $coursdao = new CoursDAO();
    $res = $coursdao->afficherCours();
?>