<?php
require_once 'connexion.php';

// Récupérer les horaires depuis la base de données
$query = $conn->query("SELECT * FROM horaires");
$horaires = $query->fetch(PDO::FETCH_ASSOC);

// Afficher les horaires
foreach ($horaires as $jour => $horaire) {
    echo "Jour: $jour - Ouverture matin: {$horaire['ouverture_matin']} - Fermeture matin: {$horaire['fermeture_matin']} - Ouverture après-midi: {$horaire['ouverture_apres_midi']} - Fermeture après-midi: {$horaire['fermeture_apres_midi']}<br>";
}

// Fermer la connexion
$conn = null;
?>
