<!-- gestion_horaires.php -->
<?php
require_once 'connexion.php'; // Assurez-vous d'avoir un fichier connexion.php correct
require_once '../templates'
// Manipulation des horaires
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $horaires = $_POST['horaires'];

    // Utilisation d'une transaction pour assurer la cohérence des modifications
    $conn->beginTransaction();

    try {
        // Suppression des anciens horaires
        $conn->exec("DELETE FROM horaires");

        // Insertion des nouveaux horaires
        $stmt = $conn->prepare("INSERT INTO horaires (jour, ouverture_matin, fermeture_matin, ouverture_apres_midi, fermeture_apres_midi) VALUES (:jour, :ouverture_matin, :fermeture_matin, :ouverture_apres_midi, :fermeture_apres_midi)");

        foreach ($horaires as $horaire) {
            $stmt->execute($horaire);
        }

        // Validation des changements
        $conn->commit();

        echo "Les horaires ont été mis à jour avec succès!";
    } catch (PDOException $e) {
        // En cas d'erreur, annuler les changements
        $conn->rollBack();
        echo "Erreur lors de la mise à jour des horaires : " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Horaires</title>
</head>
<body>
    <h2>Gestion des Horaires</h2>
    <form method="post">
        <?php foreach (jours as $jour): ?>
            <div>
                <label><?= $jour ?></label>
                <input type="text" name="horaires[<?= $jour ?>][ouverture_matin]" placeholder="Ouverture Matin">
                <input type="text" name="horaires[<?= $jour ?>][fermeture_matin]" placeholder="Fermeture Matin">
                <input type="text" name="horaires[<?= $jour ?>][ouverture_apres_midi]" placeholder="Ouverture Après-midi">
                <input type="text" name="horaires[<?= $jour ?>][fermeture_apres_midi]" placeholder="Fermeture Après-midi">
            </div>
        <?php endforeach; ?>
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>
