<?php
require_once 'connexion.php';

if(isset($_POST['email'])){
    $password = uniqid();
    $hashPassword = password_hash($password,PASSWORD_DEFAULT);


    // $to ='vinccentparrot@gmail.com';
    // $subject ='testing sendmail.exe';
    $message ="Bonjour, voici votre nouveau mot de passe : $password";
    $headers ='Content-Type : text/plain; charset="utf-8"'."\r\n";
    if(mail('vinccentparrot@localhost.com', 'Mot de passe oublié',$message,'')){
        $sql = "UPDATE admin SET password = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$hashPassword,$_POST['email']]);
        echo "Mail envoyé";
    }else{
        echo "erreur";
    }
}

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
        <h3>Recupération de mot de passe</h3>
        <input type="email" name="email" required placeholder="entrer votre adresse mail">
        <button type="submit" class="btn" name="recup_mdp" >Valider</button>
        
    </form>
</div>

<!-- if(mail($_POST['email'], 'Mot de passe oublié',$message, $headers)){ -->