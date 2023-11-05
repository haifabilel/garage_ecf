<?php
require_once 'head.php';
require_once '.'
?>
<div class="container_services p-3 ">
    <div class="content_services d-flex">
        <p>Véhicules</p>
    </div>
       <div class="content_button mt-2">
          <a href="vehicules.php" class="btn btn-primary">Back  <i class="bi bi-backspace"></i></a>
       </div>
    </div>
<section>
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../uploads/pare_brise.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../uploads/mecanique.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../uploads/mercedes-benz-1370536_640.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="table_car">
<table class="blueTable">
<thead>
<tr>
<th>head1</th>
<th>head2</th>
</tr>
</thead>
<tbody>
<tr>
<td>cell1_1</td>
<td>cell2_1</td>
</tr>
</tbody>
</table>
</section>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>