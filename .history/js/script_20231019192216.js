// ----------------star rating-----------------

// executer le button review
var rating_data = 0;

$('#add_review').click(function(){

    $('#review_modal').modal('show');

});
//Changeer la couleur de l'etoile en passant le curseur
$(document).on('mouseenter', '.submit_star', function(){

    var rating = $(this).data('rating');

    reset_background();

    for(var count = 1; count <= rating; count++)
    {

        $('#submit_star_'+count).addClass('text-primary');

    }

});
//Réinitialiser le background color de l'étoile
function reset_background()
{
    for(var count = 1; count <= 5; count++)
    {

        $('#submit_star_'+count).addClass('star-light');

        $('#submit_star_'+count).removeClass('text-primary');

    }
}

$(document).on('mouseleave', '.submit_star', function(){

    reset_background();

    for(var count = 1; count <= rating_data; count++)
    {

        $('#submit_star_'+count).removeClass('star-light');

        $('#submit_star_'+count).addClass('text-primary');
    }

});

$(document).on('click', '.submit_star', function(){

    rating_data = $(this).data('rating');

});
//enregitrer le choix de nombre d'étoile
$('#save_review').click(function(){

    var user_name = $('#user_name').val();

    var user_review = $('#user_review').val();

    if(user_name == '' || user_review == '')
    {
        alert("Veuillez remplir tous les champs");
        return false;
    }
    else
    {

        $.ajax({
            url:"reviews.php",
            method:"POST",
            data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
            success:function(data)
            {
                $('#review_modal').modal('hide');

                load_rating_data();

                alert(data);
            }
        })
    }
});
    // Récuperer donner de la bdd
    load_rating_data();

    function load_rating_data()
    {
        $.ajax({
            url:"submit_rating.php",
            method:"POST",
            data:{action:'load_data'},
            dataType:"JSON",
            success:function(data)
            {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 0; count < data.review_data.length; count++)
                    {
                        html += '<div class="row mb-3">';

                        html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                        html += '<div class="col-sm-11">';

                        html += '<div class="card">';

                        html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '<br />';

                        html += data.review_data[count].user_review;

                        html += '</div>';

                        html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                        html += '</div>';

                        html += '</div>';

                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }































// -----------------filtre-----------------
// document.addEventListener('DOMContentLoaded', function() {
//     // Écoutez le clic sur le bouton de filtrage
//     document.getElementById('filter-button').addEventListener('click', function() {
//         // Récupérez les valeurs des filtres (prix, kilométrage, année)
//         var minPrice = document.querySelector('.prix .input-min').value;
//         var maxPrice = document.querySelector('.prix .input-max').value;
//         var minKilometrage = document.querySelector('.kilométrage .input-min').value;
//         var maxKilometrage = document.querySelector('.kilométrage .input-max').value;
//         var minAnnee = document.querySelector('.Années .input-min').value;
//         var maxAnnee = document.querySelector('.Années .input-max').value;

//         // Créez une instance XMLHttpRequest (XHR)
//         var xhr = new XMLHttpRequest();

//         // Configurez la requête XHR
//         xhr.open('POST', 'votre_script_de_filtrage.php', true);
//         xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

//         // Gérez la réponse
//         xhr.onload = function() {
//             if (xhr.status === 200) {
//                 // Traitez ici les données renvoyées par le backend
//                 // Mettez à jour l'interface utilisateur avec les résultats
//                 document.getElementById('results-container').innerHTML = xhr.responseText; // Vous devrez adapter ceci en fonction du format de vos résultats
//             } else {
//                 console.log('Erreur de la requête AJAX : ' + xhr.status);
//             }
//         };

//         // Gérez les erreurs réseau
//         xhr.onerror = function() {
//             console.log('Erreur réseau lors de la requête AJAX');
//         };

//         // Envoyez les données de filtrage au backend
//         var params = 'minPrice=' + minPrice + '&maxPrice=' + maxPrice + '&minKilometrage=' + minKilometrage + '&maxKilometrage=' + maxKilometrage + '&minAnnee=' + minAnnee + '&maxAnnee=' + maxAnnee;
//         xhr.send(params);
//     });
// });
