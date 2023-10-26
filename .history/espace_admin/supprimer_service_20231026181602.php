<?php
require_once ('connexion.php');
session_start();

//recupération de l'id
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $recupCard = $conn->prepare('SELECT * FROM services WHERE id = ?');
    $recupC->execute(array($getid));
    if($recupUser->rowCount() > 0){
        $bannirUser = $conn->prepare('DELETE FROM employé WHERE id = ?');
        $bannirUser->execute(array($getid));
        header('location:admin_page.php');
    }
}

?>