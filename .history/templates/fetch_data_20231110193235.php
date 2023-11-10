<?php
require_once '../espace_admin/connexion.php';
require_once 'head.php';

if (!isset($_POST["action"])) {
?>
<div class="container_services p-3 ">
    <div class="content_services d-flex">
        <p>Véhicules</p>
    </div>
    <div class="content_button mt-2">
        <a href="../index.php" class="btn btn-primary mx-2">Accueil  <i class="bi bi-backspace"></i></a>
        <a href="fetch_data.php" class="btn btn-primary">Réinitialiser filtre <i class="fa-solid fa-arrows-rotate"></i></a>
    </div>
</div>

<section class="filtre_car w-100">
    <?php require_once 'filtre_car.php' ?>
    <div class="row ">
      
<?php
}

if (isset($_POST["action"])) {
    $query = "SELECT * FROM voitures WHERE 1";

    if (isset($_POST["minimum_année"], $_POST["maximum_année"]) && !empty($_POST["minimum_année"]) && !empty($_POST["maximum_année"])) {
        $query .= " AND année BETWEEN '" . $_POST["minimum_année"] . "' AND '" . $_POST["maximum_année"] . "'";
    }

    if (isset($_POST["minimum_kilometrage"], $_POST["maximum_kilometrage"]) && !empty($_POST["minimum_kilometrage"]) && !empty($_POST["maximum_kilometrage"])) {
        $query .= " AND kilométrage BETWEEN '" . $_POST["minimum_kilometrage"] . "' AND '" . $_POST["maximum_kilometrage"] . "'";
    }

    if (isset($_POST["minimum_prix"], $_POST["maximum_prix"]) && !empty($_POST["minimum_prix"]) && !empty($_POST["maximum_prix"])) {
        $query .= " AND prix BETWEEN '" . $_POST["minimum_prix"] . "' AND '" . $_POST["maximum_prix"] . "'";
    }

    $result = $conn->query($query);

    if ($result->rowCount() > 0) {
        while ($user = $result->fetch()) {
?>
            <div class="col-lg-4 d-flex">
                <div class="card_car">
                    <img class="card-img-top img-fluid" src="../uploads/<?php echo $user['image']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $user['brand']; ?></h5>
                        <p class="card-text">Prix: <?php echo $user['prix']; ?></p>
                        <p class="card-text">kilométrage: <?php echo $user['kilométrage']; ?></p>
                        <p class="card-text">Année: <?php echo $user['année']; ?></p>
                        <a href="contact_car.php?id=<?= $user['id'] ?>" type="submit" class="btn btn-primary mx-2 ">Contacter</a>
                        <a href="details_car.php?id=<?= $user['id'] ?>" type="submit" class="btn btn-primary mx-2">Détails</a>
                    </div>
                </div>
            </div>
<?php
        }
    } else {
        $output = '<h3>No Data Found</h3>';
    }
}
?>

</section>

<script src="../js/script.js"></script>
<?php
// require_once '../templates/footer.php';
?>
