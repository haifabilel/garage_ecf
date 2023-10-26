<?php
 require_once '../templates/config.php';


?>

<section class="horaires">
    <h2>Horaires d'ouverture / fermeture</h2>
    <form >
        <div class="form-group">
            <select class="form-control" name="jour"></select>
            <?php foreach(jours as $k=> $jours); ?>
            <option value="<?= $k ?>"><?= $jours ?></option>
            
        </div>
    </form>
</section>