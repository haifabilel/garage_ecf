<section >
<?php
  require_once './espace_admin/connexion.php';
  $req = $conn->query('SELECT * FROM horaires');
  while($user = $req->fetch()){
     ?>
     <tr>
     <td><?=$user['jour']?>:</td>
     <td><?=$user['ouverture_matin']?></td>
     <td><?=$user['fermeture_matin']?> / </td>
     <td><?=$user['ouverture_apres_midi']?></td>
     <td><?=$user['fermeture_apres_midi']?></td>
     <td>
     <a class="btn btn-primary" href="update_horaires.php?id=<?=$user['id']?>"  data-bs-toggle="modal" data-bs-target="#horairesUpdate"><i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i></a><br><br>
     </td>
     </tr>
   
     <?php 
  };
 ?>
</section>
