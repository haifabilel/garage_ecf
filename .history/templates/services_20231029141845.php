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
    <div class="swiper-container mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
          <div class="card">
         <img class="card-img-top" src="./uploads/<?php echo $user['image']; ?>" alt="Card image cap">
         <div class="card-body">
          <h5 class="card-title"><?php echo $user['titre']; ?></h5>
          <p class="card-text"><?php echo $user['description']; ?></p>
        </div>
       </div>
    </div>
    <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
 
 
  <?php } ;?>
  </div>
</section>
<script src=""></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>