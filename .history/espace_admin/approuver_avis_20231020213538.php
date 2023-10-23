<?php
require_once ('connexion.php');
session_start();

//recupération de l'id
if(isset($_GET['review_id']) AND !empty($_GET['review_id'])){
    $getid = $_GET['review_id'];
    $recupUser = $conn->prepare('SELECT * FROM review_table WHERE review_id = ?');
    $recupUser->execute(array($getid));
    if($recupUser->rowCount() > 0){
       $recupUser
        header('location:employé_page.php');
    }
}

?>