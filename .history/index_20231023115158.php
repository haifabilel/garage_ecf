<?php
require_once './templates/head.php';
require_once './templates/header.php';
require_once './templates/services.php';
//------fetch reviews-----
require_once ('./espace_admin/connexion.php');
     $req = $conn->query('SELECT * FROM review_table WHERE user_rating > 3');
     while($user = $req->fetch()){
        ?>
        <div class="card text-center">
  <div class="card-header"><?=$user['user_rating']?> </div>
  <div class="card-body">
    <h5 class="card-title"><?=$user['user_name']?></h5>
    <p class="card-text"><?=$user['user_review']?></p>
  </div>
  <div class="card-footer text-body-secondary">
  
  </div>
</div>
        <?php 
     }
    ?>
    <?php
require_once './templates/footer.php';
?>
