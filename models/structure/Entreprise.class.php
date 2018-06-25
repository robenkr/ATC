<?php
    class Entreprise{
        private $idEntreprise;
        private $nomEntreprise;
        private $adresseEntreprise;
        private $mailEntreprise;
        private $telEntreprise;

        public function __construct($idEntreprise,$nomEntreprise,$adresseEntreprise,$mailEntreprise,$telEntreprise){
           $this->idEntreprise = $idEntreprise; 
           $this->nomEntreprise = $nomEntreprise;
           $this->adresseEntreprise = $adresseEntreprise;
           $this->mailEntreprise = $mailEntreprise;
           $this->telEntreprise = $telEntreprise; 
           
        }
        public function getIdEntreprise(){
            return $this->idEntreprise;
        }
        public function getNomEntreprise(){
            return $this->nomEntreprise;
        }
        public function getAdresseEntreprise(){
            return $this->adresseEntreprise;
        }
        public function getMailEntreprise(){
            return $this->mailEntreprise;
        }
        public function getTelEntreprise(){
            return $this->telEntreprise;
        }
    }
?>