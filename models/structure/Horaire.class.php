<?php
    class Horaire{
        private $id;
        private $idFormation;
        private $date;
        private $heureDebut;
        private $heureFin;
        private $idAdmin;
        

        public function __construct($id,$dateDebut,$dateFin,$idEntreprise,$idAdmin,$idCours,$etat){
           $this->id = $id; 
           $this->dateDebut = $dateDebut;
           $this->dateFin = $dateFin;
           $this->idEntreprise = $idEntreprise; 
           $this->idAdmin = $idAdmin;
           $this->idCours = $idCours;
           $this->etat = $etat;
        }
        public function getid(){
            return $this->id;
        }
        public function getDateDebut(){
            return $this->dateDebut;
        }
        public function getDateFin(){
            return $this->dateFin;
        }
        public function getIdEntreprise(){
            return $this->idEntreprise;
        }
        public function getIdAdmin(){
            return $this->idAdmin;
        }
        public function getIdCours(){
            return $this->idCours;
        }
        public function getEtat(){
            return $this->etat;
        }
    }
?>