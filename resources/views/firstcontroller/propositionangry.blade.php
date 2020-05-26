@extends('layouts.general')

@section('contenu')

    @auth

    <div class="home-bck2"></div>
    <div class="proposition">
	    <div class="title" id='propoJour'></div>
	    <div class="soulignement"></div>
        <p>
            Etre énervé n est pas une humeur conseillée regarde cette liste tu pourras sûrement te calmer
        </p>
        <div class="prop">
            <div class="recipe">
                <div class="img"></div>
                <div>
                    Jette un oeil à nos idées
                </div>
            </div>
            <div class="list" style="margin-top:3rem">
                <div>
                    Visualisez une scène calme tout en fermant les yeux
                 </div>
                 <div>
                     Regarder une série Netflix drôle type Lucifer
                 </div>
                 <div>
                     Ecouter de la musique qui vous détend
                 </div>
            </div>
        </div>
    </div>
    @endauth

    @guest
        @include("firstcontroller.connexion")
    @endguest
    <script>
    let date1 = new Date();
        let dateLocale = date1.toLocaleString('fr-FR',{
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
            });

        document.getElementById('propoJour').innerHTML = dateLocale;
    </script>
@endsection

