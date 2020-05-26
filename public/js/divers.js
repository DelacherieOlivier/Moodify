$(document).pjax('[data-pjax] a, a[data-pjax]', '#pjax-container');
$(document).on('submit', 'form[data-pjax]', function(event) {
    $.pjax.submit(event, '#pjax-container');
});

$(document).ready(function () {
    /* Page connexion */
    $('#choixinscription').click(function (e) {
        $('#choixinscription').addClass('choixactif');
        $('#choixconnexion').removeClass('choixactif');
        $('#forminscription').show();
        $('#formconnexion').hide();

    });
    $('#choixconnexion').click(function (e) {
        $('#choixconnexion').addClass('choixactif');
        $('#choixinscription').removeClass('choixactif');
        $('#forminscription').hide();
        $('#formconnexion').show();

    });

});



 function mood(day,mois) {
    document.querySelector('.popup').classList.remove('is-invisible');
    document.getElementById('jour').value= day ;
    document.getElementById('mois').value= mois+1 ;
}

function mood_close() {
    document.querySelector('.popup').classList.add('is-invisible');
}

