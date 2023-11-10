<?php 
 require_once ('connexion.php');
 require_once ('head_admin.php');



 ?>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom" id="header_admin">
      
    <div class="col-md-3 mb-2 mb-md-0">
      <a href="../index.php" class="logo">
          <img src="../assets/images/1.png" alt="logo" style="width: 190px; height: 100px; ">
       </a>
      </div>
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="fetch_service.php" class="nav-link" px-2>services</a></li>
          <li><a href="list_employés.php" class="nav-link" px-2>Employé</a></li>
      </ul>
      <div class="col-md-3 text-end">
      <a href="logout.php"  class="button" id="btn-login" >Déconnexion <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
      </div>
    </header>
    <section class="pannel_admin">
     <p class="dashboard-title">Pannel admin</p>
     <img src="../uploads/Bienvenue Mr.Parrot (2).png" alt="image_admin" class="image_admin">
    </section>

  <?php  
    require_once('../templates/footer.php');
     
     ?>