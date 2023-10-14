<?php
require_once ('connexion.php');
session_start();


//recupération de l'id
$id = $_GET['id'];
$req = $conn->prepare('DELETE FROM employé WHERE id = $id');
header('location:registre.php');
?>