<?php
    class Formateur{
        private $idFormateur;
        private $matFormateur;
        private $nomFormateur;
        private $postnomFormateur;
        private $prenomFormateur;
        private $genreFormateur;
        private $domaineFormateur;
        private $adresseFormateur;
        private $mailFormateur;
        private $telFormateur;
        private $idAdmin;
    
        public function __construct($idFormateur,$matFormateur,$nomFormateur,$postnomFormateur,$prenomFormateur,$genreFormateur,$domaineFormateur,$adresseFormateur,$mailFormateur,$telFormateur,$idAdmin){
           $this->idFormateur = $idFormateur; 
           $this->matFormateur = $matFormateur;
           $this->nomFormateur = $nomFormateur;
           $this->postnomFormateur = $postnomFormateur;
           $this->prenomFormateur = $prenomFormateur;
           $this->genreFormateur = $genreFormateur;
           $this->domaineFormateur = $domaineFormateur;
           $this->adresseFormateur = $adresseFormateur;
           $this->mailFormateur = $mailFormateur;
           $this->telFormateur = $telFormateur;
           $this->idAdmin = $idAdmin;
           
        }
        public function getIdFormateur(){
            return $this->idFormateur;
        }
        public function getMatFormateur(){
            return $this->matFormateur;
        }
        public function getNomFormateur(){
            return $this->nomFormateur;
        }
            public function getPostNomFormateur(){
            return $this->postnomFormateur;
        }
        public function getPrenomFormateur(){
            return $this->prenomFormateur;
        }
        public function getGenreFormateur(){
            return $this->genreFormateur;
        }
        public function getMailFormateur(){
            return $this->mailFormateur;
        }
        public function getTelFormateur(){
            return $this->telFormateur;
        }
        public function getIdAdmin(){
            return $this->idAdmin;
        }
        public function getAdresseFormateur()
        {
            return $this->adresseFormateur;
        }
        public function getDomaineFormateur()
        {
            return $this->domaineFormateur;
        }

        /**
         * @param mixed $domaineFormateur
         */
        public function setDomaineFormateur($domaineFormateur)
        {
            $this->domaineFormateur = $domaineFormateur;
        }
    }
?>