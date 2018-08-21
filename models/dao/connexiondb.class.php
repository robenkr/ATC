<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 24/05/18
 * Time: 15:20
 */

class ConnexionDB
{
    static function getConnexion(){
        try {
            $host = 'mysql:host=localhost;dbname=atc_db';
            $user = 'root';
            $pwd = '';
            $bdd = new PDO($host, $user, $pwd,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }

        return $bdd;
    }

}