<?php 
 require_once ('connexion.php');
 require_once ('head_admin.php');
 ?>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
       <div class="container-fluid mt-3">
          <a href="../index.php" class="logo">
          <img src="../assets/images/1.png" alt="logo" class="img_log">
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
          <a href="fetch_service.php" class="nav-link" px-2>services</a>
          </li>
          <li class="nav-item">
          <a href="list_employés.php" class="nav-link" px-2>Employés</a>
          </li>
          <li class="nav-item">
          <a href="horaires.php" class="nav-link" px-2>Horaires</a>
          </li>
          <li class="nav-item4 mt-2">
          <li class="nav-item">
          <a href="fetch_contact.php" class="nav-link" px-2>Message clients</a>
          </li>
          <li class="nav-item">
          <a href="fetch_contact_car.php" class="nav-link" px-2>Message voitures</a>
          </li>
          <a href="logout.php"  class="btn btn-primary" id="btn-login" >Déconnexion <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
          </li>
           
    
      </div>
    </div>
  </div>
</nav>
    </header>
    <section class="pannel_admin">
     <h2 class="dashboard-title">Pannel admin</h2>
     <img src="../uploads/Bienvenue Mr.Parrot (2).png" alt="image_admin" class="image_admin img-fluid">
    </section>

  <?php  
    require_once('../templates/footer.php'); 
     ?> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>