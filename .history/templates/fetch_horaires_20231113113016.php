<section >
<?php
  require_once '../espace_admin/connexion.php';
  $req = $conn->query('SELECT * FROM horaires');
  while($user = $req->fetch()){
     ?>
     <table>
     <tr>
     <td><?=$user['jour']?> : </td><br>
     <td><?=$user['matin']?>  / </td><br>
     <td><?=$user['apres_midi']?></td><br>

    
     
     </tr>
   
     <?php 
  };
 ?>
 </table>
</section>
