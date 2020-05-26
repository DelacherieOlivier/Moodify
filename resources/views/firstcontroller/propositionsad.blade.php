@extends('layouts.general')

@section('contenu')

    @auth

    <div class="home-bck2"></div>
    <div class="proposition">
	    <div class="title" id='propoJour'></div>
	    <div class="soulignement"></div>
        <p>
            Il est temps pour toi de penser à autre chose essaye de jeter un petit coup d'oeil à notre liste cela pourra sûrement t'aider
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
                    Socialiser : voyez vos amis ou faites de nouvelles rencontres
                 </div>
                 <div>
                     Adopter un animal domestique type chien et chat
                 </div>
                 <div>
                     Méditer et faites le point sur vous même pour repartir du bon pied
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

