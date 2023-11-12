<section >
<?php
  require_once './espace_admin/connexion.php';
  $req = $conn->query('SELECT * FROM horaires');
  while($user = $req->fetch()){
     ?>
     <table class="blueTable">

   
     <?php 
  };
 ?>
 </table>
</section>
