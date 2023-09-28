<?php
require_once 'connexion.php';

if(isset($_GET['token']) && $_GET['token'] != ''){
    $stmt = $conn->prepare('SELECT email FROM admin WHERE token =?');
    $stmt->execute([$_GET['token']]);
    $email = $stmt->fetchColumn();

    if($email){
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
       <label for="newPassword">Nouveau mot de passe :</label>
       <input type="submit" value="Confirmer">  
    </form>
</div>
<?php
    }
}
if(isset($_POST['newPassword'])){
   $hpassword = password_hash($_POST['newPassword'],PASSWORD_DEFAULT).
}
     




