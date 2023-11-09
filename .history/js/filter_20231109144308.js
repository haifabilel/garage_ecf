//systéme filtre véhicule
$(document).ready(function(){
    filter_data();
    function filter_data()
    {
      
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        $.ajax({
            url:"vehicules.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, ,maximum_price:maximum_price},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }
    $('#price_range').slider({
        range:true,
        min:1500,
        max:50000,
        values:[1500, 50000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });
       $('#kilométrage_range').slider({
        range:true,
        min:15000,
        max:250000,
        values:[15000, 250000],
        step:500,
        stop:function(event, ui)
        {
            $('#kilométrage_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_kilométrage').val(ui.values[0]);
            $('#hidden_maximum_kilométrage').val(ui.values[1]);
            filter_data();
        }
    }) 
    $('#Année_range').slider({
        range:true,
        min:1990,
        max:2022,
        values:[1990, 2022],
        step:1,
        stop:function(event, ui)
        {
            $('#Année_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_année ').val(ui.values[0]);
            $('#hidden_maximum_année ').val(ui.values[1]);
            filter_data();
        }
    }) 
});
