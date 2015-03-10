<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Emission_lib {
        
        private $titre = "";
        private $duree = 0;
        private $categorie;
        private $type;
        private $animateur;
        private $chemin;
        private $emissions;
        
        function setTitre($t){
            if($t!="") $this->titre = $t;
        }
        
        function getTitre(){
            return $this->titre;
        }
        
        function setDuree($d){
            if(intval($d)>0) $this->duree = intval($d);
        }
        
        function getDuree(){
            if($this->isSimple()) return $this->duree;
            else{
                $duree = 0;
                for($i=0; $i<count($this->emissions); $i++){
                    $duree += $emissions[$i]->getDuree();
                }
                return $duree;
            }
        }
        
        function setChemin($ch){
            if($ch!="") $this->chemin = $ch;
        }
        
        function getChemin(){
            return $this->chemin;
        }
        
        function isValid(){
            if($this->isSimple()) return ($this->getTitre()!="" && $this->getDuree()>0);
            else return $this->getTitre()!="";
        }
        
        function isSimple(){
            return $this->getChemin()!="";
        }
        
    }