<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 30/05/18
 * Time: 15:30
 */

class CoursDAO
{
    private $db;

    public function __construct()
    {
        $this->db = ConnexionDB::getConnexion();
    }

    public function getCoursById($cours)
    {
        $course = [];
        $str = "SELECT * FROM cours WHERE idCours = :idCours";
        $req = $this->db->prepare($str);
        $req->execute(array(
            'idCours'=>$cours->getIdCours()
        ));
        $res = $req->fetch();
        return $res;
    }
    public function ajouterCours($cours){
        $str = "INSERT INTO cours VALUES(null, :nom_cours, :prix_cours,:idAdmin)";
        $req = $this->db->prepare($str);
        $res = $req->execute(array(
            'nom_cours' => $cours->getNomCours(),
            'prix_cours' =>$cours->getPrixCours(),
            'idAdmin' =>$cours->getIdAdmin()
        ));
        if($res) {
            return True;
        } else {
            return False;
        }
    }
    public function afficherCours(){
        $cours=[];
        $str = "SELECT * FROM cours";
        $req = $this->db->prepare($str);
        $req->execute();

        while ($r = $req->fetchAll()){
            $cours = $r;
        }
        return $cours;
    }

}