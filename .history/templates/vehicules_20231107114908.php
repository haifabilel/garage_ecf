<?php
require_once '../espace_admin/connexion.php';
require_once 'head.php';
?>

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
   
  <!-- <div class="row">
    <?php
if(isset($_POST["action"])) {
    $req = $conn->query('SELECT * FROM voitures');
    if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])) {
        $query = $conn->query("SELECT * FROM voitures WHERE prix BETWEEN '" . $_POST["minimum_price"] . "' AND '" . $_POST["maximum_price"] . "'");
    }
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
}; 
    ?> -->
    if(isset($_POST["action"]))
{
    $query = $conn->query("SELECT * FROM product");
    if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
    {
        $query = $conn->query("SELECT * FROM product WHERE price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'");
    }
    $total_row = mysqli_num_rows($query);
    $output = '';
    if($total_row > 0){
        while ($row = $query ->fetch_object()) {
            $output .= '
            <div class="col-sm-4 col-lg-3 col-md-3">
                <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:320px;">
                    <img src="images/'. $row->image .'" alt="" class="img-responsive" >
                    <p align="center"><strong><a href="#">'. $row->name .'</a></strong></p>
                    <h4 style="text-align:center;" class="text-danger" >'. $row->price .'</h4>
                </div>
            </div>';
        }
    }else{
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}
?>
</section>
<script src="../js/script.js"></script>





<?php
require_once '../templates/footer.php';
?>


