<?php
require_once './templates/head.php';
require_once './templates/header.php';
require_once './templates/services.php';
//------fetch reviews-----
require_once ('./espace_admin/connexion.php');
     $req = $conn->query('SELECT * FROM review_table WHERE user_rating > 3');
     
require_once './templates/footer.php';
?>
<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-body-secondary">
    2 days ago
  </div>
</div>