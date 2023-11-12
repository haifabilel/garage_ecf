<?php
require_once 'connexion.php';
require_once ('head_admin.php');

if(isset($_GET['id']) and !empty($_GET['id'])) {
    $id = (int)$_GET['id'];

    $req = $conn->prepare("SELECT * FROM horaires WHERE id =:id");
    //Sécuriser contre les injections sql
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->execute();
    $row = $req->fetch(PDO::FETCH_ASSOC);
    
}
?>
<div class="container_services p-3 ">
    <div class="content_services d-flex">
        <p>Horaires</p>
    </div>
       <div class="content_button mt-2">
          <a href="admin_page.php" class="btn btn-primary">Back  <i class="bi bi-backspace"></i></a>
       </div>
    </div>
<section >
<table class="blueTable">
<thead>
<tr>
<th>head1</th>
<th>head2</th>
<th>head3</th>
<th>head4</th>
</tr>
</thead>
<tbody>
<tr>
<td>cell1_1</td>
<td>cell2_1</td>
<td>cell3_1</td>
<td>cell4_1</td>
</tr>
</tbody>
</table>

</section>

<tbody>
    <!-- Parcourir la liste des employés -->
    <?php
     require_once ('connexion.php');
     $req = $conn->query('SELECT * FROM horaires');
     while($user = $req->fetch()){
        ?>
         <td><?=$user['jour']?>:</td>
     <td><?=$user['matin']?> / </td>
     <td><?=$user['apres_midi']?> </td>
     <td>
     <a class="btn btn-primary" href="update_horaires.php?id=<?=$user['id']?>"  data-bs-toggle="modal" data-bs-target="#horairesUpdate"><i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i></a><br><br>
     </td>
        <?php 
     }
    ?>
</tbody>
  


    
