<?php
 require_once ('head_admin.php');
 session_start();


?>

<body>
   <!-- Afficher tous les membres enregistrés  -->
   <div class="container_user">
     <h2>liste des avis clients en attente</h2>
     <table class="blueTable">
<thead>
<tr>
<th>Nom</th>
<th>Rating</th>
<th>Avis</th>
<th>Date</th>
</tr>
</thead>
<tbody>
    <!-- Parcourir la liste des avis -->
    <?php
     require_once ('connexion.php');
     $req = $conn->query('SELECT * FROM review_table');
     while($user = $req->fetch()){
        ?>
        
        <tr>
        <td><?=$user['user_name']?></td>
        <td><?=$user['user_rating']?></td>
        <td><?=$user['user_review']?></td>
        <td><?=date('l jS, F Y h:i:s A', $user["datetime"])?></td>
        <td>
            <a class="btn btn-primary" href="supprimer_avis.php?review_id=<?=$user['review_id']?>">Supprimer <i class="fa-regular fa-trash-can"></i></a>
        
        </td>
        </tr>
        <?php 
     }
    ?>
</tbody>
</table>
   </div>


</body>
</html>