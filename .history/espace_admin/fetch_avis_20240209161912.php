<section class="section_avis">
<h2 class="mt-5">Vos avis</h2>
<?php
require_once ('connexion.php');
require_once ('head_admin.php');
?>
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
                <div class="card_body">
                <h4><?=$user['user_name']?></h4>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js" integrity="sha384-M6VI7oQFi28qtr5a9nD54tYP4FSc9oM5fZ+2p4uCiDB0/6Uq4PbcMZf+2by5YUVi" crossorigin="anonymous"></script>

