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
require_once
require_once '../templates/horaire_config.php';
require_once ('head_admin.php');

// Récupérer les horaires depuis la base de données
$query = $conn->query("SELECT * FROM horaires");
$horaires = $query->fetchAll(PDO::FETCH_ASSOC);

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jour = $_POST['jour'];
    $jourFermeture = $_POST['jour_fermeture'];

    // Enregistrez le jour de fermeture dans la base de données
    $conn->query("UPDATE horaires SET jour_fermeture = '$jourFermeture' WHERE id = $jour");
}
?>

<section class="horaires">
    <h2>Horaires d'ouverture / fermeture</h2>
    <form method="post">
        <div class="form-group">
            <label for="jour">Jour :</label>
            <select class="form-control" name="jour">
                <?php foreach ($horaires as $horaire): ?>
                    <option value="<?= $horaire['id'] ?>"><?= $horaire['jour'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="jour_fermeture">Jour de fermeture :</label>
            <input type="text" class="form-control" name="jour_fermeture">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</section>
