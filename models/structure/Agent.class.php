<?php
    class Agent{
        private $idAgent;
        private $matAgent;
        private $nomAgent;
        private $genre;
        private $idEntreprise;
        private $idAdmin;

        public function __construct($idAdmin,$nom,$login,$pwd){
           $this->idAdmin = $idAdmin; 
           $this->nom = $nom;
           $this->login = $login;
           $this->pwd = $pwd; 
        }
        public function getIdAgent(){
            return $this->idAgent;
        }
        public function getMatAgent(){
            return $this->matAgent;
        }
        public function getNomAgent(){
            return $this->nomAgent;
        }
        public function getGenre(){
            return $this->genre;
        }
        public function getidEntreprise(){
            return $this->idEntreprise;
        }
        public function getIdAdmin(){
            return $this->idAdmin;
        }
    }
?>