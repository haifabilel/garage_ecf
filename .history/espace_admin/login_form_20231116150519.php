<?php 
 require_once ('connexion.php');
 require_once ('head_admin.php');
session_start();
if(!empty($_POST)) {
    if(isset($_POST["email"],$_POST["password"]) && !empty($_POST["email"]
    && !empty($_POST["password"]))) {

        //stocker les informations admin
        $sql = "SELECT * FROM `admin` WHERE `email` = :email";
        $query = $conn->prepare($sql);
        $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
        $query->execute();
        $user_type = $query->fetch();

        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Votre email n'est pas valide";

        } elseif(!$user_type) {
            $errors['user_type'] = "Ce user n'existe pas";

        } elseif(!password_verify($_POST["password"], $user_type["password"])) {
            $errors['password'] = "Votre password n'est pas valide";

        }else {
            if($user_type['user_type'] == 'admin'){
                header('location:admin_page.php');
            }else{
                header('location:espace_employé.php');
            }
           
        };

        
       
    }
}



    //changer password USER
//     $password = "Admin_P92**";
//     echo password_hash("Admin_P92**",PASSWORD_DEFAULT);
// if (isset($_POST['email'],$_POST['password'])){
//     $stmt = $conn->prepare('SELECT password From admin WHERE email = ?');
//     $stmt->execute([$_POST['email']]);
//     $hpassword = $stmt->fetchColumn();

// };


?>
<div class="container_header p-3 ">
       <div class="content_button mt-2">
          <a href="../index.php" class="btn btn-primary">Back  <i class="bi bi-backspace"></i></a>
       </div>
    </div>
<section>
<div class="form-container">
    <form action="" method="POST">
       <h3 class="titre_login" style="color: white;">Login now</h3>
        <?php
        if(!empty($errors)){
            foreach($errors as $error){
                echo '<span class="error-msg" >'.$error.'</span>';
            };
        };
        ?>
        <input type="email" name="email" required placeholder="entrer une adresse email">
        <input type="password" name="password" id="password" required placeholder="entrer un mot de passe">
        <input type="checkbox" id="showPassword" onchange="togglePasswordVisibility()">
        <label for="showPassword">Afficher le mot de passe</label>
        <input type="submit" name="submit" value="login now" class="form-btn">
       
    </form>
</div>
</section>

<?php
require_once '../templates/footer.php';
?>