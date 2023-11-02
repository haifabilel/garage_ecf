<?php
require_once 'footer.php'
?>

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
<a href="../index.php" class="btn-button">Back <i class="fa-solid fa-arrow-left-long" style="color: #ffffff;"></i></a>
  </section>
<?php
require_once 'footer.php'
?>