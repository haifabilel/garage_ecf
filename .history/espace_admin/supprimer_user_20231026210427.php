<?php
require_once ('connexion.php');
session_start();

//recupération de l'id
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $id =(int)$_GET['id'];
    $recupUser = $conn->prepare('SELECT * FROM employé WHERE id = :id');
     //Sécuriser contre les injections sql
     $recupUser->bindValue(":id", $id, PDO::PARAM_INT);
     $recupUser->execute();
    if($recupUser->rowCount() > 0){
        $bannirUser = $conn->prepare('DELETE FROM employé WHERE id = ?');
        $bannirUser->execute(array($id));
        header('location:admin_page.php');
    }
}

?>