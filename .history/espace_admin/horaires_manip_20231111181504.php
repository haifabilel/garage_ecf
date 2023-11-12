<?php

require_once ('head_admin.php');
require_once ('connexion.php');

//Recupérer l'id de l'url
 //Caster avec int
 $id =(int)$_GET['id'];
 $req =$conn->prepare("SELECT * FROM horaires WHERE id =:id");
 //Sécuriser contre les injections sql
 $req->bindValue(':id', $id, PDO::PARAM_INT);
 $req->execute();
 $row = $req->fetch(PDO::FETCH_ASSOC);


if(isset($_POST['submit'])){
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à jour des Horaires</title>
</head>
<body>
    <h2>Mise à jour des Jours de Fermeture</h2>
    <form method="post" action="horaires.php">
        <label for="jour">Jour d'ouverture :</label>
        <select name="jour" id="jour">
            <?php foreach ($horaires as $horaire): ?>
                <option value="<?= $horaire['jour'] ?>"><?= $horaire['jour'] ?></option>
           
        </select>

        <label for="jour_fermeture">Jour de fermeture :</label>
        <select name="jour" id="jour">
            <?php foreach ($horaires as $horaire): ?>
                <option value="<?= $horaire['jour'] ?>"><?= $horaire['jour'] ?></option>
        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>
