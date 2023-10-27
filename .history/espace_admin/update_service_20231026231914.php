<?php
require_once ('connexion.php');
require_once ('head_admin.php');
session_start();
$id =$_GET['id'];
    $record = $conn->prepare('SELECT * FROM services WHERE id = $id');
     $data =$record->fetch();
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
     <input type="file" name="image" class="form-control">
  </div>
  <div class="modal-footer">
      <button type="submit" name="addService" class="btn btn-primary" >Submit</button>
  </div>
 </form>
</div>
</section>