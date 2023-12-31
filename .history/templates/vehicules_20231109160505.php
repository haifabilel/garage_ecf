<?php
require_once '../espace_admin/connexion.php';
require_once 'head.php';

?>

   <!-- Loader page -->
    <!-- <div class="preloader">
      <span class="loader" > </span>
    </div> -->
    <div class="container_services p-3 ">
    <div class="content_services d-flex">
        <p>Véhicules</p>
    </div>
       <div class="content_button mt-2">
          <a href="../index.php" class="btn btn-primary">Accueil  <i class="bi bi-backspace"></i></a>
       </div>
    </div>
    <?php require_once 'filtre_car.php' ?>
  <section>
    
  <div class="row">
    <?php
 
if(isset($_POST["action"])) {
  if (
    isset($_POST["minimum_price"], $_POST["maximum_price"]) &&
    !empty($_POST["minimum_price"]) &&
    !empty($_POST["maximum_price"])
) {
    $query .= " WHERE prix BETWEEN '" . $_POST["minimum_price"] . "' AND '" . $_POST["maximum_price"] . "'";
}
if (
    isset($_POST["minimum_kilometrage"], $_POST["maximum_kilometrage"]) &&
    !empty($_POST["minimum_kilometrage"]) &&
    !empty($_POST["maximum_kilometrage"])
) {
    if (strpos($query, 'WHERE') !== false) {
        $query .= " AND";
    } else {
        $query .= " WHERE";
    }
    $query .= " kilométrage BETWEEN '" . $_POST["minimum_kilometrage"] . "' AND '" . $_POST["maximum_kilometrage"] . "'";
}
if (
    isset($_POST["minimum_année"], $_POST["maximum_année"]) &&
    !empty($_POST["minimum_année"]) &&
    !empty($_POST["maximum_année"])
) {
    if (strpos($query, 'WHERE') !== false) {
        $query .= " AND";
    } else {
        $query .= " WHERE";
    }
    $query .= " année BETWEEN '" . $_POST["minimum_année"] . "' AND '" . $_POST["maximum_année"] . "'";
}


    $output = '';
    if($query->rowCount() > 0) {
        while ($user = $query ->fetch()) {
            $output = '';
            ?>
    
    <div class="col-lg-4 d-flex">

          <div class="card">

         <img class="card-img-top img-fluid" src="../uploads/<?php echo $user['image']; ?>" alt="Card image cap">
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
      <?php  }
    } else {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
} ?>
</section>
<script src="../js/script.js"></script>
<script src="../js/filter.js"></script>



