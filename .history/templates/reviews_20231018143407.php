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
                            <div class="progress-label-left"><b>5</b><i class="fas fa-star text-primary"></i></div>
                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
                        <p>
                        <div class="progress-label-left"><b>4</b><i class="fas fa-star text-primary"></i></div>
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>
                        </p>
                        <p>
                        <div class="progress-label-left"><b>3</b><i class="fas fa-star text-primary"></i></div>
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>
                        </p>
                        <p>
                        <div class="progress-label-left"><b>2</b><i class="fas fa-star text-primary"></i></div>
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>
                        </p>
                        <p>
                        <div class="progress-label-left"><b>1</b><i class="fas fa-star text-primary"></i></div>
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>
                        </p>
                    </div>
                    <div class="col-sm-4 text-center">
                        <h4 class="mt-4 mb-3">Ecrivez vos commentaires ici</h4>
                       <button type="button" name="add_review" id="add_review" class="btn btn-primary" data-bs-toggle=modal>Ajouter Avis</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5" id="review_content"></div>
    </div>
</section>
<!------------------------- Modal -------------------------->
<div class="modal" tabindex="-1" role="dialog" id="">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>