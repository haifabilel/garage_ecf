<?php
require_once './espace_admin/connexion.php';
require_once 'head.php';
?>

<section class="service_section">
<h2>Nos Services</h2>

    <div class="row">
    <?php
  $req = $conn->query('SELECT * FROM services');
while($user = $req->fetch()) {
    ?>
    <div class="col">
    
          <div class="card">

         <img class="card-img-top" src="./uploads/<?php echo $user['image']; ?>" alt="Card image cap">
         <div class="card-body">
          <h5 class="card-title"><?php echo $user['titre']; ?></h5>
          <p class="card-text"><?php echo $user['description']; ?></p>
        </div>
       
      </div>
     
      </div>
    
 
</section>