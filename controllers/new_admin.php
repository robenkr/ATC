<?php

    require_once('../models/structure/Admin.class.php');
    require_once('../models/dao/adminDAO.php');
    require_once('../models/dao/connexiondb.class.php');

    if (isset($_POST['nom'],$_POST['login'],$_POST['pwd'])) {
        $nom = $_POST['nom'];
        $login = $_POST['login'];
        $pwd = sha1($_POST['pwd']);

        $admin = new Admin(0,$nom,$login,$pwd);
        $adminDAO = new AdminDAO();

        if($adminDAO->creerCompte($admin)){
            //Créer une session
//                session_start();
//                $_SESSION['user'] = $login;

            header('Location: ../admin/newAdmin.php?success');
        }else{
            header('Location: ../admin/newAdmin.php?failed');
        }

    }else {
        echo "Erreur dans les données";
    }