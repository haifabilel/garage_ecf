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
<td>cell1_4</td><td>cell2_4</td><td>cell3_4</td></tr>
<tr>
<td>cell1_5</td><td>cell2_5</td><td>cell3_5</td></tr>
<tr>
<td>cell1_6</td><td>cell2_6</td><td>cell3_6</td></tr>
<tr>
<td>cell1_7</td><td>cell2_7</td><td>cell3_7</td></tr>
<tr>
<td>cell1_8</td><td>cell2_8</td><td>cell3_8</td></tr>
</tbody>
</tr>
</table>
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
