<?php
require_once 'connexion.php';


// $password = "test";

// if(isset($_POST['email'])){
//    $token = uniqid();
//    $url = "http://localhost/garage_ecf/espace_admin/token?token=$token";
//    $message = "Voici le lien pour réinitialiser le mot de passe : $url";
//    $headers = 'Content-type: text/plain; charset="utf-8"'. " ";

//    if(mail($_POST['email'], 'Mot de passe oublié', $message, $headers)){
//     $req = "UPDATE users SET token = ? WHERE email = ?";
//     $stmt = $conn->prepare($req);
//     $stmt->execute([$token, $_POST['email']]);
//     $errors= "Mail envoyé";
//    }else{
//     $message = "Une erreur est survenue";
//    }
// }
if(isset($_POST['recup_mdp'])){
    if(!empty($_POST['recup_email'])){

    }else{
        $errors = 'Veui'
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
        <input type="email" name="recup_email" required placeholder="entrer votre adresse mail">
        <button type="submit" name="recup_mdp" >Valider</button>
        
    </form>
</div>