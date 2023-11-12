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
<tr>
<td>cell1_1</td><td>cell2_1</td><td>cell3_1</td></tr>
<tr>
<td>cell1_2</td><td>cell2_2</td><td>cell3_2</td></tr>
<tr>
<td>cell1_3</td><td>cell2_3</td><td>cell3_3</td></tr>
<tr>

</tbody>
</tr>

     <!-- <table>
     <tr>
     <td><?=$user['jour']?> : </td>
     <td><?=$user['matin']?> - </td>
     <td><?=$user['apres_midi']?></td>

    
     
     </tr> -->
   
     <?php 
  };
 ?>
 </table>
</section>
