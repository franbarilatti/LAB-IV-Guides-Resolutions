<?php
    
    namespace Models;

    class Airplane extends Aerial{
        private $capacity;

        public function getCapacity(){
            return $this->capacity;
        }

        public function setCapacity($capacity){
            $this->capacity = $capacity;
        }

        public function toString(){
            return "this is a Airplane with Capacity: $this->capacity";
        }
    }


?>