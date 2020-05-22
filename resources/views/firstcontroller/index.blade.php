@extends('layouts.general')

@section('contenu')

    @auth
        <div class="home-bck"></div>
<div class="quote">LALALAL</div>

<!-- CALENDRIER -->


	  <div class="calendar-grid">
  
  </div>
<div class="popup is-invisible"><div class="flex-column">
    <div class="title">Aujourdhui, je suis...</div>
    <div class="moods">
        
    <div class="mood">
        <div class="happy" onclick="select('happy')"></div>
        <div class="txt">Joyeux</div>
    </div>
        
            <div class="mood">
        <div class="neutral" onclick="select('neutral')"></div>
        <div class="txt">Neutre</div>
    </div>
        
            <div class="mood">
        <div class="bored" onclick="select('bored')"></div>
        <div class="txt">Ennuyé</div>
    </div>
        
            <div class="mood">
        <div class="stressed" onclick="select('stressed')"></div>
        <div class="txt">Stressé</div>
    </div>
        
            <div class="mood">
        <div class="sad" onclick="select('sad')"></div>
        <div class="txt">Triste</div>
    </div>
        
            <div class="mood">
        <div class="angry" onclick="select('angry')"></div>
        <div class="txt">En colère</div>
    </div>
    
    </div>
    
    <input class="input-submit2" value="Valider"></div>
<div class="close" onclick="mood_close()">X</div></div>
	

    @endauth
    @guest
        @include("firstcontroller.connexion")
    @endguest

@endsection
