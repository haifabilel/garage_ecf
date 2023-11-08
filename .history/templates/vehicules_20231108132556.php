
<?php
require_once '../espace_admin/connexion.php';
require_once 'head.php';
require_once 'filtre_car.php'
if(isset($_POST["action"]))
{
    $query = $conn->query("SELECT * FROM voitures");
    if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
    {
        $query = $conn->query("SELECT * FROM voitures WHERE prix BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'");
    }
    
    $output = '';
    if($query->rowCount() > 0){
        while ($user = $query->fetch()) {
          $output = '';
            ?>
              <div class="container_services p-3 ">
  
           <div class="row">
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
        }else{
            $output = '<h3>No Data Found</h3>';
        }
        echo $output;
    } ?>
      
