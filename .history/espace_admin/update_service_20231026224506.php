<?php
require_once ('connexion.php');
require_once ('head_admin.php');
session_start();

?>

<section>

  <div class="form-container">
  <form method="POST" enctype="multipart/form-data">
        <h3 class="modal-title fs-5" id="exampleModalToggleLabel">Update service</h3>
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
      <button type="submit" name="addService" class="btn btn-primary" >Submit</button>
      </div>
    </div>
     </form>
</div>

</section>