<?php

//connexion à la bdd
$user = 'pzd0xaowipje2ski';
$pass = 'z4c5qo2nxcsyh33o';
$host = 'esilxl0nthgloe1y.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
$db_name = 'w9feu4rvz1flsg3s';
try {
    $conn = new PDO('mysql:host=$host;port=3306;dbname=$db_name',$user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
 
}catch(PDOException $e){
  // Enregistrement du message d'erreur dans le fichier bdlogs.log pour sécuriser les coordonnées.
  file_put_contents('bdlogs.log', $e->getMessage().PHP_EOL, FILE_APPEND);

}


?>