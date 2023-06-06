<?php
    class Formulaire{
        private $type;
        private $name;

        //Création des constantes
        const DEBUT_FORMULAIRE= '<form method="post" action ="">';
        const FIN_FORMULAIRE= '</form>';

        //Méthodes setChamp qui écrit un champ de formulaire - définit les 03 types accepté: text, number ou email
        public function setChamp($type, $name){
            if(($type == 'text')||($type == 'number') ||($type == 'email')){

            $this->type = $type;
            $this->name = $name;
            }
           }

            //Méthodes SetBouton qui retourne un bouton de formulaire
         public function SetBouton($name){
            $this->name = $name;              
        }

        //Méthodes getChamp qui retourne un champ de formulaire
        public function getChamp(){
            if(!empty($this->type) && !empty($this->name)){
                $champ = '<input type="'.$this->type.'" name="'.$this->name.'" placeholder="'.ucfirst($this->name).'">';
                return $champ;
            }              
        }

        public function getBouton(){
            if(!empty($this->name)){
                $bouton='<input type="submit" name="'.$this->name.'"value="'.ucfirst($this->name).'">';
            return $bouton;

            }
                          
        }

        

        

        



    }
