<?php
    namespace App;

    class Capitale{
        private $pays;
        private $capitale;


        public function __construct($pays, $capitale)
        {
            $this->setPays($pays);
            $this->setCapitale($capitale);
        }

        public function __toString()
        {
            $phrase = '<p>La ville de '.$this->getCapitale().' est la capitale du pays: '.$this->getPays().'</p>';
            return  $phrase;
        }

        /**
         * Setters 
         * 
        */

        private function setPays($pays){
            if(is_string($pays)){
             $this->pays = $pays;
        }
        }
        private function setCapitale($capitale){
            if(is_string($capitale)){
            $this->capitale = $capitale;
        }
    }

         /**
         * Getters 
         * 
        */

        public function getPays(){
            return $this->pays;

        }
        public function getCapitale(){
            return $this->capitale;
        }



    }
