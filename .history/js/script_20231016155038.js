$(document).ready(function() {
    // Écoutez les changements dans les champs de saisie Min et Max
    $('.input-min, .input-max').on('input', function() {
        // Obtenez les valeurs actuelles
        var minPrice = $('.input-min').val();
        var maxPrice = $('.input-max').val();

        // Envoyez ces valeurs au serveur pour le filtrage
        filterByPrice(minPrice, maxPrice);
    });
    
    // Écoutez les changements dans les champs de saisie du slider (range)
    $('.range-min, .range-max').on('input', function() {
        // Obtenez les valeurs actuelles
        var minPrice = $('.range-min').val();
        var maxPrice = $('.range-max').val();

        // Mettez à jour les champs de saisie Min et Max
        $('.input-min').val(minPrice);
        $('.input-max').val(maxPrice);

        // Envoyez ces valeurs au serveur pour le filtrage
        filterByPrice(minPrice, maxPrice);
    });

    function filterByPrice(minPrice, maxPrice) {
        // Vous devrez spécifier l'URL de votre endpoint de filtrage
        var filterURL = 'http://localhost/garage_ecf/templates/vehicules.php';
        
        // Utilisez AJAX pour envoyer les données au serveur
        $.ajax({
            type: 'POST',
            url: filterURL,
            data: {
                minPrice: minPrice,
                maxPrice: maxPrice
            },
            success: function(data) {
                // Traitez ici les données filtrées et mettez à jour votre interface utilisateur
                console.log(data); // Cela dépendra de la réponse du serveur
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
});
