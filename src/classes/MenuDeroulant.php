<?php
    namespace App;

    class MenuDeroulant extends Formulaire{
        private $codeMenuName;
        private $codeOption;
        const MENU_FIN='</select>';

        public function setMenuName($name){
            $this->codeMenuName ='<select name="'.$name.'">';
        }

        public function setOption($value){
            $this->codeOption .='<option value="'.$value.'">'.ucfirst($value).'</option>';
        }

        private function getCodeMenuDeroulant(){
            $menuDeroulant  =   $this->codeMenuName;
            $menuDeroulant  .=  $this->codeOption;
            $menuDeroulant  .=  self::MENU_FIN;
            return $menuDeroulant;
        }
        public function getFormulaire(){
            if(!empty($this->codeChamp) || !empty($this->codeBouton) || !empty($this->getCodeMenuDeroulant())){
                $this->codeFormulaire   =   self::DEBUT_FORMULAIRE;
                $this->codeFormulaire   .=  $this->codeChamp;
                $this->codeFormulaire   .=  $this-> getCodeMenuDeroulant();
                $this->codeFormulaire   .=  $this->codeBouton;
                $this->codeFormulaire   .=  self::FIN_FORMULAIRE;      // .= garder en mémoire
                
                return $this->codeFormulaire;

            }

          }


    }

    