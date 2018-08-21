<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 30/05/18
 * Time: 16:07
 */

class EntrepriseDAO
{
    private $db;

    public function __construct()
    {
        $this->db = ConnexionDB::getConnexion();
    }

    public function getEntrepriseById($entreprise)
    {
        $course = [];
        $str = "SELECT * FROM entreprise WHERE idEntreprise = :id";
        $req = $this->db->prepare($str);
        $req->execute(array(
            'id'=>$entreprise->getIdEntreprise()
        ));
        $res = $req->fetch();
        return $res;
    }
    public function subscribe($ent)
    {
        $requete= 'INSERT INTO entreprise VALUES(null,:name, :adresse, :email, :phone)';
        $prepare =$this->db->prepare($requete);
        $resultat= $prepare->execute(array(
            'name'=>$ent->getNomEntreprise(),
            'adresse'=>$ent->getAdresseEntreprise(),
            'email'=>$ent->getMailEntreprise(),
            'phone'=>$ent->getTelEntreprise()));
        $id = $this->db->lastInsertId();

        if ($resultat){
            return $id;
        }
        else{
            return false;
        }
    }
}