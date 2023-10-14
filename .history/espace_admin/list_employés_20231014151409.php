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
     <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Portable</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>first_user</td>
                <td>first_user@gmail.com</td>
                <td>60000000</td>
                <td>35 ans</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="">Modifier</a>
                    <a class="btn btn-primary btn-sm" href="">Supprimer</a>
                </td>
            </tr>
            
            <tr>
                <td>second_user</td>
                <td>second_user@gmail.com</td>
                <td>60000000</td>
                <td>35 ans</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="">Modifier</a>
                    <a class="btn btn-primary btn-sm" href="">Supprimer</a>
                </td>
            </tr>
        </tbody>
     </table>

   </div>


</body>
</html>