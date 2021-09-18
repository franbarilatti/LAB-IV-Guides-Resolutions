<?php
    
    namespace Models;

    class BattleShip extends Ship{
        private $armament;

        public function getArmament(){
            return $this->armament;
        }

        public function setArmament($armament){
            $this->armament = $armament;
        }
        
        public function toString(){
            return "this is a Battle Ship with Armament: $this->armament";
        }

    }


?>