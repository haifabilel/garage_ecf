// -----------------reviews clients--------------
$(document).ready(function(){

    
})






























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
