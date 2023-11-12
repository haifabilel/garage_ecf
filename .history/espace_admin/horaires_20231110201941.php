<?php
require_once '../templates/config.php';
require_once ('head_admin.php');

// Récupérer les horaires depuis la base de données
$query = $conn->query("SELECT * FROM horaires");
$horaires = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="horaires">
    <h2>Horaires d'ouverture / fermeture</h2>
    <form>
        <div class="form-group">
            <select class="form-control" name="jour">
                <?php foreach ($horaires as $horaire): ?>
                    <option value="<?= $horaire['id'] ?>"><?= $horaire['jour'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </form>
</section>
