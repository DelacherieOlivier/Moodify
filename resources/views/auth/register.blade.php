@extends('layouts.general')
@section('contenu')
    <div class="degrade-bck-1"></div>
<div class="degrade-bck-2"></div>
<div id="formconnexion" class="content">

    <div class="logo top"></div>
    <div class="register">Register</div>
        <form method="POST" action="{{ route('register') }}">
        @csrf
            <input id="name" type="text" class="input-text @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name"  placeholder="Pseudo">

            <input id="email" type="email" class="input-text @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="mail address">

            <div class="mdp">
                <input id="password" type="password" class="input-text @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">

                <input id="password-confirm" type="password" class="input-text" name="password_confirmation" required autocomplete="new-password" placeholder="Password confirmation">
            </div>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            @error('email')
            <span class="erreurlogin" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('password')
            <span class="erreurlogin" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <button type="submit" class="input-submit">
                {{ __('register') }}
            </button>
        </form>
        <div class="msg2">Or <a href="connexion" class="lien" data-pjax>log in</a> !</div>
    </div>
@endsection

