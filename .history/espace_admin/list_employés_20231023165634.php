<?php
 session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- font awesome cdn link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
       <!-- Bootstrap -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- CSS Link -->
     <link rel="stylesheet" href="../css/style.css">
</head>
<body>
   <!-- Afficher tous les membres enregistrés  -->
   <div class="container_user my-5">
     
     <h2>liste des employés</h2>
    <a href="registre.php" class="btn btn-primary" style="margin-left:45%; margin-bottom:20px;">Ajouter Employé  <i class="fa-solid fa-plus" style="color: #ffffff;"></i></a>
     <table class="blueTable">
<thead>
<tr>
<th>Nom</th>
<th>Email</th>
<th>Button</th>

</tr>
</thead>
<tbody>
    <!-- Parcourir la liste des employés -->
    <?php
     require_once ('connexion.php');
     $req = $conn->query('SELECT * FROM employé');
     while($user = $req->fetch()){
        ?>
        <tr>
        <td><?=$user['name']?></td>
        <td><?=$user['email']?></td>
        <td>
            <a class="btn btn-primary" href="supprimer_user.php?id=<?=$user['id']?>">Supprimer <i class="fa-regular fa-trash-can"></i></a>
        </td>
        </tr>
        <?php 
     }
    ?>
</tbody>
</table>
   </div>
   <a href="admin_page.php" class="btn btn-primary back">Back <i class="fa-solid fa-arrow-left-long" style="color: #ffffff;"></i></a>

</body>
</html>