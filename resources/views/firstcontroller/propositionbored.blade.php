@extends('layouts.general')

@section('contenu')

    @auth

    <div class="home-bck2"></div>
    <div class="proposition">
	    <div class="title" id='propoJour'></div>
	    <div class="soulignement"></div>
        <p>
            Il est temps pour toi de t occupé, rien de mieux que pour ça notre liste mise à ta disposition
        </p>
        <div class="prop">
            <div class="recipe">
                <div class="img"></div>
                <div>
                    Jette un oeil à nos idées
                </div>
            </div>
            <div class="list" style="margin-top:3rem">
                @foreach($bored->random(3) as $c)
                     <div class='proplist'>
                        {{$c->idee}}
                     </div>
                @endforeach
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

