<?php
require_once 'head.php';




?>
<footer class="d-flex flex-wrap justify-content-between align-items-center border-top">
    <div class="contact-info col-md-6 d-flex align-items-center">
        <div>
            <h5>CONTACTER-NOUS</h5>
            <p>Adresse: 06 Rue de Paris 94000</p>
            <p>Email: vinccentparrot@gmail.com</p>
            <p>Téléphone: 0600000000</p>
        </div>
        <ul class="social-icons nav col-md-4 d-flex">
            <li><a href="#"><i class="fa-brands fa-github" style="color: #ffffff;"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-twitter" style="color: #fafdff;"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-facebook" style="color: #ffffff;"></i></a></li>
        </ul>
    </div>

    <div class="reviews-section col-md-3">
        <h5>SATISFAIT DE NOS SERVICES ?</h5>
        <a href="../templates/reviews.php" type="button" class="btn btn-primary">Ajouter un avis</a>
    </div>

    <div class="horaires-section col-md-3">
        <?php require_once 'fetch_horaires.php' ?>
        <span class="mb-3 mb-md-0">© 2023 Company, Inc</span>
    </div>
</footer>
