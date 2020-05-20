@extends('layouts.general')
@section('contenu')
<div class="degrade-bck-1"></div>
<div class="degrade-bck-2"></div>
<div id="formconnexion" class="content">

    <div class="logo"></div>
    <div class="register">Se connecter</div>
    <form method="POST" action="{{ route('login') }}">
        @csrf


            <!--<label for="email" class="col-md-4 col-form-label text-md-right textlabel">{{ __('E-Mail Address') }}</label>-->

                <input id="email" type="email" class="input-text @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Adresse email..." autofocus>



            <!--<label for="password" class="col-md-4 col-form-label text-md-right textlabel">{{ __('Password') }}</label>-->

                <input id="password" type="password" class="input-text @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mot de passe...">

            @error('email')
            <span class="lien" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('password')
            <span class="erreurlogin" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror


        <div class="msg">
            <label class="my_checkbox" for="remember">{{ __('Se souvenir de moi') }}
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <span class="checkmark"></span>
            </label><br>
            @if (Route::has('password.request'))
                <a class="lien" href="/resetmdp" data-pjax>
                    {{ __('Mot de passe oublié?') }}
                </a>
            @endif
        </div>

        <button type="submit" class="input-submit">
            {{ __('Connexion') }}
        </button>
    </form>
    <div class="msg2">Ou <a href="inscription" class="lien" data-pjax>rejoignez-nous</a> !</div>
</div>
@endsection
