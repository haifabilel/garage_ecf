<!-- affichage_horaires.php -->
<?php
require_once 'connexion.php'; 
require_once 'head_admin.php';
// Récupération des horaires depuis la base de données
$query = $conn->query("SELECT * FROM horaires");
$horaires = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<section>
    <table border="1">
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
                <td><?= $horaire['ouverture_matin'] ?></td>
                <td><?= $horaire['fermeture_matin'] ?></td>
                <td><?= $horaire['ouverture_apres_midi'] ?></td>
                <td><?= $horaire['fermeture_apres_midi'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</section>