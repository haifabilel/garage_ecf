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
  <div class="card-header"><?=$user['user_rating']?> <h4 class="text-center stars mt-2 mb-4">
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4></div>
  <div class="card-body">
    <h5 class="card-title"><?=$user['user_name']?></h5>
    <p class="card-text"><?=$user['user_review']?></p>
  </div>
  <div class="card-footer text-body-secondary"><?=date('l jS, F Y h:i:s A', $user["datetime"])?></div>
</div>
        <?php 
     }
    ?>
    <?php
require_once './templates/footer.php';
?>
