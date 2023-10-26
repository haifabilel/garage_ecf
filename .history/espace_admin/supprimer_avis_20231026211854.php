<?php
require_once ('connexion.php');
session_start();

//recupération de l'id
if(isset($_GET['review_id']) AND !empty($_GET['review_id'])){
    $id = (int)$_GET['review_id'];
    $recupReview = $conn->prepare('SELECT * FROM review_table WHERE review_id = :review_id');
    $recupReview->execute(array($getid));
    if($recupUser->rowCount() > 0){
        $bannirUser = $conn->prepare('DELETE FROM review_table WHERE review_id = ?');
        $bannirUser->execute(array($getid));
        header('location:employé_page.php');
    }
}

?>