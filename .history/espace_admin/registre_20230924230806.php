<?php
require_once ('connexion.php');
session_start();

if(!empty($_POST)){
    $errors = array();

    if(empty($_POST['name']) || !preg_match('/^[a-zA-Z0-9_]+$/',$_POST['name'])){
        $errors['name'] = "Votre valide n'est pas valide";
    }else{
        $req = $conn->prepare('SELECT id FROM admin WHERE name = ?');
        $req->execute([$_POST['name']]);
        $user = $req-> fetch();
        if($user){
            $errors['name'] = 'Ce name est déja utilusé';
           
        };
    };

// Verfier le format de l'email
    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] ="Votre email n'est pas valide";
    }else{
        $req = $conn->prepare('SELECT id FROM admin WHERE email = ?');
        $req-> execute([$_POST['email']]);
        $user = $req-> fetch();
        if($user){
            $errors['email'] = 'Cet email est déja utilusé';
        };
    };

//Verfier si le password est le meme password confirm
    if(empty($_POST['password']) || $_POST['password'] != $_POST['cpassword']){
        $errors['password'] ="Votre password n'est pas valide";
    };

    if(empty($errors)){
      $req = $conn->prepare("INSERT INTO admin SET name = ? ,email = ? , password = ?, user_type = ? ");  
     //Crypter le mote de passe avec la methode BCrypt
      $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
      $req->execute([$_POST['name'],$_POST['email'], $password, $_POST['user_type']]);
      header('location:login_form.php');
    }; 
};
?>



<div class="form-container">
    <form action="" method="POST">
        <h3>Registre now</h3>
        <?php
        if(!empty($errors)){
            foreach($errors as $error){
                echo '<span class="error-msg" >'.$error.'</span>';
            };
        };
        ?>
        <input type="text" name="name" required placeholder="enter your name">
        <input type="email" name="email" required placeholder="enter your mail">
        <input type="password" name="password" required placeholder="enter your password">
        <input type="password" name="cpassword" required placeholder="confirm your password">
        <select name="user_type" >
            <option  value="admin">admin</option>
            <option value="employé">employé</option>
        </select>
        <input type="submit" name="submit" value="register now" class="form-btn">
        <p>already have an account? <a href="login_form.php">login now</a></p>
    </form>
</div>










