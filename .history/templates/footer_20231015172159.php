<?php
require_once 'head.php';

function creneaux_html (array $creneaux){
$phrases = [];
foreach ($creneaux as $creneau){
  $phrases[] = "de <strong> {$creneau[0]}h</strong> à <strong>{$creneau[1]}h</strong>";
}
return 'Ouvert '. implode(' et ', $phrases);
};
define('jours',[
  'Lundi',
  'Mardi',
  'Mercredi',
  'Jeudi',
  'Vendredi',
  'Samedi',
  'Dimanche'

]);
define('CRENEAUX', [
[
  [8, 12],
  [14, 19]
],
[
  [8, 12],
  [14, 19]
],
[
  [8, 12],
  [14, 19]
],
[
  [8, 12],
  [14, 19]
],
[
  [8, 12],
  [14, 19]
],
[
  [8, 12],
  [14, 19]
],
[
  [8, 12],
  [14, 19]
]
]);

$creneaux = creneaux_html(CRENEAUX);

?>
<footer class="d-flex flex-wrap justify-content-between align-items-center border-top">
   <div class="row">
        <div class="col-md-8 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
              <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Company, Inc</span>
          </div>
          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
          </ul>
      </div>
    </div>
   <div class="col-md-4 ">
    <h3>les horaires d'ouverture</h3>
    <ul>
      <?php foreach(Jours as $jours): ?>
      <li></li>
<?php end ?>
    </ul>
     <?= $creneaux ?>
   </div>
 </footer>

