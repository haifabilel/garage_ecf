<?php

require_once ('head_admin.php');


// if(isset($_POST['Update'])){
//     $id = $_GET['id'];
//     $titre = $_POST['titre'];
//     $description = $_POST['description'];
//     $image = $_FILES['image'];
//     $img_loc = $_FILES['image']['tmp_name'];
//     $img_name = $_FILES['image']['name'];
//     $img_des = "../uploads/".$img_name;
    

//         $query = "UPDATE services SET titre ='$titre', description ='$description', image =  '$image'
//         WHERE id = $id";
//         $statement = $conn->prepare($query);
//         $statement->execute();
//         header('location:fetch_service.php');
//     }
require_once ('connexion.php');
$id = $_GET['id'];
$req =$conn->query("SELECT * FROM services WHERE id = $id");
$row = $req-> fetch();


if(isset($_POST['Update'])){
  extract($_POST);
  if(isset($titre) && isset($description) && isset($image)){
    if($req){
      header('location:fetch_service.php');
    }

    $req =$conn->query("UPDATE services SET titre = $titre , description = $description, image = $ ");
  }
}
?>


<section>
  <div class="form-container">

  <form method="POST" >
        <h3 class="modal-title fs-5" id="exampleModalToggleLabel">Update service</h3>
 <div class="form-group">
     <input type="text" name="titre" value="<?php echo $row['titre']; ?>"  class="form-control"  placeholder="Titre de service" required><br>
 </div>
 <div class="form-group">
    <textarea type="text" class="form-control" name="description" value="<?php echo $row['description']; ?>"  placeholder="Description..." required></textarea><br>
  </div>
  <div class="form-group mb-3">
     <input type="file" name="image" value="<?php echo $row['image']; ?>" class="form-control">
  </div>
  <div class="modal-footer">
      <button type="submit" name="Update" class="btn btn-primary" >Update</button>
  </div>
 </form>
</div>
</section>