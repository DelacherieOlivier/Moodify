@extends('layouts.general')

@section('contenu')

    @auth
        <div class="home-bck"></div>

<div class="quote">Good humor is a key that opens all hearts.</div>

<!-- CALENDRIER -->

      @foreach($calendrier as $c )
              <input type="hidden" name="jour2" value="{{$c->jour}}" id='jour{{$c->jour}}'>
              <input type="hidden" name="mood2" value="{{$c->mood}}" id='mood{{$c->mood}}'>
              <input type="hidden" name="mois2" value="{{$c->mois}}" id='mois{{$c->mois}}'>
      @endforeach

	  <div class="calendar-grid" ></div>


<div class="popup is-invisible"><div class="flex-column">
   <div class="title">Today, I am...</div>
   <form action="/addmood" method="POST" enctype="multipart/form-data" >
    @csrf
        <div class="moods">

            <div class="mood">
              <div class="happy"><input type="radio" id="happy"  value="happy" name="mood"></div>
              <label for="happy">Happy</label>
            </div>

            <div class="mood">
              <div class="neutral"><input type="radio" id="neutral"  value="neutral" name="mood"></div>
              <label for="neutral">Neutral</label>
            </div>

            <div class="mood">
              <div class="bored"><input type="radio" id="bored"  value="bored" name="mood"></div>
              <label for="bored">Bored</label>
            </div>

            <div class="mood">
              <div class="stressed"><input type="radio" id="stressed"  value="stressed" name="mood"></div>
              <label for="stressed">Stress</label>
            </div>

            <div class="mood">
              <div class="sad"><input type="radio" id="sad"  value="sad" name="mood"></div>
              <label for="sad">Sad</label>
            </div>

            <div class="mood">
              <div class="angry"><input type="radio" id="angry"  value="angry" name="mood"></div>
              <label for="angry">Angry</label>
            </div>
            <input type="hidden" name="jour" value="" id='jour'>
            <input type="hidden" name="mois" value="" id='mois'>
            <input type="submit" class="input-submit2" value="Validate" data-pjax>
        </div>
    </form>


    </div>
<div class="close" onclick="mood_close()">X</div></div>


    @endauth

    @guest
        @include("firstcontroller.connexion")
    @endguest

@endsection

