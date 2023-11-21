<?php
 session_start();
 require_once ('head_admin.php');
?>
<section>
   <!-- Afficher tous les membres enregistrés  -->
   <div class="content_employés">
      <div class="titre_content mt-3">
      <p class="titre_empl">Liste employés</p>
    </div>
    <div class="content_btn mt-3">
       <a href="admin_page.php" class="btn btn-primary back mx-2">Back <i class="bi bi-backspace"></i></a>
       <a href="registre.php" class="btn btn-primary mx-2" >Ajouter Employé  <i class="bi bi-plus-circle-fill"></i></a>
    </div> 
    </div>
    <table class="blueTable mt-4">
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
     $req = $conn->query('SELECT * FROM employe');
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
</div></section>
   
</html>