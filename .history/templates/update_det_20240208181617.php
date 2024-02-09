<?php
require_once ('head.php');
require_once ('../espace_admin/connexion.php');
 //Caster avec int
 if(isset($_))
 $id =(int)$_GET['id'];
 $req =$conn->prepare("SELECT * FROM details_voitures WHERE id =:id");
 //Sécuriser contre les injections sql
 $req->bindValue(':id', $id, PDO::PARAM_INT);
 $req->execute();
 $row = $req->fetch(PDO::FETCH_ASSOC);


if(isset($_POST['Update'])){
  extract($_POST);
  if(isset($titre) && isset($description) && isset($image)){
    //Modifier information de la card service
    $req =$conn->query("UPDATE details_voitures SET caracteristique = '$caracteristique' , liste_equipements = '$liste_equipements',
    options_installes = '$options_installes' ,image1 = '$image1',image2 = '$image2',image3 = '$image3' WHERE id = $id ");
    if($req){
      header('location:details_car.php');
    }

  }
}
?>
    <form  method="POST" enctype="multipart/form-data" >
       <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title fs-5" id="exampleModalToggleLabel">update détails</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
            <div class="modal-body">
            <div class="form-group">
              <input type="text" name="caracteristique" class="form-control"  placeholder="carectéristique" required><br>
             </div>
                <div class="form-group">
                    <input type="text" name="liste_equipements" class="form-control"  placeholder="liste des équipements" required><br>
                </div>
                <div class="form-group">
                    <input type="text" name="options_installes" class="form-control"  placeholder="options installés" required><br>
                </div>
                <div class="form-group mb-3">
                     <input type="file" name="image1" class="form-control" >
                </div>
                <div class="form-group mb-3">
                    <input type="file" name="image2" class="form-control" >
                </div>
                <div class="form-group mb-3">
                    <input type="file" name="image3" class="form-control" >
                </div>
                </div>
                <div class="modal-footer">
                <button type="submit" name="addDétails" class="btn btn-primary" >Valider</button>
            </div>
         </div>
       </form>

