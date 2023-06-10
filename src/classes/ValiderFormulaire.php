<?php
    namespace App;

    class ValiderFormulaire{

        //Vérification de la qualité d'informations avec les expressions régulières
        public function validerText($info, $name){
            $regex  = '#^[a-zéèçàêâ]{3,20}$#i';
            $result = preg_match($regex,$info); //preg_match(regex,infos)

            if($result){
                echo '<p>Votre '.$name.' est '.$info.'</p>';

            }else{
                echo '<p>L\'information entrée dans le champ: '.$name.' n\'est pas correcte</p>';
            }

        }
        public function validerNumber($info, $name){
            $regex  = '#[0-9]{2,3}#';
            $result = preg_match($regex,$info); //preg_match(regex,infos)

            if($result){
                echo '<p>Votre âge est: '.$info.'</p>';
            }else{
                echo '<p>L\'information entrée dans le champ: '.$name.' n\'est pas correcte</p>';
            }

        }

        public function validerEmail($info){
            $regex  = '#[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}#';
            $result = preg_match($regex,$info); //preg_match(regex,infos)

            if($result){
                echo '<p>Votre email est: '.$info.'</p>';
            }else{
                echo '<p>L\'information entrée dans le champ: email n\'est pas correcte</p>';
            }

        }

       


    }