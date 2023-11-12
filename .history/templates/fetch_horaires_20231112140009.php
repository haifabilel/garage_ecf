<section >
<?php
  require_once './espace_admin/connexion.php';
  $req = $conn->query('SELECT * FROM horaires');
  while($user = $req->fetch()){
     ?>
     <table class="blueTable">
<thead>
<tr>
<th>head1</th>
<th>head2</th>
<th>head3</th>
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
