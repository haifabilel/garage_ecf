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
<th>head1</th>
<th>head2</th>
<th>head3</th>
<th>head4</th>
</tr>
</thead>
<tfoot>
<tr>
<td colspan="4">
<div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
</td>
</tr>
</tfoot>
<tbody>
<tr>
<td>cell1_1</td><td>cell2_1</td><td>cell3_1</td><td>cell4_1</td></tr>
<tr>
<td>cell1_2</td><td>cell2_2</td><td>cell3_2</td><td>cell4_2</td></tr>
</tbody>
</tr>
</table>
   </div>


</body>
</html>