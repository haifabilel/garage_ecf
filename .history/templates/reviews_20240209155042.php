<?php
require_once '../espace_admin/connexion.php';
require_once 'head.php';


    if(isset($_POST["rating_data"])) {


        $data = array(
            ':user_name'		=> htmlspecialchars($_POST['user_name'], ENT_QUOTES),
            ':user_rating'		=>	$_POST["rating_data"],
            ':user_review'		=>	htmlspecialchars($_POST['user_review'], ENT_QUOTES),
            ':datetime'			=>	time()
        );

        $query = "INSERT INTO review_table (user_name, user_rating, user_review, datetime) 
	VALUES (:user_name, :user_rating, :user_review, :datetime)";

        $statement = $conn->prepare($query);
        $statement->execute($data);
        header('location:reviews.php');
       

    };

?>

<div class="container_header p-3 ">
    <div class="content_header d-flex">
        <p>Donner votre avis</p>
    </div>
       <div class="content_button mt-2">
          <a href="../index.php" class="btn btn-primary" id="Accueil_avis">Accueil  <i class="bi bi-backspace"></i></a>
       </div>
</div>
<section>
  	<div class="container_reviews">
	  <h3>Votre avis nous interesse</h3>
		<div class="card d-flex">
	      	<h4 class="text-center stars mt-2 mb-4">
				<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
				<i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
				<i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
				<i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
				<i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        </h4>
            <form method="POST" enctype="multipart/form-data">
	        	<div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Entrer votre nom complét" />
	        	</div><br>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control " placeholder="Votre avis"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="submit" name="submit" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
            </form>
		</div>
    </div>
</section>
<script src="../js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js" integrity="sha384-M6VI7oQFi28qtr5a9nD54tYP4FSc9oM5fZ+2p4uCiDB0/6Uq4PbcMZf+2by5YUVi" crossorigin="anonymous"></script>
</head>
<?php require_once 'footer.php' ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyJq63SIZYG9pgBxqW1wESgEp9MBoh8q" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<div id="carouselExample" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            $req = $conn->query('SELECT * FROM avis_clients WHERE user_rating > 2');
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

