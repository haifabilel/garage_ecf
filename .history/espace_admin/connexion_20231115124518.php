<?php

//connexion à la bdd
$user = '';
$pass = 'qk6v1vj1u5tb40xf';
$host = 'jtb9ia3h1pgevwb1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$db_name = 'gse0aovfiwq6ubk9';
try {
    $conn = new PDO('mysql:host=$host;port=3306;dbname=$db_name',$user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
 
}catch(PDOException $e){
  // Enregistrement du message d'erreur dans le fichier bdlogs.log pour sécuriser les coordonnées.
  file_put_contents('bdlogs.log', $e->getMessage().PHP_EOL, FILE_APPEND);

}oi478h1qcovqic48


?>