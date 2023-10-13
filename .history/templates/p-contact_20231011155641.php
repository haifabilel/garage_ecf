<?php
require_once '../espace_admin/connexion.php';
require_once 'head.php';


$headers ='FROM:hayfa.chaabi92@';
$_message = $_POST['message'];
mail('vinccentparrot@gmail.com','formulaire de contact',$_message,$_headers);

?>