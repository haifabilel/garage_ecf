<?php
require_once ('connexion.php');


//recupération de l'id
if(isset($_GET['id']) AND !empty($_GET['id'])){
        //Caster avec int
    $id =(int)$_GET['id'];
    $recupCar = $conn->prepare('SELECT * FROM voitures WHERE id = :id');
     //Sécuriser contre les injections sql
     $recupCar->bindValue(":id", $id, PDO::PARAM_INT);
     $recupCar->execute();
    if($recupCar->rowCount() > 0){
        $deleteCar = $conn->prepare('DELETE FROM voitures WHERE id = ?');
        $deleteCar->execute(array($id));
        header('location:fetch_car');
    }
}
?>