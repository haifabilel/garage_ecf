<?php
require_once 'head.php';
require_once '../espace_admin/connexion.php';

if(isset($_POST['addDétails'])){
  $caracteristique = $_POST['caracteristique'];
  $liste_equipements = $_POST['liste_equipements'];
  $options_installes = $_POST['options_installes'];
  $img_loc1 = $_FILES['image1']['tmp_name'];
  $img_name1 = $_FILES['image1']['name'];

  $img_loc2 = $_FILES['image2']['tmp_name'];
  $img_name2 = $_FILES['image2']['name'];

  $img_loc3 = $_FILES['image3']['tmp_name'];
  $img_name3 = $_FILES['image3']['name'];

  $query = "INSERT INTO details_voitures (caracteristique, liste_equipements, options_installes, image1, image2, image3)
   VALUES ('$caracteristique','$liste_equipements','$options_installes','$img_name1','$img_name2','$img_name3')";
   $statement = $conn->prepare($query);
   
   
   $stat = $statement->execute();
  header('location:details_car.php');
};

?>
<div class="container_header p-3 ">
    <div class="content_header d-flex">
        <p id="title_vehicules">Véhicules</p>
    </div>
    <div class="content_button mt-2">
        <a href="fetch_data.php" class="btn btn-primary mx-2">Back  <i class="bi bi-backspace"></i></a>
        <a href="vehicules.php" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ajoutDétails">Ajouter détails <i class="fa-solid fa-circle-plus" style="color: #ffffff;"></i></a>
        
    </div>
</div>
<section class="section_details">
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <?php 
  if(isset($_GET['id_details'])){
 $id =(int)$_GET['id_details'];
  $req =$conn->query("SELECT * FROM details_voitures JOIN voitures ON voitures.id = details_voitures.id_details WHERE id_details = $id");
  $user= $req-> fetch();
  }
     ?>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="../uploads/<?php echo $user['image1']; ?>" class="d-block w-100" alt="image1">
    </div>
    <div class="carousel-item">
        <img  src="../uploads/<?php echo $user['image2']; ?>" class="d-block w-100" alt="image2">
    </div>
    <div class="carousel-item">
        <img src="../uploads/<?php echo $user['image3']; ?>" class="d-block w-100" alt="image3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="table_car">
  <table class="blueTable table-responsive">
    <thead>
        <tr>
        <th>Tableau de caractéristiques</th>
        <th>Liste des équipements</th>
        <th>Options installés</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td><?=$user['caracteristique']?></td>
        <td><?=$user['liste_equipements']?></td>
        <td><?=$user['options_installes']?></td>
        <td>
        <a href="update_det.php?id_details=<?=$user['id_details']?>" type="submit" class="btn btn-primary car mx-2">Update détails</a>
        </td>
        </tr>
    </tbody>
  </table>
 
 </div>
 
</section>


<!-- Modal ajout détails car-->
<div class="modal fade" id="ajoutDétails" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog">
    <form  method="POST" enctype="multipart/form-data" >
       <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title fs-5" id="exampleModalToggleLabel">Ajouter détails</h3>
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
     </div>
   </div>
<?php
require_once 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>