<?php

//connexion à la bdd
$user = 'dsf3j3ycnocrz0mt';
$pass = 'kxtv9ef1towu7wlm';
$host = 'esilxl0nthgloe1y.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
$db_name = 'wyk5nombobh9yvg1';
try {
    $conn = new PDO('mysql://dsf3j3ycnocrz0mt:kxtv9ef1towu7wlm@esilxl0nthgloe1y.chr7pe7iynqr.eu-west-1.rds.amazonaws.com:3306/wyk5nombobh9yvg1');
    $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
 
}catch(PDOException $e){
  // Enregistrement du message d'erreur dans le fichier bdlogs.log pour sécuriser les coordonnées.
  file_put_contents('bdlogs.log', $e->getMessage().PHP_EOL, FILE_APPEND);

}


?>