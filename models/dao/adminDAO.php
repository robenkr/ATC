<?php
/**
 * Created by PhpStorm.
 * User: ROBEN
 * Date: 30/05/18
 * Time: 16:41
 */

class AdminDAO
{
    private $db;

    public function __construct()
    {
        $this->db = ConnexionDB::getConnexion();
    }

    public function seConnecter($admin)
    {
        $q = $this->db->prepare("SELECT * FROM admin WHERE login = :login AND pwd = :pwd");
        $q->execute(array(
            'login'=>$admin->getLogin(),
            'pwd'=>sha1($admin->getPwd())
        ));
        $res = $q->fetch();
        if ($res != null){
            return $res;
        }
        else
            return false;


    }

    public function creerCompte($admin){
        $str = "INSERT INTO admin VALUES(null,?,?,?)";
        $req = $this->db->prepare($str);
        $res = $req->execute([$admin->getNom(),
            $admin->getLogin(),
            $admin->getPwd()
        ]);

        if($res) {
            return True;
        } else {
            return False;
        }
    }

    public function addCote($Formation,$Agent,$Admin,$Cote)
    {
        
    }
    
}