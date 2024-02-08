<?php
require_once ('connexion.php');


//recupération de l'id
if(isset($_GET['id']) AND !empty($_GET['id'])){
        //Caster avec int
    $id =(int)$_GET['id'];
    $recupUser = $conn->prepare('SELECT * FROM voitures WHERE id = :id');
     //Sécuriser contre les injections sql
     $recup->bindValue(":id", $id, PDO::PARAM_INT);
     $recup->execute();
    if($recup->rowCount() > 0){
        $bannirUser = $conn->prepare('DELETE FROM voitures WHERE id = ?');
        $bannirUser->execute(array($id));
        header('location:list_employés.php');
    }
}
?>