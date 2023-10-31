<?php
 session_start();
 require_once ('head_admin.php');

?>

<section>
   <!-- Afficher tous les membres enregistrés  -->
   <div class="content_employés d-flex">
        <p>Employés</p>
    </div>
       <div class="content_button mt-2">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ServiceAdmin">Ajouter services <i class="fa-solid fa-circle-plus" style="color: #ffffff;"></i> </button>
          <a href="admin_page.php" class="btn btn-primary">Back  <i class="bi bi-backspace"></i></a>
       </div>
    </div>
   <div class="container_user my-5">
   
     <!-- <h2>liste des employés</h2>
   
      -->
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