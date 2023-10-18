<?php
require_once 'head.php';
?>
<section>
    <div class="container_reviews">
        <h3>Votre avis nous interesse</h3>
        <div class="card">
            <div class="card_header">Product</div>
            <div class="card_body">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <h4 class="text-warning mt-4 mb-4">
                            <b><span id="average-rating">0.0</span> / 5</b>
                        </h4>
                        <div class="mb-3">
                            <i class="fas fa-star star-light mr-1 main-star"></i>
                            <i class="fas fa-star star-light mr-1 main-star"></i>
                            <i class="fas fa-star star-light mr-1 main-star"></i>
                            <i class="fas fa-star star-light mr-1 main-star"></i>
                            <i class="fas fa-star star-light mr-1 main-star"></i>
                        </div>
                        <h4><span id="total_review">0</span> Review</h4>
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <div class="progress-label-left"><b>5</b><i class="fas fa-star text-warning"></i></div>
                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
                        <p>
                        <div class="progress-label-left"><b>5</b><i class="fas fa-star text-warning"></i></div>
                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
                    </div>
                    <div class="col-sm-4 text-center">
                        <h4 class="mt-4 mb-3">Ecrivez vos commentaires ici</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>