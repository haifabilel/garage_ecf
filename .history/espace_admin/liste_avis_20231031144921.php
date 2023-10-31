<?php
 require_once ('head_admin.php');
 session_start();


?>
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
      <a href="../index.php" class="logo">
          <img src="../assets/images/1.png" alt="logo" style="width: 190px; height: 140px; ">
        </a>
      </div>

      <div class="col-md-3">
      <a href="logout.php"  class="btn btn-primary" id="btn-login" >BACK <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
      <a href="../templates/reviews.php"  class="btn btn-primary" id="btn-login" >Ajouter avis <i class="fa-solid fa-plus" style="color: #ffffff;"></i></a>
    </div>
    </header>
<section>
   <!-- Afficher tous les membres enregistrés  -->
   <div class="container_user">
     <h2>liste des avis clients</h2>
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