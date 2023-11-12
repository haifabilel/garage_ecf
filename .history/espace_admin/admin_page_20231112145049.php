<?php 
 require_once ('connexion.php');
 require_once ('head_admin.php');



 ?>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom" id="header_admin">
      
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid">
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
           
    
      </div>
    </div>
  </div>
</nav>
    </header>
    <section class="pannel_admin">
     <p class="dashboard-title">Pannel admin</p>
     <img src="../uploads/Bienvenue Mr.Parrot (2).png" alt="image_admin" class="image_admin">
    </section>

  <?php  
    require_once('../templates/footer.php');
     
     ?> 
    