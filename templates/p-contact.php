<?php
require_once '../espace_admin/connexion.php';
require_once 'head.php';


$headers ='FROM:vinccentparrot@gmail.com';
$_message = $_POST['message'];
mail('hayfa.chaabi92@gmail.com','formulaire de contact',$_message,$headers);

?>