<?php
require_once 'connexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Traitement du formulaire de mise à jour
    $jour = $_POST['jour'];
    $jourFermeture = $_POST['jour_fermeture'];

    // Préparation de la requête SQL pour la mise à jour
    $stmt = $conn->prepare("UPDATE horaires SET jour_fermeture = :jour_fermeture WHERE jour = :jour");
    
    // Exécution de la requête
    $stmt->execute(['jour' => $jour, 'jour_fermeture' => $jourFermeture]);

    echo "Jour de fermeture mis à jour avec succès.";
}

// Récupération des horaires depuis la base de données
$query = $conn->query("SELECT * FROM horaires");
$horaires = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à jour des Horaires</title>
</head>
<body>
    <h2>Mise à jour des Jours de Fermeture</h2>
    <form method="post">
        <label for="jour">Jour d'ouverture :</label>
        <select name="jour" id="jour">
            <?php foreach ($horaires as $horaire): ?>
                <option value="<?= $horaire['jour'] ?>"><?= $horaire['jour'] ?></option>
                <option value="<?= $horaire['jour'] ?>"><?= $horaire['jour'] ?></option>
            <?php endforeach; ?>
        </select>

        <label for="jour_fermeture">Jour de fermeture :</label>
        <input type="text" name="jour_fermeture" id="jour_fermeture" required>

        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>
