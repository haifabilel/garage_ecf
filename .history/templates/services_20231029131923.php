<?php
require_once './espace_admin/connexion.php';
require_once 'head.php';
?>
<section id="services" class="services pt-5">
    <h2>Nos Services</h2>
    <?php
  
  $req = $conn->query('SELECT * FROM services');
while($user = $req->fetch()) {
    ?>
<div class="container-services">
       <div class="card">
         <img class="card-img-top" src="./uploads/<?php echo $user['image']; ?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?php echo $user['titre']; ?></h5>
          <p class="card-text"><?php echo $user['description']; ?></p>
        </div>
       </div>
<?php } ;?>
</section>
<section>
  
</section>