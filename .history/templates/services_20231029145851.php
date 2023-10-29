<?php
require_once './espace_admin/connexion.php';
require_once 'head.php';
?>

<section class="service_section">
<h2>Nos Services</h2>

    <div class="row">
      <div class="col col-lg-6">
    
          <div class="card">
          <?php
  $req = $conn->query('SELECT * FROM services');
while($user = $req->fetch()) {
    ?>
         <img class="card-img-top" src="./uploads/<?php echo $user['image']; ?>" alt="Card image cap">
         <div class="card-body">
          <h5 class="card-title"><?php echo $user['titre']; ?></h5>
          <p class="card-text"><?php echo $user['description']; ?></p>
        </div>
        <?php } ;?>
      </div>
      </div>

 
</section>