<?php

require_once ('head_admin.php');
require_once ('connexion.php');

//Recupérer l'id de l'url
$id = $_GET['id'];
$req =$conn->query("SELECT * FROM services WHERE id = $id");
$row = $req-> fetch();


if(isset($_POST['Update'])){
  extract($_POST);
  if(isset($titre) && isset($description) && isset($image)){
    //Modifier information de la card service
    $req =$conn->query("UPDATE services SET titre = '$titre' , description = '$description', image = '$image_des' WHERE id = $id ");
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
 <div class="form-group">
     <input type="text" name="titre" value="<?php echo $row['titre']; ?>"  class="form-control"  placeholder="Titre de service" required><br>
 </div>
 <div class="form-group">
    <textarea type="text" class="form-control" name="description" value="<?php echo $row['titre']; ?>"  placeholder="Description..." required></textarea><br>
  </div>
  <div class="form-group mb-3">
     <input type="file" name="image" value="<?php echo $row['titre']; ?>" class="form-control">
     <input type="hidden">
  </div>
  <div class="modal-footer">
      <button type="submit" name="Update" class="btn btn-primary" >Update</button>
  </div>
 </form>
</div>
</section>