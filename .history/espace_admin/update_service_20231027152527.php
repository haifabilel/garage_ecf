<?php
require_once ('connexion.php');
require_once ('head_admin.php');
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
    header('location:fetch_service.php');
    $data = [
        ':titre' => $titre,
        ':description' => $desc,
        ':image' => $img_des,
    ];
    $stat = $statement->execute($data);
};
?>


<section>
  <div class="form-container">
  <form method="POST" enctype="multipart/form-data">
        <h3 class="modal-title fs-5" id="exampleModalToggleLabel">Update service</h3>
 <div class="form-group">
     <input type="text" name="titre" value="<?php echo $data['titre'] ?>" class="form-control"  placeholder="Titre de service" required><br>
 </div>
 <div class="form-group">
    <textarea class="form-control" name="description" value="<?php echo $data['description'] ?>" placeholder="Description..."required></textarea><br>
  </div>
  <div class="form-group mb-3">
     <input type="file" name="image" value="<?php echo $data['image'] ?>" class="form-control">
  </div>
  <div class="modal-footer">
      <button type="submit" name="addService" class="btn btn-primary" >Update</button>
  </div>
 </form>
</div>
</section>