<?php
    session_start();
    require_once('../models/dao/connexiondb.class.php');
    require_once('../models/dao/coursDAO.php');
    require_once('../models/structure/Cours.class.php');

    $idAdmin = $_SESSION['idAdmin'];

    if(isset($_POST['nom_cours'], $_POST['prix_cours'])){
        $nom_cours = $_POST['nom_cours'];
        $prix_cours = $_POST['prix_cours'];

        $cours = new Cours(0,$nom_cours,$prix_cours,$idAdmin);
        $coursdao = new CoursDAO();
        $res = $coursdao->ajouterCours($cours);

        if($res == True){
            header('Location: ../admin/index.php?success');
        }else{
            header('Location: ../admin/index.php?failed');
        }
    }else{
        echo 'Aucune donnee recus';
    }

?>