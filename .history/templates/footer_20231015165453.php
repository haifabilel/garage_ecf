<?php
require_once 'head.php';

function creneaux_html (array $creneaux){
$phrases = [];
foreach ($creneaux as $creneau){
  $phrases[] = "de {$creneau[0]}h à {$creneau[1]}h";
}
var_dump($phrases);
};

define('CRENEAUX', [
[8, 12],
[14, 19]
]);

?>
<footer class="d-flex flex-wrap justify-content-between align-items-center border-top">
   <div class="row">
        <div class="col-md-4 d-flex align-items-center">
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
   <div class="col-md-4 d-flex align-items-center">
    <h3>les horaires d'ouverture</h3>
     <?= $creneaux ?>
   </div>
 </footer>

