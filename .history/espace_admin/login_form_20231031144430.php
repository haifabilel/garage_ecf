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

        } elseif(!$user_type["password"]) {
            $errors['password'] = "Votre password n'est pas valide";

        }else {
            if($user_type['user_type'] == 'admin'){
                header('location:admin_page.php');
            }else{
                header('location:espace_emplyé.php');
            }
           
        };

        
       
    }
}
// $sql = "SELECT * FROM admin INNER JOIN employé
// ON employé.id = admin.id";


    //changer password USER
//     $password = "";
//     echo password_hash("Admin_P1992",PASSWORD_DEFAULT);
// if (isset($_POST['email'],$_POST['password'])){
//     $stmt = $conn->prepare('SELECT password From admin WHERE email = ?');
//     $stmt->execute([$_POST['email']]);
//     $hpassword = $stmt->fetchColumn();

// };


?>

<section>
<div class="form-container">
    <form action="" method="POST">
       <h3 style="color: white;">Login now</h3>
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
       
    </form>
</div>
</section>

<?php
require_once '../templates/footer.php';
?>