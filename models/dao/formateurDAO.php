<?php

	class FormateurDAO{
        private $db;

        public function __construct()
        {
            $this->db = ConnexionDB::getConnexion();
        }
		
		public function afficherFormateur(){
            $formateur = [];
			$str = "SELECT * FROM formateur ORDER BY idFormateur ASC ";
			$req = $this->db->prepare($str);
			$req->execute();

            while($f = $req->fetch())
                $formateur[]= $f;
            return $formateur;
			
			
		}

		public function ajouterFormateur($formateur,$idAmin)
		{
	        $querry = "INSERT INTO formateur VALUES(null,:matFormateur,:nomFormateur,:postnomFormateur,:prenomFormateur,:genreFormateur,:domaineFormateur,:adresseFormateur,:mailFormateur,:telFormateur,:idAdmin)";
	        $req = $this->db->prepare($querry);
	        $res = $req->execute(array(
	            'matFormateur'=> $formateur->getMatFormateur(),
	            'nomFormateur'=> $formateur->getNomFormateur(),
	            'postnomFormateur'=> $formateur->getPostNomFormateur(),
	            'prenomFormateur'=> $formateur->getPrenomFormateur(),
	            'genreFormateur'=> $formateur->getGenreFormateur(),
	            'domaineFormateur'=> $formateur->getDomaineFormateur(),
	            'adresseFormateur'=> $formateur->getAdresseFormateur(),
	            'mailFormateur'=> $formateur->getMailFormateur(),
	            'telFormateur'=> $formateur->getTelFormateur(),
	            'idAdmin'=>  $idAmin
            ));
	        //l'objet admin er formateur

            if($res){
                return true;
            } else {
		            return false;
            }
    	}
	}
?>