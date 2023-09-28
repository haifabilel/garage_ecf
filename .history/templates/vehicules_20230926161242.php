<?php
require_once '../espace_admin/connexion.php';
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
        
         <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet"/>
         <!--  carrousel -->
         <link href="https://gosnippets.com/full-screen/bootstrap-carousel-with-cards-in-3-columns" rel="canonical">
            <!-- Bootstrap icons CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css"> 
        <!-- font awesome cdn link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
          
            <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <!-- CSS Link -->
        <link rel="stylesheet" href="../css/style.css">
    </head>
   
<div class="container-filter">
    <div class="row">
        <h3 align="center" >Vehicules d'occasions</h3>
        <div class="col-md-3">
            <div class="list-group">
                <h4>Prix</h4>
                <input type="hidden" id="hidden_minimum_price" value="0">
                <input type="hidden" id="hidden_maximum_price" value="70000">
                <p id="price_show">1000 - 70000</p>
                <div id="price_range"></div>
            </div>
            <div class="list-group">
                <h4>Kilométrage</h4>
                <input type="hidden" id="hidden_minimum_price" value="0">
                <input type="hidden" id="hidden_maximum_price" value="70000">
                <p id="price_show">5000 - 400000</p>
                <div id="price_range"></div>
            </div>
            <div class="list-group">
                <h4>Année</h4>
                <input type="hidden" id="hidden_minimum_price" value="0">
                <input type="hidden" id="hidden_maximum_price" value="70000">
                <p id="price_show">2000 - 2023</p>
                <div id="price_range"></div>
            </div>
            <div class="list-group">
                <h4>Année</h4>
                <input type="hidden" id="hidden_minimum_price" value="0">
                <input type="hidden" id="hidden_maximum_price" value="70000">
                <p id="price_show">2000 - 2023</p>
                <div id="price_range"></div>
            </div>
       
        </div>
   
   
   
    </div>
</div>






<?php
require_once '../templates/footer.php';
?>