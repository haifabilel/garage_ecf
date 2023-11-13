<?php


?>
<!DOCTYPE html>
<html lang="fr">
 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>garage</title>
        <meta name="description" content="Notre garage est parfaitement équipé, le Garage V.Parrot entretient vos véhicules et propose également des occasions toutes marques garanties. Il assure également le diagnostic et la réparation
         toutes marques de vos véhicules.">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <!--  carrousel -->
         <link
         rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
            <!-- Bootstrap icons CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css"> 
        <!-- font awesome cdn link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
          
            <!-- Bootstrap -->
            
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <!-- CSS Link -->
        <link rel="stylesheet" href="./css/style.css">
    </head>
<!-- ------fetch reviews----- -->
<?php
require_once './templates/header.php';
require_once './templates/home.php';
require_once './templates/services.php';
require_once './templates/fetch_avis.php';

?>
<footer class="d-flex flex-wrap justify-content-around align-items-center border-top">
    <div class="contact-info col-md-5 d-flex align-items-center">
        <div class="contact-infos">
            <h5>CONTACTER-NOUS</h5>
            <p>Adresse: 06 Rue de Paris 94000</p>
            <p>Email: vinccentparrot@gmail.com</p>
            <p>Téléphone: 0600000000</p>
        </div>
       
    </div>

    <div class="reviews-section col-md-4">
        <h5>SATISFAIT DE NOS SERVICES ?</h5>
        <a href="../templates/reviews.php" type="button" class="btn btn-primary footer">Ajouter un avis</a>
    </div>

    <div class="horaires-section col-md-3">
    <h5>NOS HORAIRES</h5>
        <?php require_once './templates/fetch_horaires.php' ?>
       
    </div>
    <span class="mb-3 mb-md-0 ">© 2023 Copyright: Garage Parrot</span>
   
</footer>

   