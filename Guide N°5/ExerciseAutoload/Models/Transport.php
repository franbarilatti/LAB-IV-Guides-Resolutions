<?php
    namespace Models;

    abstract class Transport{
        private $name;

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }

    }


?>