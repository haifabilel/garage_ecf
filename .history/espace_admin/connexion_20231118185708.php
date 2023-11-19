<?php

//connexion à la bdd
$user = 'root';
$pass = '';
// $host = 'esilxl0nthgloe1y.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
// $db_name = 'wyk5nombobh9yvg1';
try {
    $conn = new PDO('mysql:host=localhost;dbname=ecf',$user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
  // Enregistrement du message d'erreur dans le fichier bdlogs.log pour sécuriser les coordonnées.
  file_put_contents('bdlogs.log', $e->getMessage().PHP_EOL, FILE_APPEND);

}


?>