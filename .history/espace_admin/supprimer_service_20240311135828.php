<?php
require_once ('connexion.php');
session_start();

//recupération de l'id
if(isset($_GET['id']) AND !empty($_GET['id'])){
    //Caster avec int
    $id =(int)$_GET['id'];
    $recupCard = $conn->prepare('SELECT * FROM services WHERE id = :id');
    //Sécuriser contre les injections sql
    $recupCard->bindValue(":id", $id, PDO::PARAM_INT);
    $recupCard->execute();
    if($recupCard->rowCount() > 0){
        $supprimCard = $conn->prepare('DELETE FROM services WHERE id = ?');
        $supprimCard->execute(array($id));
        header('location:fetch_service.php');
    }
}

?>
<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>