<?php
require_once 'head.php';
require_once '../espace_admin/connexion.php';

if(isset($_POST['addDétails'])){
  $caractéristique = $_POST['caractéristique'];
  $liste_équipements = $_POST['liste_équipements'];
  $options_installés = $_POST['options_installés'];
  // $image = $_FILES['image'];
  $img_loc1 = $_FILES['image1']['tmp_name'];
  $img_name1 = $_FILES['image1']['name'];

  $img_loc2 = $_FILES['image2']['tmp_name'];
  $img_name2 = $_FILES['image2']['name'];

  $img_loc3 = $_FILES['image3']['tmp_name'];
  $img_name3 = $_FILES['image3']['name'];

  $img_des1 = "../uploads/".$img_name1;
  $img_des2 = "../uploads/".$img_name2;
  $img_des3 = "../uploads/".$img_name3;
 
  
  $images = implode(' ',$data);
    move_uploaded_file($img_loc1, $img_des.$img_name1);
    move_uploaded_file($img_loc2, $img_des.$img_name2);
    move_uploaded_file($img_loc3, $img_des.$img_name3);
   

 

  

  $query = "INSERT INTO details_voitures (caractéristique, liste_équipements, options_installés, image1, image2, image3)
   VALUES ('$caractéristique','$liste_équipements','$options_installés','$img_des','$img_des','$img_des')";
   $statement = $conn->prepare($query);
   
   $stat = $statement->execute();
  header('location:details_car.php');
};




?>
<div class="container_services p-3 ">
    <div class="content_services d-flex">
        <p>Véhicules</p>
    </div>
       <div class="content_button mt-2">
          <a href="vehicules.php" class="btn btn-primary mx-2">Back  <i class="bi bi-backspace"></i></a>
          <a href="vehicules.php" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ajoutDétails">Ajouter détails <i class="fa-solid fa-circle-plus" style="color: #ffffff;"></i></a>
       </div>
    </div>
<section>
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <?php 
  $req =$conn->query("SELECT * FROM details_voitures");
  $user= $req-> fetch();
     ?>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../uploads/<?php echo $user['image1']; ?>" class="d-block w-100" alt="image1">
    </div>
    <div class="carousel-item">
      <img  src="./uploads/<?php echo $user['image2']; ?>" class="d-block w-100" alt="image2">
    </div>
    <div class="carousel-item">
      <img src="../uploads/<?php echo $user['image3']; ?>" class="d-block w-100" alt="image3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="table_car">
<table class="blueTable">
<thead>
<tr>
<th>Tableau de caractéristiques</th>
<th>Liste des équipements</th>
<th>Options installés</th>

</tr>
</thead>
<tbody>
<tr>
<td><?=$user['caractéristique']?></td>
<td><?=$user['liste_équipements']?></td>
<td><?=$user['options_installés']?></td>
</tr>
</tbody>
</table>
</div>
</section>


<!-- Modal ajout détails car-->
<div class="modal fade" id="ajoutDétails" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
  <form  method="POST" enctype="multipart/form-data" >
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fs-5" id="exampleModalToggleLabel">Ajouter détails</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-group">
         <input type="text" name="caractéristique" class="form-control"  placeholder="carectéristique" required><br>
      </div>
      <div class="form-group">
         <input type="text" name="liste_équipements" class="form-control"  placeholder="liste des équipements" required><br>
      </div>
      <div class="form-group">
         <input type="text" name="options_installés" class="form-control"  placeholder="options installés" required><br>
      </div>
      <div class="form-group mb-3">
         <input type="file" name="image1" class="form-control" >
      </div>
      <div class="form-group mb-3">
         <input type="file" name="image2" class="form-control" >
      </div>
      <div class="form-group mb-3">
         <input type="file" name="image3" class="form-control" >
      </div>

      
      </div>
      <div class="modal-footer">
      <button type="submit" name="addDétails" class="btn btn-primary" >Valider</button>
      </div>
    </div>
     </form>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>