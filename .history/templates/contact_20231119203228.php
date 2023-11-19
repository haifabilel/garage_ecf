<?php
require_once '../espace_admin/connexion.php';
require_once 'head.php';
//Ajouter Véhicule
if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $portable = $_POST['portable'];
    $message= $_FILES['message'];
    
  
    $query = "INSERT INTO contact (nom, prenom, mail, portable, message)
     VALUES ('$brand','$prix','$kilometrage','$annee','$img_des')";
     $statement = $conn->prepare($query);
     $stat = $statement->execute();
    header('location:fetch_car.php');
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
    <form action="traitement_contact.php" method="POST">
       <h3>Formulaire de contact</h3>
        <input type="text" name="fullname"  placeholder="entrer votre nom complét" required> 
        <input type="email" name="email" placeholder="entrer votre email"required>
        <input type="number" name="portable" placeholder="entrer votre numéro portable"required>
        <textarea name="message" placeholder="Votre message..." required></textarea>
        <button type="submit" name="submit" class="btn_button" value="Envoyer" class="form-btn">Envoyer</button>
    </form>
</div>

  </section>
<?php
require_once 'footer.php'
?>
   