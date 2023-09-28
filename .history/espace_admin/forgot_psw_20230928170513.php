<?php
require_once 'connexion.php';
require_once '../templates/head.php';

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
<div class="form-container">
    <form action="" method="POST">
        <input type="email" name="email" required placeholder="enter your email">
        <button type="submit" >Send a random password</button>
        
    </form>
</div>