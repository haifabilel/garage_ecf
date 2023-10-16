<?php
 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Bootstrap -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- CSS Link -->
     <link rel="stylesheet" href="../css/style.css">
</head>
<section>
    <h2>Horaires d'ouverture / fermeture</h2>
    <form action="" methode="">
        <div class="form-group">
            <select class="form-control" name="jour"></select>
            <?php foreach(jours as $k=> $jours): ?>
            <option value="<?= $k ?">Lundi</option>
        </div>
    </form>
</section>