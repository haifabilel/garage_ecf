<?php
require_once 'connexion.php';

if(isset($_GET['token']) && $_GET['token'] != ''){
    $stmt = $conn->prepare('SELECT email FROM admin WHERE token =?');
    $stmt->execu
}
