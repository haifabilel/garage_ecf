<?php
require_once 'head.php';
?>

    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
      <a href="index.php" class="logo">
          <img src="./assets/images/1.png" alt="logo" style="width: 190px; height: 140px; ">
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#services" class="nav-link" px-2>services</a></li>
          <li><a href="./templates/vehicules.php" class="nav-link" px-2>Véhicules</a></li>
          <li><a href="./templates/reviews.php" class="nav-link" px-2>Ajouter avis</a></li>
          <li><a href="./templates/contact.php" class="nav-link" px-2>Contact</a></li>
      </ul>

      <div class="col-md-3 text-end">
      <a href="./espace_admin/login_form.php"  class="button" id="btn-login" >Espace Pro <i class="fa-solid fa-user"></i></a>
      </div>
    </header>

  