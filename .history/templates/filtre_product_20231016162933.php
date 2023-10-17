<?php
require_once '../espace_admin/connexion.php';


// Récupérez les valeurs de filtrage depuis la requête AJAX
$minPrice = $_POST['minPrice'];
$maxPrice = $_POST['maxPrice'];
$minKilometrage = $_POST['minKilometrage'];
$maxKilometrage = $_POST['maxKilometrage'];
$minAnnee = $_POST['minAnnee'];
$maxAnnee = $_POST['maxAnnee'];

// Écrivez votre requête SQL en fonction des filtres
$query = "SELECT * FROM voitures WHERE prix >= :minPrice AND prix <= :maxPrice AND kilométrage >= :minKilometrage AND kilométrage <= :maxKilometrage AND année >= :minAnnee AND année <= :maxAnnee";

// Préparez la requête
$stmt = $bdd->prepare($query);

// Liez les paramètres
$stmt->bindParam(':minPrice', $minPrice, PDO::PARAM_INT);
$stmt->bindParam(':maxPrice', $maxPrice, PDO::PARAM_INT);
$stmt->bindParam(':minKilometrage', $minKilometrage, PDO::PARAM_INT);
$stmt->bindParam(':maxKilometrage', $maxKilometrage, PDO::PARAM_INT);
$stmt->bindParam(':minAnnee', $minAnnee, PDO::PARAM_INT);
$stmt->bindParam(':maxAnnee', $maxAnnee, PDO::PARAM_INT);

// Exécutez la requête
$stmt->execute();

// Récupérez les résultats
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Transformez les résultats en HTML (vous pouvez également utiliser JSON)
$html = '';

foreach ($results as $row) {
    $html .= '<div class="card">';
    $html .= '<h5 class="card-title">Brand:' . $row['brand'] . '</h5>';
    $html .= '<p class="card-text">Prix:' . $row['prix'] . '</p>';
    $html .= '<p class="card-text">Anné:' . $row['année'] . '</p>';
    $html .= '<p class="card-text">Kilométrage:' . $row['kilométrage'] . '</p>';
    $html .= '</div>';
}

echo $html;
?>




























<script src="../js/script.js"></script>
<script src="jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>