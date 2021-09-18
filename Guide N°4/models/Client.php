<?php
    namespace models;
    require_once "Config/Autoload.php";
    
    class Client extends Person{
        private $userName;
        private $password;

        public function __construct($userName,$password){
            $this -> userNmae = $userName;
            $this -> password = $password;
        }

         /////// GETTERS //////////


        /**
         * Get the value of userName
         */ 
        public function getUserName()
        {
                return $this->userName;
        }

          /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /////// SETTERS //////////

        /**
         * Set the value of userName
         *
         * @return  self
         */ 
        public function setUserName($userName)
        {
                $this->userName = $userName;

                return $this;
        }

      

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }
    }


?>