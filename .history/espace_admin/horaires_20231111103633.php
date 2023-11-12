<?php

require_once '../templates/config.php';
require_once ('head_admin.php');
require_once 'horaires_manip.php';


?>

<section class="horaires">
<div class="container">
        <h3>Horaires d'ouverture</h3>
        <ul>
            <?php
            $query = $conn->query("SELECT * FROM horaires");
            $horaires = $query->fetchAll(PDO::FETCH_ASSOC);

            foreach ($horaires as $horaire) {
                echo "<li>{$horaire['jour']} : {$horaire['ouverture_matin']} - {$horaire['fermeture_matin']}, {$horaire['ouverture_apres_midi']} - {$horaire['fermeture_apres_midi']}</li>";
            }
            ?>
        </ul>
    </div>
</section>
