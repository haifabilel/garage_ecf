<section class="section_avis">
<h2 class="mt-5">Vos avis</h2>
<?php
require_once ('connexion.php');
require_once ('head_admin.php');
?
<div id="carouselExample" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
    <?php
    $req = $conn->query('SELECT * FROM review_table WHERE user_rating > 2');
    $firstItem = true;
    while ($user = $req->fetch()) {
        ?>
        <div class="carousel-item <?php echo $firstItem ? 'active' : ''; ?>">
            <div class="card testimonial-item">
                <div class="card-header"><?=$user['user_rating']?>
                    <i class="fas fa-star avis"></i>
                </div>
                <h3><?=$user['user_name']?></h3>
                <p><?=$user['user_review']?></p>
                <div class="card-footer text-body-secondary"><?=date('l jS, F Y h:i:s A', $user["datetime"])?></div>
            </div>
        </div>
        <?php
        $firstItem = false;
    }
    ?>
</div>
<a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>
</section>


