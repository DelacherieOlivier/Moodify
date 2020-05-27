@extends('layouts.general')

@section('contenu')

    @auth

    <div class="home-bck2"></div>
    <div class="proposition">
	    <div class="title" id='propoJour'></div>
	    <div class="soulignement"></div>
        <p>
            Today you are happy. So you can do several activities with your friends or family to share your joy
            and your good mood around you and why not be even happier?
        </p>
        <div class="prop">
            <div class="recipe">
                <div class="img"></div>
                <div>
                    Take a look at our ideas
                </div>
            </div>
            <div class="list" style="margin-top:3rem">
                @foreach($happy->random(3) as $c)
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
        let dateLocale = date1.toLocaleString('en-EN',{
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
            });

        document.getElementById('propoJour').innerHTML = dateLocale;
    </script>
@endsection

