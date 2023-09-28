<?php
require_once 'connexion.php';

$password = "test";
echo password_hash("test",PASSWORD_DEFAULT);

if(isset($_POST['email'], $_POST['password'])){
    $req = $conn->prepare('SELECT password FROM admin WHERE email = ?');
    $req->execute([$_POST['email']]);
    $Hpassword = $req->fetchColumn();
    if(password_verify($_POST['password'], $Hpassword)){
        echo "ok";
    
    }else{
        echo "pas ok";
    }

}
?>