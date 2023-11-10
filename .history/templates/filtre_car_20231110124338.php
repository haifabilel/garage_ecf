<?php 
require_once '../espace_admin/connexion.php';

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Assurez-vous que filter.js est inclus après jQuery et Bootstrap -->
    <script src="../js/filter.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
    
        <div class="col-md-3">                                
            <div class="list-group">
                <h3>Prix</h3>
                <input type="hidden" id="hidden_minimum_price" value="1500" />
                <input type="hidden" id="hidden_maximum_price" value="50000" />
                <p id="price_show">1500 - 50000</p>
                <div id="price_range"></div>
            </div>                
        </div>
        <div class="col-md-3">                                
            <div class="list-group">
                <h3>kilométrage</h3>
                <input type="hidden" id="hidden_minimum_kilometrage" value="15000" />
                <input type="hidden" id="hidden_maximum_kilometrage" value="250000" />
                <p id="kilometrage_show">15000 - 250000</p>
                <div id="kilometrage_range"></div>
            </div>                
        </div>
        <div class="col-md-3">                                
            <div class="list-group">
                <h3>Année</h3>
                <input type="hidden" id="hidden_minimum_année" value="11990" />
                <input type="hidden" id="hidden_maximum_année" value="2022" />
                <p id="année_show">1990 - 2022</p>
                <div id="année_range"></div>
            </div>                
        </div>

        <div class="col-md-9">
            <br />
           <div class="row filter_data">
        </div>
    </div>
    </div>
</div>
<script src="../js/filter.js"></script>

</body>
</html>