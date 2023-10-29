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
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm8 col-lg-6">
         <div class="col-lg-6">
          <div class="card">
         <img class="card-img-top" src="./uploads/<?php echo $user['image']; ?>" alt="Card image cap">
         <div class="card-body">
          <h5 class="card-title"><?php echo $user['titre']; ?></h5>
          <p class="card-text"><?php echo $user['description']; ?></p>
        </div>
       </div>
    </div>
  </div>
  <?php } ;?>
  </div>
  </div>
  </div>
</section>