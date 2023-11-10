//systéme filtre véhicule
$(document).ready(function(){
    filter_data();
    function filter_data()
    {
        
        var action = 'fetch_data';
        var minimum_pr = $('#hidden_minimum_pr').val();
        var maximum_pr = $('#hidden_maximum_pr').val();
        var minimum_kilometrage = $('#hidden_minimum_kilometrage').val();
        var maximum_kilometrage = $('#hidden_maximum_kilometrage').val();
        var minimum_année = $('#hidden_minimum_année').val();
        var maximum_année = $('#hidden_maximum_année').val();
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_pr:minimum_pr, maximum_pr:maximum_pr,
                minimum_kilometrage:minimum_kilometrage, maximum_kilometrage:maximum_kilometrage,
                minimum_année:minimum_année, maximum_année:maximum_année},
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
      $('#kilometrage_range').slider({
        range:true,
        min:5000,
        max:250000,
        values:[5000, 250000],
        step:500,
        stop:function(event, ui)
        {
            $('#kilometrage_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_kilometrage').val(ui.values[0]);
            $('#hidden_maximum_kilometrage').val(ui.values[1]);
            filter_data();
        }
    }) 
    $('#année_range').slider({
        range:true,
        min:1990,
        max:2022,
        values:[1990, 2022],
        step:1,
        stop:function(event, ui)
        {
            $('#année_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_année').val(ui.values[0]);
            $('#hidden_maximum_année').val(ui.values[1]);
            filter_data();
        }
    }) 
});
