<?php
require_once ('connexion.php');
session_start();

//recupération de l'id
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid =() $_GET['id'];
    $recupCard = $conn->prepare('SELECT * FROM services WHERE id = :id');
    $recupCard->bindValue(":id", $_POST["id"], PDO::PARAM_INT);
    $recupCard->execute(array($getid));
    if($recupCard->rowCount() > 0){
        $supprimCard = $conn->prepare('DELETE FROM services WHERE id = ?');
        $supprimCard->execute(array($getid));
        header('location:modifier_services');
    }
}

?>