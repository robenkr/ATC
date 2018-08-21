<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 24/05/18
 * Time: 15:18
 */

class FormationsDAO
{
    private $db;

    public function __construct()
    {
        $this->db = ConnexionDB::getConnexion();
    }

    public function afficherListeDemande() {
        $form = [];
        $str = "SELECT * FROM formation WHERE formation.etat IS NULL  ORDER BY id DESC ";
        $req = $this->db->prepare($str);
        $req->execute();
        while($v = $req->fetch())
            $form[]= $v;
        return $form;
    }
    public function valider($formation)
    {
        $str = "UPDATE formation SET etat = 1, idAdmin = :idAdmin WHERE idCours = :idCours AND idEntreprise=:id";
        $req = $this->db->prepare($str);
        $res = $req->execute(array(
            'idAdmin'=> $formation->getIdAdmin(),
            'id'=> $formation->getIdEntreprise(),
            'idCours'=>$formation->getIdCours()
        ));
        return true;
    }
    public function refuser($formation)
    {
        $str = "UPDATE formation SET etat = 0, idAdmin = :idAdmin WHERE idCours = :idCours AND idEntreprise=:id";
        $req = $this->db->prepare($str);
        $res = $req->execute(array(
            'idAdmin'=> $formation->getIdAdmin(),
            'id'=> $formation->getIdEntreprise(),
            'idCours'=>$formation->getIdCours()
            ));
    }
    public function formationEnCours() {
        $form = [];
        $today = date('Y-m-d');
        $str = "SELECT * FROM formation WHERE formation.etat = 1 AND dateFin <= dateFin AND dateDebut >= dateDebut ORDER BY id DESC ";
        $req = $this->db->prepare($str);
        $req->execute();
        while($v = $req->fetch())
            $form[]= $v;
        return $form;
    }
    public function subscribe($form)
    {
        $requete= 'INSERT INTO formation VALUES(null,:dateDebut, :dateFin, :idEntreprise, null, :idCours,null)';
        $prepare = $this->db->prepare($requete);
        $resultat= $prepare->execute(
            array(
                'dateDebut'=>$form->getDateDebut(),
                'dateFin'=>$form->getDateFin(),
                'idEntreprise'=> $form->getIdEntreprise(),
                'idCours'=> $form->getIdCours()
            )
        );

        if($resultat){
            return true;
        }
        else{
            return false;
        }

    }
}