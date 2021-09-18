<?php
    namespace Models;
    require_once "Greet.php";

    use Models\Greet as Greet;

    class English extends Greet{
        public function greet(){
            $this->setMessage("Hi, How are you?");
            include_once("greeting.php");
        }

        public function goodBye(){
            $this->setMessage("I'll be back");
            include_once("greeting.php");
        }
    }
?>