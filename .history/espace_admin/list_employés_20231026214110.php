<?php
 session_start();
 require_once ('head_admin.php');

?>

<section>
   <!-- Afficher tous les membres enregistrés  -->
   <div class="container_user my-5">
     
     <h2>liste des employés</h2>
    <a href="registre.php" class="btn btn-primary" style="margin-left:45%; margin-bottom:20px;">Ajouter Employé  <i class="fa-solid fa-plus" style="color: #ffffff;"></i></a>
     <table class="blueTable">
<thead>
<tr>
<th>Nom</th>
<th>Email</th>
<th>Action</th>

</tr>
</thead>
<tbody>
    <!-- Parcourir la liste des employés -->
    <?php
     require_once ('connexion.php');
     $req = $conn->query('SELECT * FROM employé');
     while($user = $req->fetch()){
        ?>
        <tr>
        <td><?=$user['name']?></td>
        <td><?=$user['email']?></td>
        <td>
            <a class="btn btn-primary" href="supprimer_user.php?id=<?=$user['id']?>">Supprimer <i class="fa-regular fa-trash-can"></i></a>
        </td>
        </tr>
        <?php 
     }
    ?>
</tbody>
</table>
   </div>
   <a href="admin_page.php" class="btn btn-primary back">Back <i class="fa-solid fa-arrow-left-long" style="color: #ffffff;"></i></a>

   </section>
</html>