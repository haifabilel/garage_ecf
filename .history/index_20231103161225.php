<?php
require_once './templates/services.php';

?>
<!DOCTYPE html>
<html lang="fr">
 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>garage</title>
        <meta name="description" content="Notre garage est parfaitement équipé, le Garage V.Parrot entretient vos véhicules et propose également des occasions toutes marques garanties. Il assure également le diagnostic et la réparation
         toutes marques de vos véhicules.">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <!--  carrousel -->
         <link
         rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
            <!-- Bootstrap icons CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css"> 
        <!-- font awesome cdn link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
          
            <!-- Bootstrap -->
            
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <!-- CSS Link -->
        <link rel="stylesheet" href="./css/style.css">
    </head>
<!-- ------fetch reviews----- -->
  <section>
<h2 class="mt-5">Vos avis</h2>
<?php
require_once ('./espace_admin/connexion.php');
     $req = $conn->query('SELECT * FROM review_table WHERE user_rating > 2');
     while($user = $req->fetch()){
        ?>
<div class="container-reviews">  
<div class="card text-center">
  <div class="card-header"><?=$user['user_rating']?>
    <i class="fas fa-star avis"></i>
</div>
  <div class="card-body">
    <h5 class="ca-title"><?=$user['user_name']?></h5>
    <p class="card-text"><?=$user['user_review']?></p>
  </div>
  <div class="card-footer text-body-secondary"><?=date('l jS, F Y h:i:s A', $user["datetime"])?></div>
</div>
</div> 

        <?php 
     }
    ?>
</section>
    <?php
require_once './templates/footer.php';
?>
