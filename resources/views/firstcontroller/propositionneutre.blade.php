@extends('layouts.general')

@section('contenu')

    @auth

    <div class="home-bck2"></div>
    <div class="proposition">
	    <div class="title" id='propoJour'></div>
	    <div class="soulignement"></div>
        <p>
            Tu passes peut-être une bonne journée tu te sens sûrement bien mais sans plus
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
                    Dessiner
                 </div>
                 <div>
                     Regarder une serie ou un films
                 </div>
                 <div>
                     Faire du sport
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

