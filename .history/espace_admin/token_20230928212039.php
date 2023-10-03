<?php
require_once 'connexion.php';

if(isset($_GET['token']) && $_GET['token'] != ''){
    $stmt = $conn->prepare('SELECT email FROM admin WHERE token =?');
    $stmt->execute([$_GET['token']]);
    $email = $stmt->fetchColumn();

 if($email)
 {

    }
}
if(isset($_POST['newPassword'])){
   $hpassword = password_hash($_POST['newPassword'],PASSWORD_DEFAULT);
   $req = "UPDATE users SET password = ? WHERE email = ?";
   $stmt = $conn->prepare($req);
   $stmt->execute([$hpassword, $_POST['email']]);
   echo "Mot de passe modifié avec succés";
}

  ?>   




