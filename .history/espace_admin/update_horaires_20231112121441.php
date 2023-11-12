<?php
require_once 'connexion.php'; 
require_once 'head_admin.php';
$id =(int)$_GET['id'];
 $req =$conn->prepare("SELECT * FROM services WHERE id =:id");
 //Sécuriser contre les injections sql
 $req->bindValue(':id', $id, PDO::PARAM_INT);
 $req->execute();
 $row = $req->fetch(PDO::FETCH_ASSOC);
//Update horaires
if(isset($_POST['Update'])){
    $ouverture_matin = $_POST['ouverture_matin'];
    $fermeture_matin = $_POST['fermeture_matin'];
    $ouverture_apres_midi = $_POST['ouverture_apres_midi'];
    $fermeture_apres_midi = $_POST['fermeture_apres_midi'];
   
  extract($_POST);
  if(isset($ouverture_matin) && isset($fermeture_matin) && isset($ouverture_apres_midi) && isset($fermeture_apres_midi)){
    //Modifier information de la card service
    $req =$conn->query("UPDATE horaires SET ouverture_matin = '$ouverture_matin' , fermeture_matin = '$fermeture_matin', 
    ouverture_apres_midi = '$ouverture_apres_midi',fermeture_apres_midi ='$fermeture_apres_midi' WHERE id = $id ");
    if($req){
      header('location:horaires.php');
    }

  }
}
;


?>