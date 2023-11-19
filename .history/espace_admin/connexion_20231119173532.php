<?php

//connexion à la bdd
// $user = 'root';
// $pass = '';
 $host = 'ilzyz0heng1bygi8.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
 $db_name = 'uzaznfs5dbj6jir9';
 $user = 'xt2ic7ctkonp78fq';
 $pass ='l7he3z6ycjvanvxa';
try {
    // $conn = new PDO('mysql:host=localhost;dbname=ecf',$user, $pass);
    $conn = new PDO('heroku);
    $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
  // Enregistrement du message d'erreur dans le fichier bdlogs.log pour sécuriser les coordonnées.
  file_put_contents('bdlogs.log', $e->getMessage().PHP_EOL, FILE_APPEND);

}


?>