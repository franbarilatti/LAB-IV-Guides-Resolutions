<?php
    
    namespace Models;

    class Cruiser extends Ship{
        private $capacity;

        public function getCapacity(){
            return $this->capacity;
        }

        public function setCapacity($capacity){
            $this->capacity = $capacity;
        }

        public function toString(){
            return "this is a Cruiser with Capacity: $this->capacity";
        }
    }


?>