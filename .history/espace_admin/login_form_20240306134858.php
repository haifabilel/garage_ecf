<?php 
 require_once ('connexion.php');
 require_once ('head_admin.php');
session_start();
session_start();

// Générer un jeton CSRF
$token = bin2hex(random_bytes(32)); // Génère une chaîne aléatoire de 32 octets

// Stocker le jeton CSRF dans la session pour une vérification ultérieure
$_SESSION['csrf_token'] = $token;
if(!empty($_POST)) {
    if(isset($_POST["email"],$_POST["password"]) && !empty($_POST["email"]
    && !empty($_POST["password"]))) {

        // Sécuriser contre les injections SQL
        $sql = "SELECT * FROM `admin` WHERE `email` = :email";
        $query = $conn->prepare($sql);
        $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
        $query->execute();
        $user_type = $query->fetch();
        //Echapper les caractéres spéciaux 
        if(!filter_var(htmlspecialchars($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
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
};

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
        <div class="password-container">
            <input type="password" name="password" id="password" required placeholder="entrer un mot de passe">
            <span class="toggle-password" onclick="togglePasswordVisibility()">
            <i class="fa fa-eye" id="eye-icon"></i>
            </span>
        </div>
        <input type="submit" name="submit" value="login now" class="form-btn">
    </form>
  </div>
</section>
<?php
require_once '../templates/footer.php';
?>
<script src="../js/script.js"></script>