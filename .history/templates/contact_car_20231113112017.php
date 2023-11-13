<?php
require_once 'head.php';
require_once '../espace_admin/connexion.php';

?>

<div class="container_header p-3 ">
    <div class="content_header d-flex">
        <p>C</p>
    </div>
       <div class="content_button mt-2">
          <button class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#ajoutCar">Ajouter Véhicule <i class="fa-solid fa-circle-plus" style="color: #ffffff;"></i> </button>
          <a href="espace_employé.php" class="btn btn-primary">Back  <i class="bi bi-backspace"></i></a>
       </div>
    </div>  
<section id="Contact" class="Contact pt-5">
    <div class="form-container">
    <form action="traitement_contact_car.php" method="POST">
       <h3>Formulaire de contact</h3>
       <?php
        $id =(int) $_GET['id'];
        //manque securité avec bandvalue
        $req =$conn->query("SELECT * FROM voitures WHERE id = $id");
        $user= $req-> fetch();
        ?>
        <input type="text" name="objet" value="Brand : <?php echo $user['brand']; ?>"  required> 
        <input type="text" name="nom"  placeholder="entrer votre nom " required> 
        <input type="text" name="prenom"  placeholder="entrer votre prénom" required> 
        <input type="email" name="email" placeholder="entrer votre email"required>
        <input type="number" name="portable" placeholder="entrer votre numéro portable"required>
        <textarea name="message" placeholder="Votre message..." required></textarea>
        <button type="submit" name="submit" class="btn_button" value="Envoyer" class="form-btn">Envoyer</button>
    </form>
</div>
<a href="fetch_data.php" class="btn-button" id="back_car">Back <i class="fa-solid fa-arrow-left-long" style="color: #ffffff;"></i></a>
  </section>

<?php
require_once 'footer.php'
?>