<?php 
require_once '../espace_admin/connexion.php';

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
<div class="container_fil" >
    <div class="row filter_row">
        <div class="col-md-3 filtre_col">                                
            <div class="list-group"  >
                <h3 class="filtre_title">Price</h3>
                <input type="hidden" id="hidden_minimum_price" value="1500" />
                <input type="hidden" id="hidden_maximum_price" value="50000" />
                <p id="price_show">1500 - 50000</p>
                <div id="price_range"></div>
            </div>     
            <div class="list-group">
                <h3 class="filtre_title">Kilométrage</h3>
                <input type="hidden" id="hidden_minimum_price" value="5000" />
                <input type="hidden" id="hidden_maximum_price" value="250000" />
                <p id="kilo_show">5000 - 250000</p>
                <div id="Kilométrage_range"></div>
            </div>  
            <div class="list-group">
                <h3 class="filtre_title">Année</h3>
                <input type="hidden" id="hidden_minimum_price" value="1990" />
                <input type="hidden" id="hidden_maximum_price" value="2022" />
                <p id="année_show">1990 - 2022</p>
                <div id="année_range"></div>
            </div>             
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