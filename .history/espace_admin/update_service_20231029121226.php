<?php
require_once ('connexion.php');
require_once ('head_admin.php');
session_start();

// if(isset($_GET['id'])){
//     $titre = $_POST['titre'];
//     $desc = $_POST['description'];
//     $image = $_FILES['image'];
//     $img_loc = $_FILES['image']['tmp_name'];
//     $img_name = $_FILES['image']['name'];
//     $img_des = "../uploads/".$img_name;
    
//     if(empty($titre) || empty($desc)  || empty($image)){
//         $errors[] = 'Veuillez remplir tous les champs';
//     }else{
//         $query = "UPDATE services SET titre ='$titre', description ='$desc', image =  '$image'
//         WHERE id = $id";
//         $statement = $conn->prepare($query);
//         header('location:fetch_service.php');
//     }
    

// };
$id = $_GET['id'];
$query = "SELECT * FROM services WHERE id = :id";
$statement = $conn->prepare($query);
$data = [':id' => $id];
$statement->execute($data);
$result = $statement->fetch(PDO::FETCH_OBJ);
?>


<section>
  <div class="form-container">

  <form method="POST" >
        <h3 class="modal-title fs-5" id="exampleModalToggleLabel">Update service</h3>
 <div class="form-group">
     <input type="text" name="titre" value="<?php $result->titre; ?>"  class="form-control"  placeholder="Titre de service" required><br>
 </div>
 <div class="form-group">
    <textarea class="form-control" value="<?php $result->description; ?>" name="description" placeholder="Description..."required></textarea><br>
  </div>
  <div class="form-group mb-3">
     <input type="file" name="image" class="form-control">
  </div>
  <div class="modal-footer">
      <button type="submit" name="Update" class="btn btn-primary" >Update</button>
  </div>
 </form>
</div>
</section>