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

                rating_data();

                alert(data);
            }
        })
    }
});
// Affichage mot de passe dans le formulaire login
function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var eyeIcon = document.getElementById("eye-icon");
  
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      eyeIcon.className = "fa fa-eye-slash";
    } else {
      passwordInput.type = "password";
      eyeIcon.className = "fa fa-eye";
    }
  };
  
  









