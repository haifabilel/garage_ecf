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

</head>
<?php require_once 'footer.php' ?>





