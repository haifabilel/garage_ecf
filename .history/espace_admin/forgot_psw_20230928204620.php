<?php
require_once 'connexion.php';


// $password = "test";


// if(isset($_POST['email'], $_POST['password'])){
//     $req = $conn->prepare('SELECT password FROM admin WHERE email = ?');
//     $req->execute([$_POST['email']]);
//     $Hpassword = $req->fetchColumn();
//     if(password_verify($_POST['password'], $Hpassword)){
//         echo "ok";
    
//     }else{
//         echo "pas ok";
//     }

// }
if(isset($_POST['email'])){
   $token = uniqid();
   $url = "http://localhost/garage_ecf/espace_admin/token?token=$token.php";
   $errors = "Voici le lien pour réinitialiser le mot de passe : $password";
   $headers = 'Content-type: text/plain; charset="utf-8"'. " ";

   if(mail($_POST['email'], 'Mot de passe oublié', $errors, $headers)){
    $req = "UPDATE users SET password = ? WHERE email = ?";
    $stmt = $conn->prepare($req);
    $stmt->execute([$hpassword, $_POST['email']]);
    $errors= "Mail envoyé";
   }else{
    $errors = "Une erreur est survenue";
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
   
        
        <input type="email" name="email" required placeholder="enter your email">
        <button type="submit" >Send a random password</button>
        
    </form>
</div>