<?php
require_once 'connexion.php';

// Récupérer les horaires depuis la base de données
$query = $conn->query("SELECT * FROM horaires");
$horaires = $query->fetch(PDO::FETCH_ASSOC);

// Afficher les horaires
foreach ($horaires as $jour => $horaire) {
    $stmt->execute([
        'jour' => $jour,
        'ouverture_matin' => $horaire['ouverture_matin'],
        'fermeture_matin' => $horaire['fermeture_matin'],
        'ouverture_apres_midi' => $horaire['ouverture_apres_midi'],
        'fermeture_apres_midi' => $horaire['fermeture_apres_midi']
    ]);
}

?>
