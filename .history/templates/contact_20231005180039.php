<?php
require_once '../espace_admin/connexion.php';
require_once '.templateshead.php'
?>
   <section id="Contact" class="Contact pt-5">
    <div class="form-container">
    <form action="" method="POST">
       <h3>Formulaire de contact</h3>
       
        <input type="email" name="email" required placeholder="enter your email">
        <input type="password" name="password" required placeholder="enter your password">
       
        <input type="submit" name="submit" value="login now" class="form-btn">
        
    </form>
</div>
  </section>

<?php
require_once 'footer.php'
?>
   