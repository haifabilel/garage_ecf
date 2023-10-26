<?php
require_once ('connexion.php');
session_start();

//recupération de l'id
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $recupCard = $conn->prepare('SELECT * FROM services WHERE id = ?');
    $recupCard->execute(array($getid));
    if($recupUser->rowCount() > 0){
        $supprimCard = $conn->prepare('DELETE FROM services WHERE id = ?');
        $$supprimCard->execute(array($getid));
        header('location:admin_page.php');
    }
}

?>