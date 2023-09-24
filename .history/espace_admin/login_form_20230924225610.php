<?php
require_once ('/templates/head.php');
require_once ('connexion.php');
session_start();

if(!empty($_POST) && !empty($_POST['email']) && !empty($_POST['password'])) {

    $req = $conn->prepare('SELECT * FROM admin WHERE email = :email OR password = :password');
    $req->bindValue(":email", $_POST['email'], PDO::PARAM_STR);
    $req->execute();
    $user =$req->fetch();

    if(!$user){
        die('ok');
    }
   
   
    // $req->execute(['email' => $_POST['email']]);
    // $user = $req->fetch();
    // if(password_verify($_POST['password'], $user->password)) {
    //         $_SESSION['admin'] = $user;
    //         header('location:admin-page.php');
    //         exit(); 
    // };
};
?>


<div class="form-container">
    <form action="" method="POST">
        <h3>Login now</h3>
        <?php
        if(!empty($errors)){
            foreach($errors as $error){
                echo '<span class="error-msg" >'.$error.'</span>';
            };
        };
        ?>
        <input type="email" name="email" required placeholder="enter your email">
        <input type="password" name="password" required placeholder="enter your password">
       
        <input type="submit" name="submit" value="login now" class="form-btn">
        <p>Don't have an account? <a href="registre.php">registre now</a></p>
    </form>
</div>