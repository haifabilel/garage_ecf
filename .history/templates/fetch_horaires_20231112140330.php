<section >
<?php
  require_once './espace_admin/connexion.php';
  $req = $conn->query('SELECT * FROM horaires');
  while($user = $req->fetch()){
     ?>
     <table>
     <tr>
     <td><?=$user['jour']?> : </td>
     <td><?=$user['matin']?> / </td>
     <td><?=$user['apres_midi']?></td>

    
     
     </tr>
   
     <?php 
  };
 ?>
 </table>
</section>
