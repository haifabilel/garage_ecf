<?php

//connexion à la bdd
// $user = 'root';
// $pass = '';
 $host = 'ilzyz0heng1bygi8.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
 $db_name = 'uo7hs8nyhiij4dh9';
 $user = 'y02xmjobhds0ymdj';
 $pass ='uj1dj6ugs57n1fbs';
try {
    // $conn = new PDO('mysql:host=localhost;dbname=ecf',$user, $pass);
    $conn = new PDO('mysql:host=$host;3306;dbname=$db_name',$user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
  // Enregistrement du message d'erreur dans le fichier bdlogs.log pour sécuriser les coordonnées.
  file_put_contents('bdlogs.log', $e->getMessage().PHP_EOL, FILE_APPEND);

}


?>