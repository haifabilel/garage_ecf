<?php
require_once 'connexion.php';
require_once ('head_admin.php');
//Update horaires
if(isset($_POST['Update'])){
    $ouverture_matin = $_POST['ouverture_matin'];
    $fermeture_matin = $_POST['fermeture_matin'];
    $ouverture_apres_midi = $_POST['ouverture_apres_midi'];
    $fermeture_apres_midi = $_POST['fermeture_apres_midi'];
   



  extract($_POST);
  if(isset($titre) && isset($description) && isset($image)){
    //Modifier information de la card service
    $req =$conn->query("UPDATE services SET titre = '$titre' , description = '$description', image = '$image' WHERE id = $id ");
    if($req){
      header('location:fetch_service.php');
    }

  }
}
};

?>
<div class="container_services p-3 ">
    <div class="content_services d-flex">
        <p>Horaires</p>
    </div>
       <div class="content_button mt-2">
          <button class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#horairesUpdate">Update horaires<i class="fa-solid fa-circle-plus" style="color: #ffffff;"></i> </button>
          <a href="admin_page.php" class="btn btn-primary">Back  <i class="bi bi-backspace"></i></a>
       </div>
    </div>
<section >
<?php
$query = $conn->query("SELECT * FROM horaires");
$horaires = $query->fetchAll(PDO::FETCH_ASSOC);
?>
    <table class="horaires"  style="margin-left:-30%;">
        <tr>
            <th>Jour</th>
            <th>Ouverture </th>
            <th>Fermeture </th>
            <th>Ouverture </th>
            <th>Fermeture </th>
        </tr>
        <?php foreach ($horaires as $horaire): ?>
            <tr>
                <td><span><?= $horaire['jour'] ?>: </td>
                <td><?= $horaire['ouverture_matin'] ?></td>
                <td><?= $horaire['fermeture_matin'] ?> /</td>
                <td><?= $horaire['ouverture_apres_midi'] ?></td>
                <td><?= $horaire['fermeture_apres_midi'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</section>


  


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
       <input type="text" name="ouverture_matin" class="form-control"  placeholder="ouverture_matin" required><br>
      </div>

      <div class="form-group">
       <input type="text" name="fermeture_matin" class="form-control"  placeholder="fermeture_matin" required><br>
      </div>
      <div class="form-group">
       <input type="text" name="ouverture_apres_midi" class="form-control"  placeholder="ouverture_apres_midi" required><br>
      </div>
      <div class="form-group">
       <input type="text" name="fermeture_apres_midi" class="form-control"  placeholder="fermeture_apres_midi" required><br>
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