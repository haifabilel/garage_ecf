<?php
require_once 'head.php';
require_once '../espace_admin/connexion.php';

if(isset($_POST['submit'])){
    $sujet= htmlspecialchars($_POST['sujet'], ENT_QUOTES);;
    $nom = htmlspecialchars($_POST['nom'], ENT_QUOTES);;
    $prenom = htmlspecialchars($_POST['prenom'], ENT_QUOTES);;
    $mail = htmlspecialchars($_POST['mail'], FILTER_VALIDATE_EMAIL);
    $portable = htmlspecialchars($_POST['portable'], ENT_QUOTES);
    $message= htmlspecialchars($_POST['message'], ENT_QUOTES);
    
  
    $query = "INSERT INTO contact_voitures (sujet,nom, prenom, mail, portable, message)
     VALUES ('$sujet','$nom','$prenom','$mail','$portable','$message')";
     $statement = $conn->prepare($query);
     $stat = $statement->execute();
     $errors[] = "Message envoyé l'administrateur va vous répondre dans les brefs délais";
};
?>

<div class="container_header p-3 ">
    <div class="content_header d-flex">
        <p>Contact</p>
    </div>
       <div class="content_button ">
          <a href="fetch_data.php" class="btn btn-primary">Back  <i class="bi bi-backspace"></i></a>
       </div>
    </div>  
<section id="Contact" class="Contact pt-5">
<?php
        if(!empty($errors)){
            foreach($errors as $error){
                echo '<h3 class="error-msg" >'.$error.'</h3>';
            };
        };
        ?>
    <div class="form-container">
    <form  method="POST">
       <h3>Formulaire de contact</h3>
       <?php
        $id =(int) $_GET['id'];
        $req =$conn->query("SELECT * FROM voitures WHERE id =:id");
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $user= $req-> fetch();
        ?>
        <input type="text" name="sujet" value="Je vous contacte concernant: <?php echo $user['brand']; ?>"  required> 
        <input type="text" name="nom"  placeholder="entrer votre nom " required> 
        <input type="text" name="prenom"  placeholder="entrer votre prénom" required> 
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