<?php
require_once '../espace_admin/connexion.php';
require_once 'head.php';
if(isset($_POST["action"])) {
  $req = $conn->query('SELECT * FROM voitures');
  if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])) {
      $query = $conn->query("SELECT * FROM voitures WHERE prix BETWEEN '" . $_POST["minimum_price"] . "' AND '" . $_POST["maximum_price"] . "'");
  }
?>
}};
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
  <div class="row">
    <?php
  
    if($req->rowCount() > 0) {
        while($user = $req->fetch()) {
            ?>
    <?php require_once 'filtre_car.php' ?>
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
      <?php
        }
    } else {
        echo 'not found';
    }
; 
    ?>
</section>
<script src="../js/script.js"></script>





<?php
require_once '../templates/footer.php';
?>


