<?php

require_once ('head_admin.php');
require_once ('connexion.php');

//Recupérer l'id de l'url
$id = $_GET['id'];
$req =$conn->query("SELECT * FROM services WHERE id = $id");
$row = $req-> fetch();


if(isset($_POST['Update'])){
  extract($_POST);
  $titre = $_POST['titre'];
  $description = $_POST['description'];
  $new_image = $_FILES['image']['name'];
  $old_image = $_FILES['img'];
  if($new_image != ''){
    $update_image = $_FILES['image']['name'];
  }else{$update_image = $old_image;

  }
  if(file_exists("../uploads/". $_FILES['image']['name'])){
    $filename
  }
  if(isset($titre) && isset($description) && isset($image)){
    //Modifier information de la card service
    $req =$conn->query("UPDATE services SET titre = '$titre' , description = '$description', image = '$image' WHERE id = $id ");
    if($req){
      header('location:fetch_service.php');
    }

  }
}
?>


<section>
  <div class="form-container">

  <form method="POST" >
        <h3 class="modal-title fs-5" id="exampleModalToggleLabel">Update service</h3>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
 <div class="form-group">
     <input type="text" name="titre" value="<?php echo $row['titre']; ?>"  class="form-control"  placeholder="Titre de service" required><br>
 </div>
 <div class="form-group">
    <textarea type="text" name="description" value="<?php echo $row['description']; ?>"  class="form-control" placeholder="Description..." required></textarea><br>
  </div>
  <div class="form-group mb-3">
     <input type="file" name="image"  class="form-control">
     <input type="hidden" name="img" value="<?php echo $row['image']; ?>" >
  </div>
  <div class="modal-footer">
      <button type="submit" name="Update" class="btn btn-primary" >Update</button>
  </div>
 </form>
</div>
</section>