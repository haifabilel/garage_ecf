<?php
require_once '../espace_admin/connexion.php';

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  
</head>
   <!-- Loader page -->
    <div class="preloader">
      <span class="loader" > </span>
    </div>
    <div class="container_services p-3 ">
    <div class="content_services d-flex">
        <p>Véhicules</p>
    </div>
       <div class="content_button mt-2">
          <a href="../index.php" class="btn btn-primary">Accueil  <i class="bi bi-backspace"></i></a>
       </div>
    </div>
  <section>
  <div class="container">
    <div class="row">
        <div class="col-md-3 mt-4">                                
            <div class="list-group">
                <h3>Price</h3>
                <input type="hidden" id="hidden_minimum_price" value="0" />
                <input type="hidden" id="hidden_maximum_price" value="65000" />
                <p id="price_show">10 - 5000</p>
                <div id="price_range"></div>
                <div id="slider"></div>
            </div>                
        </div>
        
        <div class="col-md-9">
            <br />
           <div class="row filter_data">
        </div>
    </div>
    </div>
</div>
  <div class="row">
    <?php
  $req = $conn->query('SELECT * FROM voitures');
while($user = $req->fetch()) {
    ?>
    <div class="col-lg-4 d-flex">
    
          <div class="card">

         <img class="card-img-top" src="../uploads/<?php echo $user['image']; ?>" alt="Card image cap">
         <div class="card-body">
          <h5 class="card-title text-center"><?php echo $user['brand']; ?></h5>
          <p class="card-text">Prix: <?php echo $user['prix']; ?></p>
          <p class="card-text">kilométrage: <?php echo $user['kilométrage']; ?></p>
          <p class="card-text">Année: <?php echo $user['année']; ?></p>
          <a href="contact_car.php?id=<?=$user['id']?>" type="submit" class="btn btn-primary">Contacter</a>
          <a href="details_car.php?id=<?=$user['id']?>" type="submit" class="btn btn-primary mx-2">Détails</a>
        </div>
       
      </div>
     
      </div>
      <?php } ;?>
</section>
<script src="../js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script>
  $( function() {
    $( "#slider" ).slider();
  } );
 
</script>


<?php
require_once '../templates/footer.php';
?>