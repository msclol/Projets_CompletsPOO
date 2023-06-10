<?php
    namespace App;
    class CheckboxRadio extends Formulaire{
        private $codeCheckboxRadio;

        public function setCheckboxRadio($question, $type, $name, $value){
            if(($type == 'checkbox')||($type == 'radio')){

            $this->codeCheckboxRadio .= $question.'<div><input type="'.$type.'" name="'.$name.'" value="'.$value.'">'.ucfirst($value).'<div>';         

            }
        }

        public function getFormulaire(){
            if(!empty($this->codeChamp) || !empty($this->codeBouton) || !empty($this->codeCheckboxRadio)){
                $this->codeFormulaire = parent::DEBUT_FORMULAIRE;
                $this->codeFormulaire.=$this->codeChamp;
                $this->codeFormulaire.=$this->codeCheckboxRadio;
                $this->codeFormulaire.=$this->codeBouton;
                $this->codeFormulaire .= parent::FIN_FORMULAIRE;      // .= garder en mémoire
                
                return $this->codeFormulaire;

            }

          }
}



 //  <input type="checkbox" name="" value="valeur">Value