<?php
    class Admin{
        private $idAdmin;
        private $nom;
        private $login;
        private $pwd;

        public function __construct($idAdmin,$nom,$login,$pwd){
           $this->idAdmin = $idAdmin; 
           $this->nom = $nom;
           $this->login = $login;
           $this->pwd = $pwd; 
        }
        public function getIdAdmin(){
            return $this->idAdmin;
        }
        public function getNom(){
            return $this->nom;
        }
        public function getLogin(){
            return $this->login;
        }
        public function getPwd(){
            return $this->pwd;
        }
    }
?>