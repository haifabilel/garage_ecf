<?php
require_once 'connexion.php';
require_once ('head_admin.php');

if(isset($_GET['id']) and !empty($_GET['id'])) {
    $id = (int)$_GET['id'];

    $req = $conn->prepare("SELECT * FROM horaires WHERE id =:id");
    //Sécuriser contre les injections sql
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->execute();
    $row = $req->fetch(PDO::FETCH_ASSOC);
    
}
?>
<div class="container_services p-3 ">
    <div class="content_services d-flex">
        <p>Horaires</p>
    </div>
       <div class="content_button mt-2">
          <a href="admin_page.php" class="btn btn-primary">Back  <i class="bi bi-backspace"></i></a>
       </div>
    </div>
<section >
    <h2 class="mt-4">Update les horaires d'ouverture / fermeture du garage</h2>
    <table class="blueTable">
<thead>
<tr>
<th>Nom</th>
<th>Rating</th>
<th>Avis</th>
<th>Date</th>
<th>Action</th>
</tr>
</thead>
<section>
    <!-- Parcourir la liste des avis -->
    <?php
   
     $req = $conn->query('SELECT * FROM horaires');
     while($user = $req->fetch()){
        ?>
        
        <tr>
        <td><?=$user['user_name']?></td>
        <td><?=$user['user_rating']?></td>
        <td><?=$user['user_review']?></td>
        <td><?=date('l jS, F Y h:i:s A', $user["datetime"])?></td>
        <td>
            <a class="btn btn-primary mb-2 mt-2" href="supprimer_avis.php?review_id=<?=$user['review_id']?>">Supprimer <i class="fa-regular fa-trash-can"></i></a>
        
        </td>
        </tr>
        <?php 
     }
    ?>
</tbody>
</table>
</section>
   

  


