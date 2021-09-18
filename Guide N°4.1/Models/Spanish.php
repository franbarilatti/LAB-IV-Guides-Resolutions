<?php
    namespace Models;

    require_once "Greet.php";

    use Models\Greet as Greet;

    class Spanish extends Greet{
        public function greet(){
            $this->setMessage("Hola Juan Carlos. Como estas Ch*p@ p*j@");
            include_once("greeting.php");
        }

        public function goodBye(){
            $this->setMessage("No' re vimo perri");
            include_once("greeting.php");
        }
    }
?>