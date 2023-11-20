<?php
require_once '../espace_admin/connexion.php';
require_once 'head.php';
session_start();
// Génération du jeton CSRF lors de l'affichage du formulaire
$token = bin2hex(random_bytes(32));
$_SESSION['token'] = $token;

// Vérification du jeton lors du traitement du formulaire
if (isset($_POST['submit']) && $_POST['token'] === $_SESSION['token']) {
    //Echapper les caractére spéciaux avec 
    $nom = htmlspecialchars($_POST['nom'], ENT_QUOTES);
    $prenom = htmlspecialchars($_POST['prenom'], ENT_QUOTES);
    $mail= filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL);
    $portable =htmlspecialchars($_POST['portable'], ENT_QUOTES);
    $message= htmlspecialchars($_POST['message'], ENT_QUOTES);
    
  
    $query = "INSERT INTO contact (nom, prenom, mail, portable, message)
     VALUES ('$nom','$prenom','$mail','$portable','$message')";
     $statement = $conn->prepare($query);
     $stat = $statement->execute();
    header('location:contact.php');
};
?>




<div class="container_header p-3 ">
    <div class="content_header d-flex">
        <p>Contact</p>
    </div>
       <div class="content_button mt-2">
          <a href="../index.php" class="btn btn-primary">Back  <i class="bi bi-backspace"></i></a>
       </div>
    </div>  
   <section id="Contact" class="Contact pt-5">
    <div class="form-container">
    <form  method="POST">
       <h3>Formulaire de contact</h3>
        <input type="text" name="nom"  placeholder="entrer votre nom" required> 
        <input type="text" name="prenom"  placeholder="entrer votre prenom" required> 
        <input type="email" name="mail" placeholder="entrer votre email"required>
        <input type="number" name="portable" placeholder="entrer votre numéro portable"required>
        <textarea name="message" placeholder="Votre message..." required></textarea>
        <button type="submit" name="submit" class="btn_button" value="Envoyer" class="form-btn">Envoyer</button>
    </form>
</div>

  </section>
<?php
require_once 'footer.php'
?>
   