<?php
require_once '../espace_admin/connexion.php';
require_once 'head.php';


$headers ='FROM:vinccentparrot@gmail.com';
$_message = $_POST['message'];
mail('hayfa','formulaire de contact',$_message,$headers);

?>