<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Programme_lib {
        
        private $date;
        private $emissions = array();
        
        function setDate($da){
            if($da != "") $date = $da;
        }
        
        function getDate(){
            return $this->date;
        }
        
        function addEmission(Emission $emission){
            if($emission->isValid()) array_push($this->emissions, $emission);
        }
        
        function deleteEmission($rang){
            if(count($this->emissions)>0 && $rang>0 && $rang<=count($this->emissions)){
                unset($this->emissions[$rang-1]);
                $this->emissions = array_values($this->emissions);
            }
        }
        
        function insertEmission($rang, Emission $emission){
            if($rang>0 && $rang<=count($this->emissions)){
                $rang -= 1;
                if (is_int($rang)) {
                    array_splice($this->emissions, $rang, 0, $emission);
                } else {
                    $pos   = array_search($rang, array_keys($this->emissions));
                    $this->emissions = array_merge(
                        array_slice($this->emissions, 0, $pos),
                        $emission,
                        array_slice($this->emissions, $pos)
                    );
                }
            }
        }
        
        function isValid(){
            return $this->get_date()!="" && count($this->emissions>0);
        }
        
    }