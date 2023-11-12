<div class="container_services p-3 ">
    <div class="content_services d-flex">
        <p>Horaires</p>
    </div>
       <div class="content_button mt-2">
          <button class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#ServiceAdmin">Ajouter services <i class="fa-solid fa-circle-plus" style="color: #ffffff;"></i> </button>
          <a href="admin_page.php" class="btn btn-primary">Back  <i class="bi bi-backspace"></i></a>
       </div>
    </div>
    <?php
require_once 'connexion.php';
require_once '../templates/horaire_config.php';
require_once ('head_admin.php');

<!-- gestion_horaires.php -->
<?php
require_once 'config.php';

// Récupérer les horaires depuis la base de données
$query = $conn->query("SELECT * FROM horaires");
$horaires = $query->fetchAll(PDO::FETCH_ASSOC);

// Traitement du formulaire pour mettre à jour les horaires
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($horaires as $horaire) {
        $id = $horaire['id'];

        $ouvertureMatin = $_POST["ouverture_matin_$id"];
        $fermetureMatin = $_POST["fermeture_matin_$id"];
        $ouvertureApresMidi = $_POST["ouverture_apres_midi_$id"];
        $fermetureApresMidi = $_POST["fermeture_apres_midi_$id"];

        $conn->query("UPDATE horaires SET ouverture_matin = '$ouvertureMatin', fermeture_matin = '$fermetureMatin', ouverture_apres_midi = '$ouvertureApresMidi', fermeture_apres_midi = '$fermetureApresMidi' WHERE id = $id");
    }
}

?>

<h2>Gestion des Horaires</h2>
<form method="post">
    <table>
        <tr>
            <th>Jour</th>
            <th>Ouverture Matin</th>
            <th>Fermeture Matin</th>
            <th>Ouverture Après-midi</th>
            <th>Fermeture Après-midi</th>
        </tr>
        <?php foreach ($horaires as $horaire): ?>
            <tr>
                <td><?= $horaire['jour'] ?></td>
                <td><input type="text" name="ouverture_matin_<?= $horaire['id'] ?>" value="<?= $horaire['ouverture_matin'] ?>"></td>
                <td><input type="text" name="fermeture_matin_<?= $horaire['id'] ?>" value="<?= $horaire['fermeture_matin'] ?>"></td>
                <td><input type="text" name="ouverture_apres_midi_<?= $horaire['id'] ?>" value="<?= $horaire['ouverture_apres_midi'] ?>"></td>
                <td><input type="text" name="fermeture_apres_midi_<?= $horaire['id'] ?>" value="<?= $horaire['fermeture_apres_midi'] ?>"></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <button type="submit">Enregistrer</button>
</form>
