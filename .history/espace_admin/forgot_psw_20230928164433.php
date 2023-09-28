<?php
require_once 'connexion.php';

$password = "test";
echo password_hash("test")
if(isset($_POST['email'], $_POST['password'])){
    $req = $conn->prepare('SELECT password FROM admin WHERE email = ?');
    $req->execute([$_POST['email']]);
    $password = $req->fetchColumn();

}