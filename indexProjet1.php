<?php
    namespace App;
    require __DIR__.'/vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Compte Bancaire</title>
</head>
<body>
    
    <form action="" method="post">
        <input data-class="majuscule" type="text" name="nom" placeholder="Nom">
        <input type="text" name="solde" placeholder="Solde">
        <input type="text" name="credit" placeholder="Créditer">
        <input type="text" name="retrait" placeholder="Retirer">
        <input type="submit" name="valider" value="Enregistrer">     
    </form>
    
    <br> 
        <?php
            if(isset($_POST['valider']) || isset($_POST['nom'])){
                echo '<section>';
                $nom = $_POST['nom'];
                $solde = $_POST['solde'];
                $compte = new Compte($nom, $solde);
                echo'<h2>Détail du compte de M.'.$compte->getNom().'</h2>';
                echo $compte;

                //On vérifie si le champ "credit" est rempli
               $credit = $_POST['credit'];
                if($credit){
                    $compte->crediter($credit);
                    echo $compte;

                }

                 //On vérifie si le champ "retrait" est rempli
                $retrait = $_POST['retrait'];
                if($retrait){
                    $compte->retirer($retrait);
                    echo $compte;
                }
               echo ' </section>';
            }
        ?>

   
    
        
   
    
</body>
</html>