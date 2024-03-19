<?php
require_once 'head.php';
?>
<footer class="footer_car d-flex flex-wrap justify-content-around align-items-center ">
    <div class="contact-info col-md-4 d-flex align-items-center">
        <div class="contact-infos_car">
            <h5>NOUS-</h5>
            <p class="footer_titre">Adresse: 06 Rue de Paris 94000</p>
            <p class="footer_titre">Email: vinccentparrot@gmail.com</p>
            <p class="footer_titre">Téléphone: 0600000000</p>
            <a href="../templates/contact.php" type="button" class="btn btn-primary footer">Contact</a>
        </div>  
    </div>
    <div class="reviews-section_car col-md-4">
        <h5>SATISFAIT DE NOS SERVICES ?</h5>
        <a href="../templates/reviews.php" type="button" class="btn btn-primary footer">Ajouter un avis</a>
    </div>
    <div class="horaires-section_car col-md-4">
      <h5>NOS HORAIRES</h5>
<?php
  require_once '../espace_admin/connexion.php';
  $req = $conn->query('SELECT * FROM horaires');
  while($user = $req->fetch()){
     ?>
     <table>
        <tr>
        <td><span class="jours_car"><?=$user['jour']?> :</span> </td>
        <td><span class="matin"><?=$user['matin']?>  / </span></td>
        <td><span class="apres_midi"><?=$user['apres_midi']?></span></td>
        </tr>
     <?php 
   };
 ?>
    </table>  
  </div>
  <span class="copyright mb-3 mb-md-0 ">© 2023 Copyright: Garage Parrot</span>
</footer>
