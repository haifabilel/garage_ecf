<div class="container_header p-3 ">
    <div class="content_header d-flex">
        <p>Message</p>
    </div>
       <div class="content_button mt-2">
          <a href="espace_employé.php" class="btn btn-primary">Back  <i class="bi bi-backspace"></i></a>
       </div>
    </div>

     <!-- Afficher la liste des messages enregistrés dans ma bdd -->
  <section class="fetch_car">
     <div class="container_card my-5">
        <h2>liste des messages</h2>
  
 <table class="blueTable">
<thead>
<tr>
<th>Nom</th>
<th>Prénom</th>
<th>Adresse mail</th>
<th>Portable</th>
<th>Message</th>
</tr>
</thead>
<tbody>
    <!-- Parcourir la liste des messages -->
    <?php
     require_once 'connexion.php';
     require_once '../templates/head.php';
     $req =$conn->query('SELECT * FROM contact');
     while($user = $req->fetch()){
        ?>
        <tr>
        <td><?=$user['nom']?></td>
        <td><?=$user['prenom']?></td>
        <td><?=$user['mail']?></td>
        <td><?=$user['portable']?></td>
        <td><?=$user['message']?></td>
        </tr>
      
        <?php 
     };
    ?>
</tbody>
</table>
</section>