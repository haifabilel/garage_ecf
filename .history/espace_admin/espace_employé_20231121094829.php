<?php 
 require_once ('connexion.php');
 require_once ('head_admin.php');

 ?>
 <!-- Création dashbord emloyé -->
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
                      <a href="fetch_car.php" class="nav-link" px-2>Voitures</a>
                      </li>
                      <li class="nav-item">
                      <a href="liste_avis.php" class="nav-link" px-2>Avis clients</a>
                      </li>
                      <li class="nav-item4 mt-2">
                      <a href="logout.php"  class="button" id="btn-login" >Déconnexion <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                      </li>
                </ul>
            </div>
       </div>
     </div>
  </nav>
      </header>
    <section class="pannel_admin">
     <p class="dashboard-title">Pannel Emplyé</p>
     <img src="../uploads/Bienvenue employé(3).png" alt="image_admin" class="image_admin img-fluid">
    </section>

  <?php  
    require_once('../templates/footer.php');
     
     ?> 
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>