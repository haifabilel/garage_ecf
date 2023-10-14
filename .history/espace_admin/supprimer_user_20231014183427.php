<?php
require_once ('connexion.php');


//recupération de l'id
$id = $_GET['id'];
$req = $conn->prepare('DELETE FROM employé WHERE id = ?');
header('location:registre.php');
?>