<?php
    namespace Models;
    
    abstract class Greet{
        private $message;

        public function __construct(){

        }

        

        /**
         * Get the value of message
         */ 
        public function getMessage()
        {
                return $this->message;
        }

        /**
         * Set the value of message
         *
         * @return  self
         */ 
        public function setMessage($message)
        {
                $this->message = $message;

                return $this;
        }

        public function other($message){
            $this->setMessage($message);
            include_once("greeting.php");
        }

        public abstract function greet();
        public abstract function goodBye();
    }
    
?>