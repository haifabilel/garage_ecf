<?php
require_once '../espace_admin/connexion.php';
require_once 'head.php';
?>

   <section id="Contact" class="Contact pt-5">
    <div class="form-container">
    <form action="p-contact.php" method="POST">
       <h3>Formulaire de contact</h3>
        <input type="namespace" name="fullname" required placeholder="entrer votre nom complét"> 
        <input type="email" name="email" required placeholder="entrer votre email">
        <input type="" name="password" required placeholder="entrer votre numéro portable">
        <textarea name="message" placeholder="Votre message..." cols="30" rows="10"></textarea>
        <input type="submit" name="submit" value="Envoyer" class="form-btn"> 
    </form>
</div>
  </section>
<?php
require_once 'footer.php'
?>
   