<?php
    class AgentForme{
        private $id;
        private $idAgent;
        private $idFormation;
        private $idAdmin;
        private $idFormateur;
        private $cote;

        public function __construct($id,$idAgent,$idFormation,$idAdmin,$idFormateur,$cote){
           $this->id = $id; 
           $this->idAgent = $idAgent;
           $this->idFormation = $idFormation;
           $this->idAdmin = $idAdmin; 
           $this->idFormateur = $idFormateur; 
           $this->cote = $cote; 
           
        }
        public function getId(){
            return $this->id;
        }
        public function getIdAgent(){
            return $this->idAgent;
        }
        public function getIdFormation(){
            return $this->idFormation;
        }
        public function getIdAdmin(){
            return $this->idAdmin;
        }
        public function getIdFormateur(){
            return $this->idFormateur;
        }
        public function getCote(){
            return $this->cote;
        }
    }
?>