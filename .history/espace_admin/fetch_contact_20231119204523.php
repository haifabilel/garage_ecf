<div class="container_header p-3 ">
    <div class="content_header d-flex">
        <p>Message</p>
    </div>
       <div class="content_button mt-2">
          <a href="espace_employé.php" class="btn btn-primary">Back  <i class="bi bi-backspace"></i></a>
       </div>
    </div>

     <!-- Afficher la liste des véhicules enregistrés dans ma bdd -->
  <section class="fetch_car">
     <div class="container_card my-5">
        <h2>liste des messages</h2>
  
 <table class="blueTable">
<thead>
<tr>
<th>Nom</th>
<th>Prénom</th>
<th>Adresse mail</th>
<th>Kilométrage</th>
<th>Année</th>
</tr>
</thead>
<tbody>
    <!-- Parcourir la liste des véhicules -->
    <?php
  
     $req = $conn->query('SELECT * FROM voitures');
     while($user = $req->fetch()){
        ?>
        <tr>
        <td class="td_image img-fluid"><img src="../uploads/<?php echo $user['image']; ?>"  alt="image_car" class="image_car" ></td>
        <td><?=$user['brand']?></td>
        <td><?=$user['prix']?></td>
        <td><?=$user['kilometrage']?></td>
        <td><?=$user['annee']?></td>
        </tr>
      
        <?php 
     };
    ?>
</tbody>
</table>
</section>