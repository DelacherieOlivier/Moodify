@extends('layouts.general')

@section('contenu')

    @auth
        <div class="home-bck"></div>
        <div class="quote">LALALAL</div>
        <!-- CALENDRIER -->
	    <div class="calendar-grid"></div>
    @endauth

    @guest
        @include("firstcontroller.connexion")
    @endguest

@endsection
