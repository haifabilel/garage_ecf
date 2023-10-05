<?php
require_once 'head.php';
?>

    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
      <a href="index.php" class="logo">
          <img src="./assets/images/logo-login.png" alt="logo" style="width: 190px; ">
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#services" class="nav-link" px-2>services</a></li>
          <li><a href="./templates/vehicules.php" class="nav-link" px-2>Véhicules</a></li>
          <li><a href="#contact" class="nav-link" px-2>Contact</a></li>
          <li><a href="#reviews" class="nav-link" px-2>Reviews</a></li>
      </ul>

      <div class="col-md-3 text-end">
      <a href="./espace_admin/login_form.php"  class="button" id="btn-login" >Espace Pro <i class="fa-solid fa-user"></i></a>
      </div>
    </header>
 <!-- Modal -->
<div class="modal fade" id="buttonModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-container">
    <form action="" method="POST">
       <h3>Login now</h3>
        <input type="email" name="email" required placeholder="enter your email">
        <input type="password" name="password" required placeholder="enter your password">
       
        <input type="submit" name="submit" value="login now" class="form-btn">
       
    </form>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  <!------------ home ------------->
  <section class="home" >
  <div class="container col-xxl-8 px-2 py-6">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="./assets/images/cover-blue.jpg" class="d-block mx-lg-auto img-fluid" alt="cover" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold  lh-1 mb-3">Bienvenue dans garage Vincent Parrot</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#buttonModal" >Contact  <i class="fa-solid fa-message"></i></button>
      </div>
    </div>
   </div>  
  </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  