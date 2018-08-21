<?php
    class Cours{
        private $idCours;
        private $nomCours;
        private $prixCours;
        private $idAdmin;

        public function __construct($idCours,$nomCours,$prixCours,$idAdmin){
           $this->idCours = $idCours; 
           $this->nomCours = $nomCours;
           $this->prixCours = $prixCours;
           $this->idAdmin = $idAdmin; 
        }
        public function getIdCours(){
            return $this->idCours;
        }
        public function getNomCours(){
            return $this->nomCours;
        }
        public function getPrixCours(){
            return $this->prixCours;
        }
        public function getIdAdmin(){
            return $this->idAdmin;
        }
    }
?>