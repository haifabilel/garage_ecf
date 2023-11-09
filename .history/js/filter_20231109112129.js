$(document).ready(function(){
    filter_data();
    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        $.ajax({
            url:"vehicules",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }
    $('#price_range').slider({
        range:true,
        min:50,
        max:5000,
        values:[50, 5000],
        step:50,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });
});
//    $('#Kilométrage_range').slider({
//         range:true,
//         min:5000,
//         max:250000,
//         values:[5000, 250000],
//         step:500,
//         stop:function(event, ui)
//         {
//             $('#kilo_show').html(ui.values[0] + ' - ' + ui.values[1]);
//             $('#hidden_minimum_price').val(ui.values[0]);
//             $('#hidden_maximum_price').val(ui.values[1]);
//             filter_data();
//         }
//     }) 
//     $('#année_range').slider({
//         range:true,
//         min:1990,
//         max:2022,
//         values:[1990, 2022],
//         step:1,
//         stop:function(event, ui)
//         {
//             $('#année_show').html(ui.values[0] + ' - ' + ui.values[1]);
//             $('#hidden_minimum_price').val(ui.values[0]);
//             $('#hidden_maximum_price').val(ui.values[1]);
//             filter_data();
//         }
//     }) 