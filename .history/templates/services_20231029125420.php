<?php
require_once '../espace_admin/co'
require_once 'head.php';
?>
<section id="services" class="services pt-5">
    <h2>Nos Services</h2>
<div class="container-services">
<?php
  
  $req = $conn->query('SELECT * FROM services');
while($user = $req->fetch()) {
    ?>
<div class="row">
    <div class="col md-4 my-2 d-flex">
       <div class="card">
         <img class="card-img-top" src="../uploads/<?php echo $user['image']; ?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?php echo $user['titre']; ?></h5>
          <p class="card-text"><?php echo $user['description']; ?></p>
        </div>
       </div>
  </div>
  <!-- <div class="col md-4 my-2 d-flex">
       <div class="card" >
         <img class="card-img-top" src="./assets/images/service1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
       </div>
  </div>
  <div class="col md-4 my-2 d-flex">
       <div class="card" >
         <img class="card-img-top" src="./assets/images/service1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
       </div>
  </div>
</div>

<div class="row">
    <div class="col md-4 my-2 d-flex">
       <div class="card">
         <img class="card-img-top" src="./assets/images/service1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
       </div>
  </div>
  <div class="col md-4 my-2 d-flex">
       <div class="card">
         <img class="card-img-top" src="./assets/images/service1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
       </div>
  </div>
  <div class="col md-4 my-2 d-flex">
       <div class="card">
         <img class="card-img-top" src="./assets/images/service1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
       </div>
  </div>
</div> -->
</div>
<?php } ;?>
</section>