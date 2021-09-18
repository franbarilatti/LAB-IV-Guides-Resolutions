<?php
    namespace models;

    class Bill{
        private $date;
        private $type;
        private $number;

        public function __construct($date,$type,$number){
            $this -> date = $date;
            $this -> type = $type;
            $this -> number = $number;
        }


        
        /////// GETTERS //////////

        /**
         * Get the value of date
         */ 
        public function getDate()
        {
                return $this->date;
        }

        /**
         * Get the value of type
         */ 
        public function getType()
        {
                return $this->type;
        }

        /**
         * Get the value of number
         */ 
        public function getNumber()
        {
                return $this->number;
        }


        /////// SETTERS //////////


        /**
         * Set the value of date
         *
         * @return  self
         */ 
        public function setDate($date)
        {
                $this->date = $date;

                return $this;
        }

        /**
         * Set the value of type
         *
         * @return  self
         */ 
        public function setType($type)
        {
                $this->type = $type;

                return $this;
        }

        /**
         * Set the value of number
         *
         * @return  self
         */ 
        public function setNumber($number)
        {
                $this->number = $number;

                return $this;
        }
    }

?>