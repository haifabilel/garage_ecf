<?php

//connexion à la bdd
$user = 'qbamrrogjwwnqm';
$pass = 'eaf76d2d61ad45aa11fdc23d0a20835f86762ae3b87831e85ad2fc79c93dd00f';
$host = 'ec2-3-232-218-211.compute-1.amazonaws.com';
try {
    $conn = new PDO('mysql:host=;dbname=ecf',$user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
 
}catch(PDOException $e){
  // Enregistrement du message d'erreur dans le fichier bdlogs.log pour sécuriser les coordonnées.
  file_put_contents('bdlogs.log', $e->getMessage().PHP_EOL, FILE_APPEND);

}


?>