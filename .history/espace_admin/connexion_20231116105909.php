<?php

//connexion à la bdd
$user ='root';
$pass ='';
// $user ='gbaiajt3dsgh3pgn';
// $pass ='h4ro7atjsjx6vyvw';
// $host ='	esilxl0nthgloe1y.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
// $db_name ='kdete0ottov0v9v3';
try {
    $conn = new PDO('mysql:$host;3306;dbname=$db_name',$user, $pass);
    // $conn = new PDO('mysql:host=localhost;dbname=ecf',$user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
 
}catch(PDOException $e){
  // Enregistrement du message d'erreur dans le fichier bdlogs.log pour sécuriser les coordonnées.
  file_put_contents('bdlogs.log', $e->getMessage().PHP_EOL, FILE_APPEND);

}


?>