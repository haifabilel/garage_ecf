// ----------------star rating-----------------
// executer le button review
$(document).ready(function(){
    
})
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
//     load_rating_data(); 
// function load_rating_data(){
//     $.ajax({
//         url:"reviews.php",
//         method:"POST",
//         data:{action:'load_data'},
//         dataType:"JSON",
//         success:function(data)
//         {
//             $('#average_rating').text(data.average_rating);
//                 $('#total_review').text(data.total_review);
//                 var count_star = 0;
                
//         }
//     })
// }






























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
