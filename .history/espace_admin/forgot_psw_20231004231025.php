<?php
require_once 'connexion.php';


?>
<!DOCTYPE html>
<html lang="fr">
 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>garage</title>
        <meta name="description" content="Notre garage est parfaitement équipé, le Garage V.Parrot entretient vos véhicules et propose également des occasions toutes marques garanties. Il assure également le diagnostic et la réparation
         toutes marques de vos véhicules.">
         <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- CSS Link -->
        <link rel="stylesheet" href="../css/style.css">
    </head>
<div class="form-container">
    <form action="" method="POST">
        <?php
         if(isset($errors)){echo '<span>' .$errors. '</span>';}
        ?>
        <h3>Recupération de mot de passe</h3>
        <input type="email" name="recup_email" required placeholder="entrer votre adresse mail">
        <button type="submit" class="btn " name="recup_mdp" >Valider</button>
        
    </form>
</div>