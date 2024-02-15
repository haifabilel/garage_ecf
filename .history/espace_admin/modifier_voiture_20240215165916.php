<?php
require_once ('head_admin.php');
require_once ('connexion.php');
 //Caster avec int
 $id =(int)$_GET['id'];
 $req =$conn->prepare("SELECT * FROM voitures WHERE id =:id");
 //Sécuriser contre les injections sql
 $req->bindValue(':id', $id, PDO::PARAM_INT);
 $req->execute();
 $row = $req->fetch(PDO::FETCH_ASSOC);


if(isset($_POST['Update'])){
  extract($_POST);
  if(isset($brand) && isset($kilometrage) && isset($prix)&& isset($annee)&& isset($imege)){
    //Modifier information de la card service
    $req =$conn->query("UPDATE voitures SET brand = '$brand' , kilometrage = '$kilometrage',
     kilometrage = '$kilometrage', image = '$image' WHERE id = $id ");
    if($req){
      header('location:fetch_service.php');
    }

  }
}
?>
<section>

<div class="container_header p-3 d-flex">
    <a href="details_car.php" class="btn btn-primary">Back  <i class="bi bi-backspace"></i></a>
</div>
 <div class="update_content">
    <form method="POST" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="exampleModalToggleLabel">Update détails</h3>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" name="brand" class="form-control" placeholder="brand" required><br>
                </div>
                <div class="form-group">
                    <input type="text" name="prix" class="form-control" placeholder="prix" required><br>
                </div>
                <div class="form-group">
                    <input type="text" name="kilometrage" class="form-control" placeholder="kilométrage" required><br>
                </div>
                <div class="form-group mb-3">
                    <input type="file" name="annee" class="form-control" placeholder="année">
                </div>
                <div class="form-group mb-3">
                    <input type="file" name="image" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="Update" class="btn btn-primary" id="update_btn">Valider</button>
            </div>
        </div>
    </form>
  </div>