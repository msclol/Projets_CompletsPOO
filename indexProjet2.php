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
    <title>Document</title>
</head>
<body>
    
    <section>
        <form action="" method="post">
            <select name="pays" id="">
                <option value="Allemagne">Allemagne</option>
                <option value="Belgique">Belgique</option>
                <option value="Espagne">Espagne</option>
                <option value="France">France</option>
                <option value="Italie">Italie</option>
                <option value="Portugal">Portugal</option>
                <option value="Congo">Congo</option>
            </select>
            <input type="submit" name="voir" value="Voir">
            </form>
            <?php
                if(isset($_POST['voir'])){
                    $pays = $_POST['pays'];

                    switch($pays){
                        case 'Allemagne':
                            $capitale='berlin';
                            break;
                        case 'Belgique':
                            $capitale='bruxelle';
                            break;
                        case 'Espagne':
                            $capitale='madrid';
                            break;
                        case 'France':
                            $capitale='paris';
                        break;
                        case 'Italie':
                            $capitale='rome';
                            break;
                        case 'Portugal':
                            $capitale='lisbone';
                            break;
                        case 'Congo':
                            $capitale='brazzaville';
                            break;                }
                    $capitale = new Capitale($pays, $capitale);
                    echo $capitale;

                }
            
            ?>

    </section>  




    
   
    
    
</body>
</html>