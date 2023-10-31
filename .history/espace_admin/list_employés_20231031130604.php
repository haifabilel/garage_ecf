<?php
 session_start();
 require_once ('head_admin.php');

?>

<section>
   <!-- Afficher tous les membres enregistrés  -->
   <div class="content_employés d-flex">
      <div class="titre_content">
      <p>Employés</p>
      
       <a href="admin_page.php" class="btn btn-primary back">Back <i class="bi bi-backspace"></i></a>
       <a href="registre.php" class="btn btn-primary" style="margin-left:45%; margin-bottom:20px;">Ajouter Employé  <i class="fa-solid fa-plus" style="color: #ffffff;"></i></a>
     
    </div>
  
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
  

   </section>
</html>