<?php
require_once '../espace_admin/connexion.php';

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
         <script src="jquery-3.6.4.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
         <!--  carrousel -->
         <link href="https://gosnippets.com/full-screen/bootstrap-carousel-with-cards-in-3-columns" rel="canonical">
            <!-- Bootstrap icons CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css"> 
        <!-- font awesome cdn link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
            <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <!-- CSS Link -->
        <link rel="stylesheet" href="../css/style.css">
    </head>
   <section>
    .preloader
   <div class="wrapper js-filter">
    <div class="row">
        <div class="col-md-3 js-filter-form">
    <div class="prix">
    <h3>Prix</h3>
    <p>Utiluser slider ou entrer min max prix</p>
    <div class="field">
        <span>Min</span>
        <input type="number" class="input-min" value="1500">
    </div>
    <br>
    <div class="field">
        <span>Max</span>
        <input type="number" class="input-max" value="150000">
    </div>
    <br>
    <div class="slider">
        <div class="progress"></div>
    </div>
    <div class="range-input">
        <input type="range" class="range-min" min="0" max="10000" value="1500">
        <input type="range" class="range-max" min="0" max="10000" value="150000">
    </div>
    <br>
    </div>
    <br>
<div class="kilométrage">
    <h3>kilométrage</h3>
    <p>Utiluser slider ou entrer min max prix</p>
    <div class="field">
        <span>Min</span>
        <input type="number" class="input-min" value="1500">
    </div>
    <br>
    <div class="field">
        <span>Max</span>
        <input type="number" class="input-max" value="150000">
    </div>
    <br>
    <div class="slider">
        <div class="progress"></div>
    </div>
    <div class="range-input">
        <input type="range" class="range-min" min="0" max="10000" value="1500">
        <input type="range" class="range-max" min="0" max="10000" value="150000">
    </div>
    </div>
    <br>
  
    <div class="Années">
    <h3>Années</h3>
    <p>Utiluser slider ou entrer min max prix</p>
    <div class="field">
        <span>Min</span>
        <input type="number" class="input-min" value="1500">
    </div>
    <br>
    <div class="field">
        <span>Max</span>
        <input type="number" class="input-max" value="150000">
    </div>
    <br>
    <div class="slider">
        <div class="progress"></div>
    </div>
    <div class="range-input">
        <input type="range" class="range-min" min="0" max="10000" value="1500">
        <input type="range" class="range-max" min="0" max="10000" value="150000">
    </div>
    </div>
    <br>
   </div>
  
   <div class="col-md-9 d-flex js-filter-content">
   <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="../assets/images//car-604019_640.jpg" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Brand:PEUGEOT</h5>
      <p class="card-text">Prix:27000</p>
      <p class="card-text">Anné:2014</p>
      <p class="card-text">Kilométrage:115000</p>
    </div>
    <button class="btn btn-primary">Détail</button><br>
    <button type="submit" class="btn btn-primary">Contact</button>
  </div>
  <div class="card">
    <img class="card-img-top" src="../assets/images//car-604019_640.jpg" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Brand:TESLA</h5>
      <p class="card-text">Prix:47000</p>
      <p class="card-text">Anné:2140</p>
      <p class="card-text">Kilométrage:110000</p>
    </div>
    <button class="btn btn-primary">Détail</button><br>
    <button type="submit" class="btn btn-primary">Contact</button>
  </div>
  <div class="card">
    <img class="card-img-top" src="../assets/images//car-604019_640.jpg" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Brand:FORD</h5>
      <p class="card-text">Prix:35000</p>
      <p class="card-text">Anné:2015</p>
      <p class="card-text">Kilométrage:187000</p>
    </div>
    <button class="btn btn-primary">Détail</button><br>
    <button type="submit" class="btn btn-primary">Contact</button>
  </div>
</div>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="../assets/images//car-604019_640.jpg" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Brand:BMW</h5>
      <p class="card-text">Prix:55000</p>
      <p class="card-text">Anné2016:</p>
      <p class="card-text">Kilométrage:214000</p>
    </div>
    <button class="btn btn-primary">Détail</button><br>
    <button type="submit" class="btn btn-primary">Contact</button>
  </div>
  <div class="card">
    <img class="card-img-top" src="../assets/images//car-604019_640.jpg" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Brand:AUDI</h5>
      <p class="card-text">Prix:36500</p>
      <p class="card-text">Anné:2015</p>
      <p class="card-text">Kilométrage:125000</p>
    </div>
    <button class="btn btn-primary">Détail</button><br>
    <button type="submit" class="btn btn-primary">Contact</button>
  </div>
  <div class="card">
    <img class="card-img-top" src="../assets/images//car-604019_640.jpg" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Brand:MERCRDES</h5>
      <p class="card-text">Prix:65000</p>
      <p class="card-text">Anné:217</p>
      <p class="card-text">Kilométrage:80000</p>
    </div>
    <button class="btn btn-primary">Détail</button><br>
    <button type="submit" class="btn btn-primary">Contact</button>
  </div>
  
  </div>
</div>
   </div>
</div>
</section>
<script src="../js/script.js"></script>





<?php
require_once '../templates/footer.php';
?>