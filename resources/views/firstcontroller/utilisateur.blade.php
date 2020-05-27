@extends('layouts.general')

@section('contenu')


    <div class="home-bck3"></div>
    <div class="username"><div>{{$utilisateurr->name}}</div></div></div>

    <div class="settings-2">
        <div class="title-settings">About you</div>


        <div>
              @auth
                    @if(Auth::id() != $utilisateurr->id)
                    @else
                        <div class="user">
                            <form action="/utilisateur/update/{{Auth::id()}}" method="POST"  enctype="multipart/form-data" data-pjax class="form-settings">
                                @csrf
                                <input type="email" name="email" placeholder="Your new adress mail..." class="input-text color input_form form" value="{{$utilisateurr->email}}">
                                <input type="password" name="password" placeholder="Your new password..." class="input-text color input_form form">
                                <input type="submit" value="validate" class="input-submit">
                            </form>
                        </div>
                    @endif
              @endauth
        </div>
    </div>
    @guest
        @include("firstcontroller.connexion")
    @endguest
@endsection
