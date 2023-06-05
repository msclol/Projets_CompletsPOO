<?php
namespace App;
    class Compte{
        private $nom;
        private $solde;
        const DEVISE = '€';

        public function __construct($nom, $solde)
        {
            if(is_string($nom)){
                $this->setNom($nom); //Ce sont les setters qui font les vérifications
            }
            
            if(is_numeric($solde)){
                $this->setSolde($solde); 
            }                      
        }
        public function __toString()
        {
            if(empty($this->nom)){
                $msg ='Merci d\'entrer le nom du client';
            } elseif(empty($this->solde)){                
                $msg='Le solde de Monsieur: '.ucfirst($this->nom). ' n\'est pas correct <br>';           
            } else{
                $msg = 'Le solde de Monsieur: '.ucfirst($this->nom). ' est de: '.$this->solde.self::DEVISE.'<br>';
            }
            return $msg;
            
        }

        /**Setters 
         * 
        */
        private function setNom($nom){
            $this->nom = $nom;
        }

        private function setSolde($solde){
            $this->solde = $solde;
        }

          /**
           * Getters 
         * 
        */
        public function getNom(){
            return $this->nom ;
        }

        public function getSolde(){
            return $this->solde;
        }


        public function crediter($ajout){
            if($ajout<=0){
                echo 'Ajout impossible!<br>';

            } elseif(is_numeric($ajout)){
                // $this->solde = $this->solde +$ajout;
                $this->solde +=$ajout; 
                echo'<br>Le compte a été crédité de: '.$ajout.self::DEVISE.'<br>';
            }else{
                echo '<br>';
            }
            
        }

        public function retirer($retrait){
            if($retrait <= 0){
                echo '<br>Retrait impossible!';
            }elseif(is_numeric($retrait)){
                $this->solde-=$retrait; echo'<br>Le compte a été soustrait de: '.$retrait.self::DEVISE.'<br>';
            }else{
                echo '<br>';
            }
        }

        
        
    }