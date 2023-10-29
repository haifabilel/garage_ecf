<?php
require_once './espace_admin/connexion.php';
require_once 'head.php';
?>

<section>
<h2>Nos Services</h2>
<?php
  $req = $conn->query('SELECT * FROM services');
while($user = $req->fetch()) {
    ?>
    <div class="row align-items-center g-5 py-5">
      <div class=" col-sm-3 col-lg-4">
          <div class="card">
         <img class="card-img-top" src="./uploads/<?php echo $user['image']; ?>" alt="Card image cap">
         <div class="card-body">
          <h5 class="card-title"><?php echo $user['titre']; ?></h5>
          <p class="card-text"><?php echo $user['description']; ?></p>
        </div>
       </div>
    </div>
  </div>
 
  </div>
  </div>
</section>