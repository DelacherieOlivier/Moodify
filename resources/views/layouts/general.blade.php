@if(request()->ajax())
    @yield("contenu")
    @else
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset='UTF-8'>
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <link rel="stylesheet" href="/css/style.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    <title>Moodify</title>
            <link href="https://fonts.googleapis.com/css?family=Mukta&display=swap" rel="stylesheet">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>

            <div style="display:none;">
            @auth
            <div class="infos_user">
                <a href="/utilisateur/{{Auth::id()}}" data-pjax><div class="photo_user" style="background-image: url('{{$utilisateur->url_avatar ?? ''}}')"></div></a>
                <div class="infos">
                    <p>{{$utilisateur->name ?? ''}}</p>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" role="button" data-pjax>
                        <p>Déconnexion</p>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" data-pjax>
                        @csrf
                    </form>
                </div>
            </div>
            @endauth
            </div>

            <div id="main">
                <div id="pjax-container" class="contenumain">
                    @yield('contenu')
                </div>
            </div>

            <div class="menu2">
                <a href="/" data-pjax><i class="fas fa-home"></i></a>
                @auth
                    <a href="/utilisateur/{{Auth::id()}}" data-pjax><div class="photo_user" style="background-image: url('{{$utilisateur->url_avatar ?? ''}}')"></div></a>
                    <a href="#" data-pjax><i class="fas fa-music"></i></a>
                    <a href="#" data-pjax><i class="fas fa-file-audio"></i></a>
                    <a href="#" data-pjax><i class="fas fa-star"></i></a>
                @endauth
                @guest
                    <a href="connexion" data-pjax><i class="fas fa-user-plus"></i></a>
            </div>
            @endguest


            <script src="/js/jquery.js"></script>
            <script src="/js/jquery.pjax.js"></script>
            <script src="/js/divers.js"></script>
        </body>
    </html>
    @endif

