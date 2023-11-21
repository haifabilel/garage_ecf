<?php
require_once 'connexion.php';
require_once ('head_admin.php');
//affi
if(isset($_GET['id']) and !empty($_GET['id'])) {
    $id = (int)$_GET['id'];
    $req = $conn->prepare("SELECT * FROM horaires WHERE id =:id");
    //Sécuriser contre les injections sql
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->execute();
    $row = $req->fetch(PDO::FETCH_ASSOC);
    
}
?>
<div class="container_header p-3 ">
    <div class="content_header d-flex ">
        <p>Horaires</p>
    </div>
       <div class="content_button mt-2 ">
          <a href="admin_page.php" class="btn btn-primary">Back  <i class="bi bi-backspace"></i></a>
       </div>
    </div>
<section class="section_horaire">
    <h2 class="titre_time mt-4">Update les horaires d'ouverture / fermeture du garage</h2>
    <table class="blueTable">
<thead>
<tr>
<th>Jours</th>
<th>Matin</th>
<th>Aprés midi</th>
<th>Action</th>
</tr>
</thead>
    <!-- Parcourir la liste des avis -->
    <?php
   
     $req = $conn->query('SELECT * FROM horaires');
     while($user = $req->fetch()){
        ?>
        
        <tr>
            <td><?=$user['jour']?></td>
            <td><?=$user['matin']?></td>
            <td><?=$user['apres_midi']?> </td>
            <td>
                <a class="btn btn-primary mt-3" href="update_horaires.php?id=<?=$user['id']?>" id="update_horaires">Update <i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i></a><br><br>
            </td>
        </tr>
        <?php 
     }
    ?>
</tbody>
</table>
</section>

   

  


