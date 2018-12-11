<?php 
$poleEmploi = '#^[0-9]{7}[A-Z]{1}$#';
$name = '#^[A-Z]{1}[a-zÀ-ÿ-]+$#';
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <title>Formulaire</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />
        <link href="assets/css/demo.css" rel="stylesheet" />
    </head>   
    <body> 
        <?Php 
        if (count($_POST) > 0){
            
            if (!empty($_POST['numPole']) ||
            !empty($_POST['lastName']) ||
            !empty($_POST['firstName'])){
                
            if  (preg_match($poleEmploi, $_POST['numPole']) ||
            preg_match($name, $_POST['lastName']) ||
            preg_match($name, $_POST['firstName'])){ ?>
        
        <p>Nom:<?= $_POST['lastName']; ?></p>
        <p>Prénom:<?= $_POST['firstName']; ?></p>
        <p>N° pole emploi:<?= $_POST['numPole']; ?></p> 
            <?php        
                }else{       
                ?>
        <form method="POST" action="index.php">
            <label for="numPole">numPole</label>
            <input name="numPole" />
            
            <label for="lastName">nom</label>                
            <input name="lastName" /> 
            
            <label for="firstName">prénom</label>
            <input name="firstName" />
            <input type="submit" value="envoi" />
        </form>        
        <?php 
        }
            }else{       
                ?>
        <form method="POST" action="index.php">
            <label for="numPole">numPole</label>
            <input name="numPole" />
            
            <label for="lastName">nom</label>                
            <input name="lastName" /> 
            
            <label for="firstName">prénom</label>
            <input name="firstName" />
            <input type="submit" value="envoi" />
        </form>        
        <?php 
        }
        }else{       
        ?>
        <form method="POST" action="index.php">
            <label for="numPole">numPole</label>
            <input name="numPole" />
            
            <label for="lastName">nom</label>                
            <input name="lastName" /> 
            
            <label for="firstName">prénom</label>
            <input name="firstName" />
            <input type="submit" value="envoi" />
        </form>        
        <?php 
        }
        ?>        
    </body>
</html>
