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

   
   </div>
        
   </div>
 </footer>




</div>
</div>
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