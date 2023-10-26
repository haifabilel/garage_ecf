<?php
require_once 'connexion.php';

if(isset($_POST['addService'])){
    $titre = $_POST['titre'];
    $desc = $_POST['description'];
    $image = $_FILES['image'];
   $img_loc = $_FILES['image']['tmp_name'];
   $img_name = $_FILES['image']['name'];
   move_uploaded_file($img_loc,'../uploads/'.$img_name);

    $query = "INSERT INTO services (titre ,description, image)
    VALUES (:titre, :description, :image)";
    $statement = $conn->prepare($query);

    $data = [
        ':titre' => $titre,
        ':description' => $desc,
        ':image' => $image,
    ];
    $stat = $statement->execute($data);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    
    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
      <!-- Bootstrap icons CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css"> 
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CSS Link -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div class="container_services p-3 ">
    <div class="content_services d-flex">
        <p>Services</p>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ServiceAdmin">Ajouter services <i class="fa-solid fa-circle-plus" style="color: #ffffff;"></i> </button>
        <!-- <a href="admin_page.php" class="btn btn-primary back_reviews mt-6">Back <i class="fa-solid fa-arrow-left-long" style="color: #ffffff;"></i></a> -->
    </div>


<!-- Modal -->
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
      <label >Titre</label>
       <input type="text" name="titre" class="form-control"  placeholder="Titre de service" required>
      </div>
      <div class="form-group">
    <label>Description</label>
    <textarea class="form-control" name="description" placeholder="Description..."required></textarea>
  </div>
  <div class="form-group mb-3">
  <label for="formFile" class="form-label">Default file input example</label>
  <input type="file" name="image" class="form-control">
</div>
      
      </div>
      <div class="modal-footer">
      <button type="submit" name="addService" class="btn btn-primary" >Submit</button>
      </div>
    </div>
     </form>
  </div>
</div>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>