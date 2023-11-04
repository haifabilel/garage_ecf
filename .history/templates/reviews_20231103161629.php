<?php
require_once '../espace_admin/connexion.php';
session_start();
if(isset($_POST["rating_data"]))
{

	$data = array(
		':user_name'		=>	$_POST["user_name"],
		':user_rating'		=>	$_POST["rating_data"],
		':user_review'		=>	$_POST["user_review"],
		':datetime'			=>	time()
	);

	$query = "INSERT INTO review_table (user_name, user_rating, user_review, datetime) 
	VALUES (:user_name, :user_rating, :user_review, :datetime)";
	$statement = $conn->prepare($query);
	$statement->execute($data);
	
};



?>
 
 <div class="container_services p-3 ">
    <div class="content_services d-flex">
        <p>Donner votre avis</p>
    </div>
       <div class="content_button mt-2">
          <a href="../index.php" class="btn btn-primary">Accueil  <i class="bi bi-backspace"></i></a>
       </div>
    </div>


<section>
  	<div class="container_reviews ">
	  <h3>Votre avis nous interesse</h3>
		<div class="card">
	      		<h4 class="text-center stars mt-2 mb-4">
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
                <form>
	        	<div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="submit" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
                </form>
				</div>
</div>
<!-- <a href="../espace_admin/espace_employé.php" class="btn btn-primary back_reviews mt-6">Back <i class="bi bi-backspace"></i></a> -->

</section>


</html>


<script src="../js/script.js"></script>

<?php require_once 'footer.php' ?>