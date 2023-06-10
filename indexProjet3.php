<?php
    namespace App;
    require __DIR__.'/vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire</title>
</head>
<body>
    <section>
    <?php
          
        $formulaire = new Formulaire();
        $formulaire->setChamp('text','nom',(isset($_POST['nom'])? $_POST['nom']:'' ));
        $formulaire->setChamp('text','prenom',(isset($_POST['prenom'])? $_POST['prenom']:'' ));
        $formulaire->setChamp('text','age',(isset($_POST['age'])? $_POST['age']:'' ));
        $formulaire->setChamp('text','email',(isset($_POST['email'])? $_POST['email']:'' ));
        $formulaire->setBouton('valider le formulaire');

    
        echo $formulaire->getFormulaire();

   ?>
    <?php
    if(isset($_POST['valider_le_formulaire'])){
        $valider = new ValiderFormulaire();
        $valider->validerText($_POST['nom'], 'nom');
        $valider->validerText($_POST['prenom'], 'prénom');
        $valider->validerNumber($_POST['age'], 'âge');
        $valider->validerEmail($_POST['email']);
        
    }
    ?>

    </section>

    <br>
    <hr>

    <section>
       

       <?php
        $formulaire2 = new CheckboxRadio();
        $formulaire2->setChamp('text','nom');
        $formulaire2->setCheckboxRadio('Quelle est votre animal de compagnie:','checkbox', 'animal:','Chien');
        $formulaire2->setCheckboxRadio('','checkbox', 'animal','Chat');
        $formulaire2->SetBouton('valider le formulaire');
        echo $formulaire2->getFormulaire();   
       
        
       ?>
    </section>
    <br><hr>

    <section>
        <h2>En attente...</h2><br>
        
        <?php 
            $formulaire3 = new MenuDeroulant();
            $formulaire3->setChamp('text','nom');
            $formulaire3->setMenuName('civilite');
            $formulaire3->setOption('homme');
            $formulaire3->setOption('femme');
            $formulaire3->SetBouton('valider le formulaire');
            echo $formulaire3->getFormulaire();  
        ?>
    


    </section>

   
   
    
</body>
</html>