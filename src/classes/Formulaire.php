<?php
    namespace App;
    class Formulaire{
        protected $codeChamp;
        protected $codeBouton;
        protected $codeFormulaire;

        //Création des constantes
        const DEBUT_FORMULAIRE= '<form method="post" action ="">';
        const FIN_FORMULAIRE= '</form>';

        //Méthodes setChamp qui écrit un champ de formulaire - définit les 03 types accepté: text, number ou email
        public function setChamp($type, $name, $value=''){
            if(($type == 'text')||($type == 'number') ||($type == 'email')){

            $this->codeChamp .='<input type="'.$type.'" value="'.$value.'" name="'.$name.'" placeholder="'.ucfirst($name).'">';
            }
           }

          public function getFormulaire(){
            if(!empty($this->codeChamp) || !empty($this->codeBouton)){
                $this->codeFormulaire = self::DEBUT_FORMULAIRE;
                $this->codeFormulaire.=$this->codeChamp;
                $this->codeFormulaire.=$this->codeBouton;
                $this->codeFormulaire .= self::FIN_FORMULAIRE;      // .= garder en mémoire
                
                return $this->codeFormulaire;

            }

          }
       

        //Méthodes SetBouton qui retourne un bouton de formulaire
         public function SetBouton($name){
            $name2 = str_replace(' ','_', $name);
            $this->codeBouton= '<input type="submit" name="'.$name2.'"value="'.ucfirst($name).'">';              
        }

        //Méthodes qui retourne le bouton du formulaire
       

        

        

        



    }
