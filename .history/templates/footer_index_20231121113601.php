<footer class="d-flex flex-wrap justify-content-around align-items-center border-top">
    <div class="contact-info col-md-5 d-flex align-items-center">
        <div class="contact-infos">
            <h5>CONTACTER-NOUS</h5>
            <p>Adresse: 06 Rue de Paris 94000</p>
            <p>Email: vinccentparrot@gmail.com</p>
            <p>Téléphone: 0600000000</p>
        </div> 
    </div>
    <div class="reviews-section col-md-4">
        <h5>SATISFAIT DE NOS SERVICES ?</h5>
        <a href="./templates/reviews.php" type="button" class="btn btn-primary footer">Ajouter un avis</a>
    </div>
    <div class="horaires-section col-md-3">
       <h5>NOS HORAIRES</h5>
    </div>
<?php
  require_once './espace_admin/connexion.php';
  $req = $conn->query('SELECT * FROM horaires');
  while($user = $req->fetch()){
     ?>
     <table>
        <tr>
        <td><span class="jours"><?=$user['jour']?> :</span> </td>
        <td><?=$user['matin']?>  / </td>
        <td><?=$user['apres_midi']?></td>
        </tr>
    <?php 
  };
 ?>
    </table>
</section>

       
    </div>
    <span class=" copyright mb-3 mb-md-0 ">© 2023 Copyright: Garage Parrot</span>
   
</footer>
   