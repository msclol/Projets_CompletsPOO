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
        $formulaire->setChamp('text','nom');
        $formulaire->setChamp('number','age');
        $formulaire->setChamp('email','email');
        $formulaire->setBouton('valider le formulaire');

    
        echo $formulaire->getFormulaire();

   ?>
    <?php
    if(isset($_POST['valider_le_formulaire'])){
        $nom = $_POST['nom'];   
        $age = $_POST['age']; 
        $email = $_POST['email'];
        if(empty($nom) || empty($age) ||empty($email)){
            echo '<p>Vous devez remplir le formulaire</p>';
        }else{
            echo'Nom:'.$nom.'<br>';
            echo'Age:'.$age.'<br>';
            echo'Email:'.$email.'<br>';
        }
    }
    ?>

    </section>

    <br>
    <hr>

    <section>
       <h2>En attente...</h2><br>

       <?php
        $formulaire2 = new CheckboxRadio();
        $formulaire2->setChamp('text','nom');
        $formulaire2->setCheckboxRadio('Quelle est votre animal de compagnie:','checkbox', 'animal:','Chien');
        $formulaire2->setCheckboxRadio('','checkbox', 'animal','Chat');
        $formulaire2->SetBouton('valider le formulaire');
        echo $formulaire2->getFormulaire();
       
       
        
       ?>

    </section>

   
   
    
</body>
</html>