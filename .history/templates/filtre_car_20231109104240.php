<?php 
require_once '../espace_admin/connexion.php';

?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container_services p-3 " >
    <div class="content_services d-flex>
        <p>Véhicules</p>
    </div>
       <div class="content_button mt-2">
          <a href="../index.php" class="btn btn-primary">Accueil  <i class="bi bi-backspace"></i></a>
       </div>
    </div>
<div class="container" >
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
        <div class=" row filter_data">
        </div>
       
    </div>
    </div>
</div>
<script src="../js/filter.js"></script>

</body>
</html>