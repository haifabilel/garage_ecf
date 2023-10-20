<?php
require_once 'head.php';
require_once 'config.php';

function creneaux_html (array $creneaux){
  if(count($creneaux) === 0){
    return 'Fermé';
  }
$phrases = [];
foreach ($creneaux as $creneau){
  $phrases[] = "de <strong> {$creneau[0]}h</strong> / <strong>{$creneau[1]}h</strong>";
}
return 'Ouvert '. implode(' - ', $phrases);
};


?>
<footer class="d-flex flex-wrap justify-content-between align-items-center border-top">
   <div class="row">
        <div class="col-md-6 d-flex align-items-center">
           <!-- <h5>CONTACTER-NOUS</h5>
           <p>Adresse:06 rue de Paris 94000</p>
           <p>Email:vinccentparrot@gmail.com</p>
           <p>Portable</p> -->
         
          <div class="nav col-md-4 justify-content-center d-flex">
            <i class="fa-brands fa-github" style="color: #ffffff;"></i></a>
            <i class="fa-brands fa-twitter" style="color: #fafdff;"></i></a>
            <i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
            <i class="fa-brands fa-facebook" style="color: #ffffff;"></i></a>
         </div>
           <span class="mb-3 mb-md-0">© 2023 Company, Inc</span>
    
    <div class="col-md-3 reviews_footer">
      <h5>SATISFAIT DE NOS ?</h5>
       <a  href="./templates/reviews.php" type="button" class="btn btn-primary">Ajouter un avis</a>
    </div>
   <div class="col-md-3 ">
    <h3>les horaires d'ouverture</h3>
    <ul>
      <?php foreach(jours as $k=> $jours): ?>
        <li>
          <strong><?= $jours ?></strong> :
          <?= creneaux_html(CRENEAUX[$k]); ?>
      </li>
      <?php endforeach ;?>
    </ul>
    
   </div>
   
 </footer>

