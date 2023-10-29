<?php
require_once ('connexion.php');
require_once ('head_admin.php');

$id = $_GET['id'];
$query = "SELECT * FROM services WHERE id = $id";
$data = $statement->fetch(PDO::FETCH_ASSOC);
?>


<section>
  <div class="form-container">
   <!-- <?php 
     if(isset($_GET['id'])){
       
        
        $statement = $conn->prepare($query);
        // $data = [':id' => $id];
        $data->execute($data);
       
      
     }
    ?> -->
  <form action="fetch_service.php" method="POST">
        <h3 class="modal-title fs-5" id="exampleModalToggleLabel">Update service</h3>
 <div class="form-group">
     <input type="text" name="titre" value="<?php $result->titre; ?>"  class="form-control"  placeholder="Titre de service" required><br>
 </div>
 <div class="form-group">
    <textarea class="form-control" name="description" value="<?php $result->description; ?>"  placeholder="Description..."required></textarea><br>
  </div>
  <div class="form-group mb-3">
     <input type="file" name="image" class="form-control">
  </div>
  <div class="modal-footer">
      <button type="submit" name="Update" class="btn btn-primary" >Update</button>
  </div>
 </form>
</div>
</section>