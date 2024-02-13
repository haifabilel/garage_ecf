<?php
require_once '../espace_admin/connexion.php';
require_once 'head.php';

if (!isset($_POST["action"])) {
?>
<div class="container_header p-3 " >
    <div class="content_header d-flex">
        <p class="car_titre">Véhicules</p>
    </div>
    <div class="content_button mt-2">
        <a href="../index.php" class="btn btn-primary car mx-2">Accueil  <i class="bi bi-backspace"></i></a>
        <a href="fetch_data.php" class="btn btn-primary car mx-2">Réinitialiser filtre <i class="fa-solid fa-arrows-rotate"></i></a>
    </div>
</div>
<section class="filtre_car">
    <?php require_once 'filtre_car.php' ?>
    <div class="row ">
      
<?php
}

if (isset($_POST["action"])) {
    $query = "SELECT * FROM voitures WHERE 1";

    if (isset($_POST["minimum_année"], $_POST["maximum_année"]) && !empty($_POST["minimum_année"]) && !empty($_POST["maximum_année"])) {
        $query .= " AND annee BETWEEN '" . $_POST["minimum_année"] . "' AND '" . $_POST["maximum_année"] . "'";
    }

    if (isset($_POST["minimum_kilometrage"], $_POST["maximum_kilometrage"]) && !empty($_POST["minimum_kilometrage"]) && !empty($_POST["maximum_kilometrage"])) {
        $query .= " AND kilometrage BETWEEN '" . $_POST["minimum_kilometrage"] . "' AND '" . $_POST["maximum_kilometrage"] . "'";
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
                    <div class="card-head">
                        <h5 class="card-title1 text-center"><?php echo $user['brand']; ?></h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text1">Prix: <?php echo $user['prix']; ?></p>
                        <p class="card-text1">kilométrage: <?php echo $user['kilometrage']; ?></p>
                        <p class="card-text1">Année: <?php echo $user['annee']; ?></p>
                    </div>
                        <a href="contact_car.php?id=<?= $user['id'] ?>" type="submit" class="btn btn-primary car mx-2 ">Contacter</a>
                        <a href="details_car.php?id=<?= $user['id'] ?>" type="submit" class="btn btn-primary car mx-2">Détails</a>
                    </div>
                </div>
            </div>
            <?php
            }
            } else {
            echo '<h3>No Data Found</h3>';
            }
           require_once '../templates/footer_car.php'; 
         }
     ?>
</section>

<script src="../js/script.js"></script>
