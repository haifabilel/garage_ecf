<section >
<?php
  require_once './espace_admin/connexion.php';
  $req = $conn->query('SELECT * FROM horaires');
  while($user = $req->fetch()){
     ?>
     <table>
     <tr>
     <td><?=$user['jour']?> :  </td>
     <td><?=$user['ouverture_matin']?> - </td>
     <td><?=$user['fermeture_matin']?> / </td>
     <td><?=$user['ouverture_apres_midi']?> - </td>
     <td><?=$user['fermeture_apres_midi']?></td>
    
     
     </tr>
   
     <?php 
  };
 ?>
 </table>
</section>
