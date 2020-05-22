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


 function mood() {
    document.querySelector('.popup').classList.remove('is-invisible');
}

function mood_close() {
    document.querySelector('.popup').classList.add('is-invisible');
}

function select(x) {
    document.querySelector('.'+x).classList.add('contour');

    if(x == "happy") {
        document.querySelector('.bored').classList.remove('contour');
        document.querySelector('.sad').classList.remove('contour');
        document.querySelector('.neutral').classList.remove('contour');
        document.querySelector('.angry').classList.remove('contour');
        document.querySelector('.stressed').classList.remove('contour');
    }
    
        if(x == "sad") {
        document.querySelector('.bored').classList.remove('contour');
        document.querySelector('.happy').classList.remove('contour');
        document.querySelector('.neutral').classList.remove('contour');
        document.querySelector('.angry').classList.remove('contour');
        document.querySelector('.stressed').classList.remove('contour');
    }
    
        if(x == "bored") {
        document.querySelector('.happy').classList.remove('contour');
        document.querySelector('.sad').classList.remove('contour');
        document.querySelector('.neutral').classList.remove('contour');
        document.querySelector('.angry').classList.remove('contour');
        document.querySelector('.stressed').classList.remove('contour');
    }
    
        if(x == "stressed") {
        document.querySelector('.bored').classList.remove('contour');
        document.querySelector('.sad').classList.remove('contour');
        document.querySelector('.neutral').classList.remove('contour');
        document.querySelector('.angry').classList.remove('contour');
        document.querySelector('.happy').classList.remove('contour');
    }
    
        if(x == "angry") {
        document.querySelector('.bored').classList.remove('contour');
        document.querySelector('.sad').classList.remove('contour');
        document.querySelector('.neutral').classList.remove('contour');
        document.querySelector('.happy').classList.remove('contour');
        document.querySelector('.stressed').classList.remove('contour');
    }
    
        if(x == "neutral") {
        document.querySelector('.bored').classList.remove('contour');
        document.querySelector('.sad').classList.remove('contour');
        document.querySelector('.happy').classList.remove('contour');
        document.querySelector('.angry').classList.remove('contour');
        document.querySelector('.stressed').classList.remove('contour');
    }
}