<?php 
session_start();
if(!empty($_POST)){
    if(isset($_POST["email"],$_POST["password"])&& !empty($_POST["email"]
    && !empty($_POST["password"]))){
        if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
            die('Entrer un email valide');
        }
        require_once ('connexion.php');
        $sql = "SELECT * FROM `admin` WHERE `email` = :email";
        $query = $conn->prepare($qsl);
        $query->
    }
}







// if(!empty($_POST) && !empty($_POST['email']) && !empty($_POST['password'])) {
//     $req = $conn->prepare('SELECT id FROM admin WHERE email = ?');
//     $req->execute(['email' => $_POST['email']]);
//     $user = $req->fetch();
//     if(password_verify($_POST['password'], $user->password)) {
//             $_SESSION['admin'] = $user;
//             header('location:admin-page.php');
//             exit(); 
//     };
// };
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


// $req = $conn->prepare('SELECT * FROM admin WHERE email = :email OR password = :password');
    // $req->bindValue(":email", $_POST['email'], PDO::PARAM_STR);
    // $req->execute();
    // $user =$req->fetch();

    // if(!$user){
    //     die('ok');
    // }