<?php
require_once 'connexion.php';
require_once ('head_admin.php');

if(isset($_GET['id']) && is_numeric($_GET['id'])) {
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
            //Modifier information de la card service
            $req = $conn->query("UPDATE horaires SET ouverture= '$ouverture' , fermeture = '$fermeture' 
     WHERE id = $id ");
            if($req) {
                header('location:horaires.php');
            }

        }
    }
}
?>
<div class="container_services p-3 ">
    <div class="content_services d-flex">
        <p>Horaires</p>
    </div>
       <div class="content_button mt-2">
          <a href="admin_page.php" class="btn btn-primary">Back  <i class="bi bi-backspace"></i></a>
       </div>
    </div>
<section >
<?php
  
  $req = $conn->query('SELECT * FROM horaires');
  while($user = $req->fetch()){
     ?>
     <tr>
     <td><?=$user['jour']?>:</td>
     <td><?=$user['ouverture']?></td>
     <td><?=$user['fermeture']?> / </td>
     <td>
     <a class="btn btn-primary" href="?id=<?=$user['id']?>"  data-bs-toggle="modal" data-bs-target="#horairesUpdate"><i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i></a><br><br>
     </td>
     </tr>
   
     <?php 
  };
 ?>
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