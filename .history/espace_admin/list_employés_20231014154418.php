<?php
 require_once ('connexion.php');
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
     <h2>liste des employés</h2>
     <table class="blueTable">
<thead>
<tr>
    <?php
    $recuperUsers = $conn->query('SELECT * FROM employé');
    while($user = $rec)

    
    ?>
<th>Nom</th>
<th>Email</th>
<th>Portable</th>
<th>Age</th>
<th>Button</th>
</tr>
</thead>
<tfoot>
<tr>
<td colspan="5">
<div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
</td>
</tr>
</tfoot>
<tbody>
<tr>
<td>first_user</td>
<td>first_user@gmail.com</td>
<td>06000000</td>
<td>35 ans</td>
<td>
   <a class="btn btn-primary" href="">Modifier</a>
   <a class="btn btn-primary" href="">Supprimer</a>
</td>
</tr>
<tr>
<td>second_user</td>
<td>first_user@gmail.com</td>
<td>052312322</td>
<td>28 ans</td>
<td>
   <a class="btn btn-primary" href="">Modifier</a>
   <a class="btn btn-primary" href="">Supprimer</a>
</td>
</tr>
</tbody>
</table>
   </div>


</body>
</html>