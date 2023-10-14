<?php
 require_once ('connexion.php');
 session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            </tr>
        </tbody>
     </table>

   </div>


</body>
</html>