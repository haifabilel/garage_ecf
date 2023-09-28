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
    $password = uniqid();
   $hpassword = password_hash($password, PASSWORD_DEFAULT);

   $message = "Voici votre nouveau mot de passe : $password";
   $headers = 'Content-type: text/plain; charset="utf-8"'. " ";

   if(mail($_POST['email'], 'Mot de passe oublié', $message,$headers)){
    $req = "UPDATE users SET password = ? WHERE email = ?";
    $stm = $conn->prepare($req);
    $stm->execute([$hpassword, $_POST['email']]);
    $message = "Mail envoyé";
   }else{
    $message = "Une erreur est survenue";
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
    <?php
        if(!empty($message)){
            foreach($messages as $message){
                echo '<span class="error-msg" >'.$message.'</span>';
            };
        };
        ?>
        <input type="email" name="email" required placeholder="enter your email">
        <button type="submit" >Send a random password</button>
        
    </form>
</div>