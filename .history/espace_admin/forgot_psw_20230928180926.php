<?php
require_once 'connexion.php';


$password = "test";


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
if(isset($_POST['gmail'])){
    $password = uniqid();
    echo
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