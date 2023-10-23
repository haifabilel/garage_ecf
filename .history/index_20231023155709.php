<?php
require_once './templates/head.php';
require_once './templates/header.php';
require_once './templates/services.php';
//------fetch reviews-----
?>

    <h2>Vos avis</h2>
<?php
require_once ('./espace_admin/connexion.php');
     $req = $conn->query('SELECT * FROM review_table WHERE user_rating > 2');
     while($user = $req->fetch()){
        ?>
<div class="container_reviews">  
<div class="card text-center">
  <div class="card-header">
    <?=$user['user_rating']?>
    <i fa></i>
</div>
  <div class="card-body">
    <h5 class="card-title"><?=$user['user_name']?></h5>
    <p class="card-text"><?=$user['user_review']?></p>
  </div>
  <div class="card-footer text-body-secondary"><?=date('l jS, F Y h:i:s A', $user["datetime"])?></div>
</div>
</div> 

        <?php 
     }
    ?>

    <?php
require_once './templates/footer.php';
?>
