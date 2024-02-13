<?php
require_once ('head.php');
require_once ('../espace_admin/connexion.php');

if(isset($_GET['id_details'])) {
    $id_details = (int)$_GET['id_details'];
    $req = $conn->prepare("SELECT * FROM details_voitures WHERE id_details = :id_details");
    $req->bindValue(':id_details', $id_details, PDO::PARAM_INT);
    $req->execute();
    $row = $req->fetch(PDO::FETCH_ASSOC);

    if(isset($_POST['Update'])){
        extract($_POST);
        
        // Assurez-vous que les champs du formulaire correspondent exactement aux clés utilisées dans $_POST
        if(isset($caracteristique) && isset($liste_equipements)
            && isset($options_installes) && isset($_FILES['image1']) && isset($_FILES['image2']) && isset($_FILES['image3'])){
            
            // Assurez-vous que les noms des champs dans la base de données correspondent aux noms utilisés dans votre requête UPDATE
            $req = $conn->prepare("UPDATE details_voitures SET caracteristique = :caracteristique, 
            liste_equipements = :liste_equipements, options_installes = :options_installes, 
            image1 = :image1, image2 = :image2, image3 = :image3 WHERE id_details = :id_details");

            $req->bindValue(':caracteristique', $caracteristique, PDO::PARAM_STR);
            $req->bindValue(':liste_equipements', $liste_equipements, PDO::PARAM_STR);
            $req->bindValue(':options_installes', $options_installes, PDO::PARAM_STR);
            $req->bindValue(':image1', $_FILES['image1']['name'], PDO::PARAM_STR);
            $req->bindValue(':image2', $_FILES['image2']['name'], PDO::PARAM_STR);
            $req->bindValue(':image3', $_FILES['image3']['name'], PDO::PARAM_STR);
            $req->bindValue(':id_details', $id_details, PDO::PARAM_INT);

            $req->execute();

            if($req){
                // Redirection après la mise à jour
                header('location:details_car.php');
                exit(); // Arrête l'exécution du script après la redirection
            }
        }
    }
}
?>
<section></section>
<form method="POST" enctype="multipart/form-data">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title fs-5" id="exampleModalToggleLabel">Update détails</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <input type="text" name="caracteristique" class="form-control" placeholder="Caractéristique" required><br>
            </div>
            <div class="form-group">
                <input type="text" name="liste_equipements" class="form-control" placeholder="Liste des équipements" required><br>
            </div>
            <div class="form-group">
                <input type="text" name="options_installes" class="form-control" placeholder="Options installés" required><br>
            </div>
            <div class="form-group mb-3">
                <input type="file" name="image1" class="form-control">
            </div>
            <div class="form-group mb-3">
                <input type="file" name="image2" class="form-control">
            </div>
            <div class="form-group mb-3">
                <input type="file" name="image3" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="Update" class="btn btn-primary">Valider</button>
        </div>
    </div>
</form>
