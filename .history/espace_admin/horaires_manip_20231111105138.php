<!-- gestion_horaires.php -->
<?php
require_once 'connexion.php';

// Récupérer les horaires depuis la base de données
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST['horaires'] as $id => $horaire) {
        $ouvertureMatin = $horaire['ouverture_matin'];
        $fermetureMatin = $horaire['fermeture_matin'];
        $ouvertureApresMidi = $horaire['ouverture_apres_midi'];
        $fermetureApresMidi = $horaire['fermeture_apres_midi'];

        $conn->query("UPDATE horaires SET ouverture_matin = '$ouvertureMatin', fermeture_matin = '$fermetureMatin', ouverture_apres_midi = '$ouvertureApresMidi', fermeture_apres_midi = '$fermetureApresMidi' WHERE id = $id");
    }
}

// Récupérer les horaires depuis la base de données
$query = $conn->query("SELECT * FROM horaires");
$horaires = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!-- gestion_horaires.php -->
<h2>Gestion des Horaires</h2>
<form method="post" action="ho">
    <?php foreach ($horaires as $horaire): ?>
        <div>
            <label for="ouverture_matin_<?= $horaire['id'] ?>">Ouverture Matin :</label>
            <input type="text" name="horaires[<?= $horaire['id'] ?>][ouverture_matin]" value="<?= $horaire['ouverture_matin'] ?>">
            <label for="fermeture_matin_<?= $horaire['id'] ?>">Fermeture Matin :</label>
            <input type="text" name="horaires[<?= $horaire['id'] ?>][fermeture_matin]" value="<?= $horaire['fermeture_matin'] ?>">
            <label for="ouverture_apres_midi_<?= $horaire['id'] ?>">Ouverture Après-midi :</label>
            <input type="text" name="horaires[<?= $horaire['id'] ?>][ouverture_apres_midi]" value="<?= $horaire['ouverture_apres_midi'] ?>">
            <label for="fermeture_apres_midi_<?= $horaire['id'] ?>">Fermeture Après-midi :</label>
            <input type="text" name="horaires[<?= $horaire['id'] ?>][fermeture_apres_midi]" value="<?= $horaire['fermeture_apres_midi'] ?>">
        </div>
    <?php endforeach; ?>
    <button type="submit">Enregistrer</button>
</form>
