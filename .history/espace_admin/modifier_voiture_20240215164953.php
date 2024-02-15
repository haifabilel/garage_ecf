<?php
require_once ('head_admin.php');
require_once ('connexion.php');
 //Caster avec int
 $id =(int)$_GET['id'];
 $req =$conn->prepare("SELECT * FROM services WHERE id =:id");
 //Sécuriser contre les injections sql
 $req->bindValue(':id', $id, PDO::PARAM_INT);
 $req->execute();
 $row = $req->fetch(PDO::FETCH_ASSOC);


if(isset($_POST['Update'])){
  extract($_POST);
  if(isset($titre) && isset($description) && isset($image)){
    //Modifier information de la card service
    $req =$conn->query("UPDATE services SET titre = '$titre' , description = '$description', image = '$image' WHERE id = $id ");
    if($req){
      header('location:fetch_service.php');
    }

  }
}
?>