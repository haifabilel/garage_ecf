<?php
require_once '../espace_admin/connexion.php';
require_once 'head.php'
?>
<!DOCTYPE html>
<html lang="fr">
 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>garage</title>
        <meta name="description" content="Notre garage est parfaitement équipé, le Garage V.Parrot entretient vos véhicules et propose également des occasions toutes marques garanties. Il assure également le diagnostic et la réparation
         toutes marques de vos véhicules.">
         <!--  carrousel -->
         <link href="https://gosnippets.com/full-screen/bootstrap-carousel-with-cards-in-3-columns" rel="canonical">
            <!-- Bootstrap icons CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css"> 
        <!-- font awesome cdn link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
          
            <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <!-- CSS Link -->
        <link rel="stylesheet" href="../css/style.css">
    </head>
   <section id="Contact" class="Contact pt-5">
    <div class="form-container">
    <form action="" method="POST">
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
   