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
   
<div class="wrapper js-filter">
    <div class="row">
        <div class="col-md-3 js-filter-form">
    <div class="prix">
    <h3>Prix</h3>
    <p>Utiluser slider ou entrer min max prix</p>
    <div class="field">
        <span>Min</span>
        <input type="number" class="input-min" value="1500">
    </div>
    <br>
    <div class="field">
        <span>Max</span>
        <input type="number" class="input-max" value="150000">
    </div>
    <br>
    <div class="slider">
        <div class="progress"></div>
    </div>
    <!-- <div class="range-input">
        <input type="range" class="range-min" min="0" max="10000" value="1500">
        <input type="range" class="range-max" min="0" max="10000" value="150000">
    <br>
    </div> -->
    <input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="65000" />
                    <p id="price_show">1000 - 65000</p>
                    <div id="price_range"></div>
                </div>    
   
    <br>
<div class="kilométrage">
    <h3>kilométrage</h3>
    <p>Utiluser slider ou entrer min max prix</p>
    <div class="field">
        <span>Min</span>
        <input type="number" class="input-min" value="1500">
    </div>
    <br>
    <div class="field">
        <span>Max</span>
        <input type="number" class="input-max" value="150000">
    </div>
    <br>
    <div class="slider">
        <div class="progress"></div>
    </div>
    <div class="range-input">
        <input type="range" class="range-min" min="0" max="10000" value="1500">
        <input type="range" class="range-max" min="0" max="10000" value="150000">
    </div>
    </div>
    <br>
  
    <div class="Années">
    <h3>Années</h3>
    <p>Utiluser slider ou entrer min max prix</p>
    <div class="field">
        <span>Min</span>
        <input type="number" class="input-min" value="1500">
    </div>
    <br>
    <div class="field">
        <span>Max</span>
        <input type="number" class="input-max" value="150000">
    </div>
    <br>
    <div class="slider">
        <div class="progress"></div>
    </div>
    <div class="range-input">
        <input type="range" class="range-min" min="0" max="10000" value="1500">
        <input type="range" class="range-max" min="0" max="10000" value="150000">
    </div>
    </div>
    <br>
   </div>
  <script>

$(document).ready(function(){

filter_data();

function filter_data()
{
    $('.filter_data').html('<div id="loading" style="" ></div>');
    var action = 'fetch_data';
    var minimum_price = $('#hidden_minimum_price').val();
    var maximum_price = $('#hidden_maximum_price').val();
    var brand = get_filter('brand');
    var ram = get_filter('ram');
    var storage = get_filter('storage');
    $.ajax({
        url:"fetch_data.php",
        method:"POST",
        data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram, storage:storage},
        success:function(data){
            $('.filter_data').html(data);
        }
    });
}

function get_filter(class_name)
{
    var filter = [];
    $('.'+class_name+':checked').each(function(){
        filter.push($(this).val());
    });
    return filter;
}

$('.common_selector').click(function(){
    filter_data();
});

$('#price_range').slider({
    range:true,
    min:1000,
    max:65000,
    values:[1000, 65000],
    step:500,
    stop:function(event, ui)
    {
        $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
        $('#hidden_minimum_price').val(ui.values[0]);
        $('#hidden_maximum_price').val(ui.values[1]);
        filter_data();
    }
});

});
  </script>
   <div class="col-md-9 d-flex js-filter-content">
   <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
   </div>
   <div class="mt-4 js-filter-pagination">
   <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav> 
</div>
</div>
<script src="../js/script.js"></script>
<script src="jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>




<?php
require_once '../templates/footer.php';
?>