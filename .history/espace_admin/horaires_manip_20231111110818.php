<!-- gestion_horaires.php -->
<?php
require_once 'connexion.php'; // Assurez-vous d'avoir un fichier connexion.php correct
require_once '../templates/horaire_config.php';
// Manipulation des horaires

// Modifier les horaires dans la base de données
$newHoraires = [
    'Lundi' => [
        'ouverture_matin' => '08:00',
        'fermeture_matin' => '12:00',
        'ouverture_apres_midi' => '14:00',
        'fermeture_apres_midi' => '19:00'
    ],
    'Lundi' => [
        'ouverture_matin' => '08:00',
        'fermeture_matin' => '12:00',
        'ouverture_apres_midi' => '14:00',
        'fermeture_apres_midi' => '19:00'
    ],
];

// Préparez la requête pour la mise à jour
$stmt = $conn->prepare("UPDATE horaires SET ouverture_matin = :ouverture_matin, fermeture_matin = :fermeture_matin, ouverture_apres_midi = :ouverture_apres_midi, fermeture_apres_midi = :fermeture_apres_midi WHERE jour = :jour");

// Modifier les horaires
foreach ($newHoraires as $jour => $horaire) {
    $stmt->execute([
        'jour' => $jour,
        'ouverture_matin' => $horaire['ouverture_matin'],
        'fermeture_matin' => $horaire['fermeture_matin'],
        'ouverture_apres_midi' => $horaire['ouverture_apres_midi'],
        'fermeture_apres_midi' => $horaire['fermeture_apres_midi']
    ]);
}

echo "Les horaires ont été mis à jour avec succès.";

// Fermer la connexion
$conn = null;
?>
