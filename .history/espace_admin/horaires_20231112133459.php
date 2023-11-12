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
    //Update horaires
    if(isset($_POST['Update'])) {
        $ouverture = $_POST['ouverture'];
        $fermeture_ = $_POST['fermeture'];


        extract($_POST);
        if(isset($ouverture) && isset($fermeture)) {
            //Modification information des horaires
            $req = $conn->query("UPDATE horaires SET ouverture= '$ouverture' , fermeture = '$fermeture' 
     WHERE id = $id ");
            if($req) {
                header('location:horaires.php');
            }

        }
    }
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
<?php
  
  $req = $conn->query('SELECT * FROM horaires');
  while($user = $req->fetch()){
     ?>
     <tr>
     <td><?=$user['jour']?>:</td>
     <td><?=$user['ouverture']?></td>
     <td><?=$user['fermeture']?> / </td>
     <td>
     <a class="btn btn-primary" href="update?id=<?=$user['id']?>"  data-bs-toggle="modal" data-bs-target="#horairesUpdate"><i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i></a><br><br>
     </td>
     </tr>
   
     <?php 
  };
 ?>
</section>


  


