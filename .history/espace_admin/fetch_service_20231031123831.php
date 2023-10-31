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

<body>
  <div class="container_services p-3 ">
    <div class="content_services d-flex">
        <p>Services</p>
    </div>
       .content
       <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ServiceAdmin">Ajouter services <i class="fa-solid fa-circle-plus" style="color: #ffffff;"></i> </button>
        <a href="admin_page.php" class="btn btn-primary">Back <i class="fa-solid fa-arrow-left-long" style="color: #ffffff;"></i></a>
      
    </div>
  <!-- Afficher la liste des services enregistrés dans ma bdd -->
  <div class="container_card my-5">
  <h2>liste des services</h2>
  
 <table class="blueTable">
<thead>
<tr>
<th>Image</th>
<th>Titre</th>
<th>Description</th>
<th>Action</th>

</tr>
</thead>
<tbody>
    <!-- Parcourir la liste des services -->
    <?php
  
     $req = $conn->query('SELECT * FROM services');
     while($user = $req->fetch()){
        ?>
        <tr>
        <td><img src="../uploads/<?php echo $user['image']; ?>" alt="image_card" style="height:150px; width:250px;" ></td>
        <td><?=$user['titre']?></td>
        <td><?=$user['description']?></td>
        <td>
        <a class="btn btn-primary" href="update_service.php?id=<?=$user['id']?>" ><i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i></a><br><br>
        <a class="btn btn-primary" href="supprimer_service.php?id=<?=$user['id']?>"><i class="fa-regular fa-trash-can"></i></a>
        </td>
        </tr>
      
        <?php 
     };
    ?>
</tbody>
</table>

  


<!-- Modal ajout service-->
<div class="modal fade" id="ServiceAdmin" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
  <form action="" method="POST" enctype="multipart/form-data">
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