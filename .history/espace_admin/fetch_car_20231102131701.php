<?php
require_once 'connexion.php';
require_once ('head_admin.php');

//Ajouter Véhicule
// if(isset($_POST['addCar']) && isset($_FILES['image'])){
//     $brand = $_POST['brand'];
//     $prix = $_POST['prix'];
//     $kilométrage = $_POST['kilométrage'];
//     $année = $_POST['année'];
//     $image = $_FILES['image'];
//     $img_loc = $_FILES['image']['tmp_name'];
//     $img_name = $_FILES['image']['name'];
//     $img_des = "../uploads/".$img_name;
//     move_uploaded_file($img_loc,'../uploads/'.$img_name);

//     $query = "INSERT INTO voitures ('$brand', '$prix', '$kilométrage', '$année', '$img_des')";
//     // VALUES (:brand, :prix, :kilométrage, :année, :image)";
//     $statement = $conn->prepare($query);
  
//     // $data = [
//     //     ':brand' => $brand,
//     //     ':prix' => $prix,
//     //     ':kilométrage' => $kilométrage,
//     //     ':année' => $année,
//     //     ':image' => $img_des,
//     // ];
//     $stat = $statement->execute();
//     header('location:fetch_car.php');
// };
if(isset($_POST['addCar']) && ){
    $brand = $_POST['brand'];
    $prix = $_POST['prix'];
    $kilométrage = $_POST['kilométrage'];
    $année = $_POST['année'];
    $totalFiles = count($_FILES['image']['name']);
    $filesArray = array();

    for($i = 0; $i <  $totalFiles; $i++){
        $imageName = $_FILES['image']['name']['$i'];
        $tmpName = $_FILES['image']['tmp_name']['$i'];

        $imageExtension = explode('.',$imageName);
        $imageExtension = strtolower(end($imageExtension));
        $newImageName = uniqid() . '.' . $imageExtension;
        move_uploaded_file($tmpName, '../uploads/'. $newImageName);
        $filesArray[]  = $newImageName;
    }
    $filesArray = json_encode($filesArray);
    $query = "INSERT INTO voitures ('$brand', '$prix', '$kilométrage', '$année','$filesArray')";
    $statement = $conn->prepare($query);
}
?>

<div class="container_services p-3 ">
    <div class="content_services d-flex">
        <p>Véhicules</p>
    </div>
       <div class="content_button mt-2">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ajoutCar">Ajouter Véhicule <i class="fa-solid fa-circle-plus" style="color: #ffffff;"></i> </button>
          <a href="espace_employé.php" class="btn btn-primary">Back  <i class="bi bi-backspace"></i></a>
       </div>
    </div>

     <!-- Afficher la liste des véhicules enregistrés dans ma bdd -->
  <div class="container_card my-5">
  <h2>liste des véhicules</h2>
  
 <table class="blueTable">
<thead>
<tr>
<th>Image</th>
<th>Brand</th>
<th>Prix</th>
<th>Kilométrage</th>
<th>Année</th>
</tr>
</thead>
<tbody>
    <!-- Parcourir la liste des véhicules -->
    <?php
  
     $req = $conn->query('SELECT * FROM voitures');
     while($user = $req->fetch()){
        ?>
        <tr>
        <td><img src="../uploads/<?php echo $user['image']; ?>" alt="image_car" style="height:150px; width:250px;" ></td>
        <td><?=$user['Brand']?></td>
        <td><?=$user['Prix']?></td>
        <td><?=$user['kilométrage']?></td>
        <td><?=$user['année']?></td>
        <td>
        </tr>
      
        <?php 
     };
    ?>
</tbody>
</table>

<!-- Modal ajout car-->
<div class="modal fade" id="ajoutCar" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
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
         <input type="number" name="prix" class="form-control"  placeholder="prix" required><br>
      </div>
      <div class="form-group">
         <input type="number" name="kilométrage" class="form-control"  placeholder="kilométrage" required><br>
      </div>
      <div class="form-group">
         <input type="number" name="année" class="form-control"  placeholder="année de construction" required><br>
      </div>
      <div class="form-group mb-3">
         <input type="file" name="image" class="form-control">
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