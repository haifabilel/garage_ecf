<section >
<?php
  require_once './espace_admin/connexion.php';
  $req = $conn->query('SELECT * FROM horaires');
  while($user = $req->fetch()){
     ?>
     <table class="blueTable">
<thead>
<tr>
<th>Jours</th>
<th>Matin</th>
<th>Aprés midi</th>
<th>Action</th>
</tr>
</thead>
<tbody>
   <table>
   <tr>
   <td><?=$user['jour']?> : </td>
   <td><?=$user['matin']?> - </td>
   <td><?=$user['apres_midi']?></td>
   </tr>
   
     <?php 
  };
 ?>
 </table>
</section>
