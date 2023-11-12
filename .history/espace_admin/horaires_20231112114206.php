<?php
require_once 'connexion.php';
require_once ('head_admin.php');
//Ajouter service
if(isset($_POST['addService'])){
    $titre = $_POST['titre'];
    $desc = $_POST['description'];
    $image = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "../uploads/".$img_name;
    move_uploaded_file($img_loc,'../uploads/'.$img_name);

    $query = "INSERT INTO services (titre ,description, image)
    VALUES (:titre, :description, :image)";
    $statement = $conn->prepare($query);
  
    $data = [
        ':titre' => $titre,
        ':description' => $desc,
        ':image' => $img_des,
    ];
    $stat = $statement->execute($data);
    header('location:fetch_service.php');
};

?>
<div class="container_services p-3 ">
    <div class="content_services d-flex">
        <p>Horaires</p>
    </div>
       <div class="content_button mt-2">
          <button class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#ServiceAdmin">Ajouter services <i class="fa-solid fa-circle-plus" style="color: #ffffff;"></i> </button>
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
<div class="modal fade" id="ServiceAdmin" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
  <form  method="POST" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fs-5" id="exampleModalToggleLabel">Ajouter service</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-group">
      
       <input type="text" name="titre" class="form-control"  placeholder="Titre de service" required><br>
      </div>
      <div class="form-group">
    <textarea class="form-control" name="description" placeholder="Description..."required></textarea><br>
  </div>
  <div class="form-group mb-3">
  <input type="file" name="image" class="form-control">
</div>
      
      </div>
      <div class="modal-footer">
      <button type="submit" name="addService" class="btn btn-primary" >Valider</button>
      </div>
    </div>
     </form>
  </div>
</div>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>