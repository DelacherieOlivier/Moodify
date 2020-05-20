@extends('layouts.general')

@section('contenu')

    @auth
        <h3>la page principal</h3>
    @endauth
    @guest
        @include("firstcontroller.connexion")
    @endguest

@endsection
