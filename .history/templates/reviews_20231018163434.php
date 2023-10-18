<?php
// require_once 'head.php';
?>
<!DOCTYPE html>
<html lang="fr">
 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>garage</title>
        <meta name="description" content="Notre garage est parfaitement équipé, le Garage V.Parrot entretient vos véhicules et propose également des occasions toutes marques garanties. Il assure également le diagnostic et la réparation
         toutes marques de vos véhicules.">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <!--  carrousel -->
         <link href="https://gosnippets.com/full-screen/bootstrap-carousel-with-cards-in-3-columns" rel="canonical">
            <!-- Bootstrap icons CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css"> 
        <!-- font awesome cdn link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
          
            <!-- Bootstrap -->
            
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <!-- CSS Link -->
        <link rel="stylesheet" href="../css/style.css">
    </head>
    
<section>
    <div class="container_reviews">
        <h3>Votre avis nous interesse</h3>
        <div class="card">
            <div class="card_header"></div>
            <div class="card_body">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <h4 class="text-warning mt-4 mb-4">
                            <b><span id="average-rating">0.0</span> / 5</b>
                        </h4>
                        <div class="mb-3">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
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
                       <button type="button" name="add_review" class="btn btn-primary" id="add_review" data-bs-toggle="modal" data-bs-target="#review_modal">Ajouter Avis</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5" id="review_content"></div>
    </div>
</section>
<!------------------------- Modal -------------------------->
 <div class="modal" id="review_modal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Creer un commentaire</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <h4 class="text-center mt-2 mb-4">
            <i class="fa-regular fa-star" submit_star mr-1 id="submit_star_1" data-rating="1"></i>
            <i class="fa-regular fa-star" submit_star mr-1 id="submit_star_2" data-rating="2"></i>
            <i class="fa-regular fa-star" submit_star mr-1 id="submit_star_3" data-rating="3"></i>
            <i class="fa-regular fa-star" submit_star mr-1 id="submit_star_4" data-rating="4"></i>
            <i class="fa-regular fa-star" submit_star mr-1 id="submit_star_5" data-rating="5"></i>
       </h4>
       <div class="form-group">
           <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter your name">
        </div><br>
        <div class="form-group">
           <textarea name="user_review" id="user_review" class="form-control" placeholder="Enter your review" ></textarea>
        </div>
        <div class="form-group text-center mt-4">
            <button type="button" class="btn btn-primary" id="save_review">Valider</button>
        </div>
      </div>
    </div>
  </div>
</div>
</section>


<script></script>
<!-- <script src="../js/script.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>