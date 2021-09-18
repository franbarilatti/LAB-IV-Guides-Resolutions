<?php
    namespace Models;

    require_once "Greet.php";

    use Models\Greet as Greet;

    class Portugues extends Greet{
        public function greet(){
            $this->setMessage("Oi, Tudo bem?");
            include_once("greeting.php");
        }

        public function goodBye(){
            $this->setMessage("Tchau, ate a proxima");
            include_once("greeting.php");
        }
    }
?>