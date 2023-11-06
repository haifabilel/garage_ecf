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
$stmt = $conn->prepare($query);

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
