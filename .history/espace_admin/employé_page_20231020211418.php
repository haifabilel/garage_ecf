<?php

 session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Bootstrap -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- CSS Link -->
     <link rel="stylesheet" href="../css/style.css">
</head>
<body>
   <!-- Afficher tous les membres enregistrés  -->
   <div class="container_user my-5">
     <h2>liste des avis clients</h2>
    <!-- <a href="registre.php" class="btn btn-primary" style="margin-left:45%; margin-bottom:20px;">Ajouter Employé</a> -->
     <table class="blueTable">
<thead>
<tr>
<th>Nom</th>
<th>Rating</th>
<th>Avis</th>
<th>Date</th>
</tr>
</thead>
<tbody>
    <!-- Parcourir la liste des avis -->
    <?php
     require_once ('connexion.php');
     $req = $conn->query('SELECT * FROM review_table');
     while($user = $req->fetch()){
        ?>
        
        <tr>
        <td><?=$user['user_name']?></td>
        <td><?=$user['user_rating']?></td>
        <td><?=$user['user_review']?></td>
        <td><?=date('l jS, F Y h:i:s A', $user["datetime"])?></td>
        <td>
            <a class="btn btn-primary" href="supprimer_avis.php?review_id=<?=$user['review_id']?>">Supprimer <i class="fa-regular fa-trash-can"></i></a>
            <a class="btn btn-primary" href="supprimer_user.php?review_id=<?=$user['review_id']?>">Approuver <i class="fa-regular fa-trash-can"></i></a>
        </td>
        </tr>
        <?php 
     }
    ?>
</tbody>
</table>
   </div>


</body>
</html>