<?php

//connexion à la bdd
$user = 'w1pdb5f29zag14pu';
$pass = 'xm22u8br12as85nr';
$host = 'q0h7yf5pynynaq54.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
try {
    $conn = new PDO('mysql:host=$host;port=3306;dbname=gjkpoof9ijxk2nep',$user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
 
}catch(PDOException $e){
  // Enregistrement du message d'erreur dans le fichier bdlogs.log pour sécuriser les coordonnées.
  file_put_contents('bdlogs.log', $e->getMessage().PHP_EOL, FILE_APPEND);

}


?>