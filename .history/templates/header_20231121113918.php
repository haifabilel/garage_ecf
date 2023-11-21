<?php
require_once 'head.php';
?>
<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid mt-4">
       <a href="index.php" class="logo">
           <img src="./assets/images/1.png" alt="logo" class="img_log">
       </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a href="./templates/fetch_data.php" class="nav-link" px-2>Véhicules</a>
            </li>
            <li class="nav-item">
                <a href="./templates/reviews.php" class="nav-link" px-2>Ajouter avis</a>
            </li>
            <li class="nav-item">
                <a href="./templates/contact.php" class="nav-link" px-2>Contact</a>
            </li>
            <li class="nav-item4 mt-2">
            <a href="./espace_admin/login_form.php"  class="button_pro" id="btn-login" >Espace Pro <i class="fa-solid fa-user"></i></a>
            </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
</header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>