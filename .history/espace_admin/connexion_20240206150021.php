<?php

//connexion à la bdd
$user = 'chaabi';
$pass = '07948155';

try {
    $conn = new PDO('mysql:host=mysql-chaabi.alwaysdata.net;dbname=ecf',$user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
  // Enregistrement du message d'erreur dans le fichier bdlogs.log pour sécuriser les coordonnées.
  file_put_contents('bdlogs.log', $e->getMessage().PHP_EOL, FILE_APPEND);

}


?>