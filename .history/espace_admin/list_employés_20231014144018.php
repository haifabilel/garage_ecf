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
   <?php
$recupUsers = $conn->query('SELECT * FROM employés')

   ?>
</body>
</html>