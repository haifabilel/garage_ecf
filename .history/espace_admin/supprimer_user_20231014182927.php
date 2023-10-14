<?php
require_once ('connexion.php');


//recupération de l'id
$id = $_GET['id'];
$req = $conn->query('DELETE FROM employé WHERE id =$id');
?>