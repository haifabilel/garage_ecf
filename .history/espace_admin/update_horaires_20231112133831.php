<?php
require_once 'connexion.php';
require_once ('head_admin.php');

if(isset($_GET['id']) and !empty($_GET['id'])) {
    $id = (int)$_GET['id'];

    $req = $conn->prepare("SELECT * FROM horaires WHERE id =:id");
    //Sécuriser contre les injections sql
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->execute();
    $row = $req->fetch(PDO::FETCH_ASSOC);
    //Update horaires
    if(isset($_POST['Update'])) {
        $ouverture = $_POST['ouverture'];
        $fermeture_ = $_POST['fermeture'];


        extract($_POST);
        if(isset($ouverture) && isset($fermeture)) {
            //Modification information des horaires
            $req = $conn->query("UPDATE horaires SET ouverture= '$ouverture' , fermeture = '$fermeture' 
     WHERE id = $id ");
            if($req) {
                header('location:horaires.php');
            }

        }
    }
}
?>

<!-- Modal ajout service-->
<div class="modal fade" id="horairesUpdate" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
  <form  method="POST" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fs-5" id="exampleModalToggleLabel">Update Horaires</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-group">
       <input type="text" name="ouverture" class="form-control"  placeholder="ouverture_matin" required><br>
      </div>

      <div class="form-group">
       <input type="text" name="fermeture" class="form-control"  placeholder="fermeture_soir" required><br>
      </div>
      </div>
      <div class="modal-footer">
      <button type="submit" name="Update" class="btn btn-primary" >Update</button>
      </div>
    </div>
     </form>
  </div>
</div>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>