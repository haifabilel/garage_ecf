<?php
require_once ('connexion.php');
session_start();

//recupération de l'id
if(isset($_GET['id']) AND !empty($_GET['id'])){
        //Caster avec int
    $id =(int)$_GET['id'];
    $recupUser = $conn->prepare('SELECT * FROM employe WHERE id = :id');
     //Sécuriser contre les injections sql
     $recupUser->bindValue(":id", $id, PDO::PARAM_INT);
     $recupUser->execute();
    if($recupUser->rowCount() > 0){
        $bannirUser = $conn->prepare('DELETE FROM employe WHERE id = ?');
        $bannirUser->execute(array($id));
        header('location:list_employ');
    }
}

?>