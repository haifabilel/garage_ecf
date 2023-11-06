<?php
require_once('../espace_admin/connexion.php');
if(isset($_POST["action"]))
{
    $query = $conn->query("SELECT * FROM voitures");
    if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
    {
        $query = $conn->query("SELECT * FROM voitures WHERE prix BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'");
    }
    $total_row =ROW ($query);
    $output = '';
    if($total_row > 0){
        while ($row = $query ->fetch_object()) {
            $output .= '
            <div class="col-sm-4 col-lg-3 col-md-3">
                <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:320px;">
                    <img src="images/'. $row->image .'" alt="" class="img-responsive" >
                    <p align="center"><strong><a href="#">'. $row->name .'</a></strong></p>
                    <h4 style="text-align:center;" class="text-danger" >'. $row->price .'</h4>
                </div>
            </div>';
        }
    }else{
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}
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
    <div class="row filter_row"style="" >
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
        <!-- <div class="col-md-9">
            <br />
           <div class="row filter_data">
        </div> -->
    </div>
    </div>
</div>

<script src="../js/filter.js"></script>
</body>
</html>