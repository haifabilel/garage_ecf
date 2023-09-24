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
          <li><a href="#vehicules" class="nav-link" px-2>Véhicules</a></li>
          <li><a href="#contact" class="nav-link" px-2>Contact</a></li>
          <li><a href="#reviews" class="nav-link" px-2>Reviews</a></li>
      </ul>

      <div class="col-md-3 text-end">
      <a href="./espace_admin/login_form.php"  class="btn" id="btn-login" >Espace Pro <i class="fa-solid fa-user"></i></a>
      </div>
    </header>
 
  <!------------ home ------------->
  <section class="home" >
  <div class="container col-xxl-8 px-2 py-6">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="./assets/images/cover-blue.jpg" class="d-block mx-lg-auto img-fluid" alt="cover" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Responsive left-aligned hero with image</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="./espace_admin/contact.php"  class="btn " data-toggle="modal" data-target="#exampleModalCenter" >Contact  <i class="fa-solid fa-message"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- fenetre modal -->
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  </section>