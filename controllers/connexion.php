<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 16/06/18
 * Time: 19:48
 */

    require_once('../models/structure/Admin.class.php');
    require_once('../models/dao/connexiondb.class.php');
    require_once('../models/dao/adminDAO.php');

    if(isset($_POST['login'], $_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $admin = new Admin(0,0, $login, $password);
        $admindao = new AdminDAO();

        $res = $admindao->seConnecter($admin);
        if($res) {
            //Créer une session
            session_start();
            $_SESSION['user'] = $login;
            $_SESSION['idAdmin'] = $res['idAdmin'];
            header('Location: ../admin/index.php');
        } else {
            header('Location: ../index.php?error=0');
        }

    } else {
        echo 'Erreur dans les données envoyées!';
    }
?>