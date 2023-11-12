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
        $ouverture = $_POST['apres_midi'];
        $fermeture_ = $_POST['apres_midi'];


        extract($_POST);
        if(isset($matin) && isset($apres_midi)) {
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


<div class="form-container">
    <form  method="POST">
      <div class="form-group">
       <input type="text" name="matin" class="form-control"  placeholder="matin" required><br>
      </div>

      <div class="form-group">
       <input type="text" name="apres_midi" class="form-control"  placeholder="aprés_midi" required><br>
      </div>
      
      <div class="form_footer">
      <button type="submit" name="Update" class="btn btn-primary" >Update</button>
      </div>
     </form>
  </div>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>