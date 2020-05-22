@extends('layouts.general')

@section('contenu')
<div class="degrade-bck-1"></div>
<div class="degrade-bck-2"></div>
<div id="formconnexion" class="content">

    <div class="logo"></div>
    <div class="register">Oubli de mot de passe</div>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

        <form method="POST" action="{{ route('password.email') }}">
        @csrf

            <input id="email" type="email" class="input-text top @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Adresse email..." autofocus>

            @error('email')
            <span class="erreurlogin" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <button type="submit" class="input-submit">
                {{ __('Envoyer') }}
            </button>
        </form>
        <div class="msg2">Ou <a href="inscription" class="lien" data-pjax>connectez-vous</a> sans attendre !</div>
    </div>

@endsection
