<?php
require_once 'connexion.php';
require_once ('head_admin.php');

//Ajouter des Véhicules depuis l'espace admin
if(isset($_POST['addCar'])){
    $brand = $_POST['brand'];
    $prix = $_POST['prix'];
    $kilometrage = $_POST['kilometrage'];
    $annee = $_POST['annee'];
    $image = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "../uploads/".$img_name;
    move_uploaded_file($img_loc,'../uploads/'.$img_name);
    
    $query = "INSERT INTO voitures (brand, prix, kilometrage, annee, image)
     VALUES ('$brand','$prix','$kilometrage','$annee','$img_des')";
     $statement = $conn->prepare($query);
     $stat = $statement->execute();
    header('location:fetch_car.php');
};

?>

<div class="container_header p-3 ">
    <div class="content_header d-flex">
        <p>Véhicules</p>
    </div>
   <div class="content_button mt-2">
      <button class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#ajoutCar">Ajouter Véhicule <i class="fa-solid fa-circle-plus" style="color: #ffffff;"></i> </button>
      <a href="espace_employé.php" class="btn btn-primary">Back  <i class="bi bi-backspace"></i></a>
   </div>
</div>

     <!-- Afficher la liste des véhicules enregistrés dans ma bdd -->
<section class="fetch_car">
  <div class="container_card my-5">
    <h2>liste des véhicules</h2>
    <table class="blueTable table-responsive">
      <thead>
         <tr>
            <th>Image</th>
            <th>Brand</th>
            <th>Prix</th>
            <th>Kilométrage</th>
            <th>Année</th>
            <th>Action</th>
         </tr>
      </thead>
    <tbody>
    <!-- Parcourir la liste des véhicules -->
    <?php
  
     $req = $conn->query('SELECT * FROM voitures');
     while($user = $req->fetch()){
        ?>
        <tr>
            <td class="td_image img-fluid"><img src="../uploads/<?php echo $user['image']; ?>"  alt="image_car" class="image_car" ></td>
            <td><?=$user['brand']?></td>
            <td><?=$user['prix']?></td>
            <td><?=$user['kilometrage']?></td>
            <td><?=$user['annee']?></td>
            <td><?=$user['annee']?></td>
        </tr>
        <?php 
     };
    ?>
   </tbody>
  </table>
</section>
<!-- Modal ajout car-->
<div class="modal fade" id="ajoutCar" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog">
   <form  method="POST" enctype="multipart/form-data" >
     <div class="modal-content">
       <div class="modal-header">
         <h3 class="modal-title fs-5" id="exampleModalToggleLabel">Ajouter Véhicule</h3>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-group">
         <input type="text" name="brand" class="form-control"  placeholder="Brand" required><br>
      </div>
      <div class="form-group">
         <input type="text" name="prix" class="form-control"  placeholder="prix" required><br>
      </div>
      <div class="form-group">
         <input type="text" name="kilometrage" class="form-control"  placeholder="kilométrage" required><br>
      </div>
      <div class="form-group">
         <input type="text" name="annee" class="form-control"  placeholder="année de construction" required><br>
      </div>
      <div class="form-group mb-3">
         <input type="file" name="image" class="form-control" multiple="" >
      </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="addCar" class="btn btn-primary" >Valider</button>
      </div>
    </div>
   </form>
 </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>