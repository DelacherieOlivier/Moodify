@extends('layouts.general')

@section('contenu')

    @auth
       <div class="home-bck2"></div>
<div class="proposition">
	<div class="title">
		Vendredi 22 mai 2020
	</div>
	<div class="soulignement"></div>
	<p>
		Aujourd'hui, tu es humeur du jour. Donc, tu peux faire :
	</p>
	<div class="prop">
		<div class="netflix">
			<div class="img"></div>
			<div>
				Sur Netflix, tu peux regarder :
			</div>
		</div>
		<div class="list">
			<div>
				Série 1
			</div>
			<div>
				Série 2
			</div>
			<div>
				Série 3
			</div>
		</div>
	</div>
	<div class="prop">
		<div class="recipe">
			<div class="img"></div>
			<div>
				Jette un oeil à nos recettes
			</div>
		</div>
		<div class="list">
			<div>
				Recette 1
			</div>
			<div>
				Recette 2
			</div>
			<div>
				Recette 3
			</div>
		</div>
	</div>
</div>


<!-- CALENDRIER -->


	
	


       
    @endauth

    @guest
        @include("firstcontroller.connexion")
    @endguest

@endsection
