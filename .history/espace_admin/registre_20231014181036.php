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
//insertion donnée employé
    if(empty($errors)){
      $req = $conn->prepare("INSERT INTO employé SET name = ? ,email = ? ,portable = ?, age = ? ,  password = ?, user_type = ? ");  
     //Crypter le mote de passe avec la methode BCrypt
      $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
      $req->execute([$_POST['name'],$_POST['email'], $password, $_POST['user_type']]);
      header('location:login_form.php');
    }; 
};
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
         
         <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet"/>
        
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
         <!--  carrousel -->
         <link href="https://gosnippets.com/full-screen/bootstrap-carousel-with-cards-in-3-columns" rel="canonical">
            <!-- Bootstrap icons CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css"> 
        <!-- font awesome cdn link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
          
            <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <!-- CSS Link -->
        <link rel="stylesheet" href="../css/style.css">
    </head>
   
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
        <input type="n" name="portable" required placeholder="entrer un numéro de portable">
        <input type="number" name="age" required placeholder="entrer l'age">
        <select name="user_type" >
            <option  value="admin">admin</option>
            <option value="employé">employé</option>
        </select>
        <input type="submit" name="submit" value="register now" class="form-btn">
        <p>already have an account? <a href="login_form.php">login now</a></p>
    </form>
</div>










