<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ _('404') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('bootstrap4/js/bootstrap.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/post-news.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap4/css/bootstrap.min.css') }}">

</head>
<body>
    <div  id="app">
        <div class="container">
            <div class="row">

                <div class="page-name">
                    <h1>The official website of the Municipality of Sogod</h1>
                  
                </div>
                <div class="follow">
                    <a href="#" class="f fab fa-facebook"></a>
                    <a href="#" class="f fab fa-twitter"></a>
                    <a href="#" class="f fab fa-google"></a>
                </div>
            </div>
        </div> 
        
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container-fluid">
                <a class="navbar-brand site-logo" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                            <li class="nav-item" >
                                <a class="nav-link" href="{{ route('home') }}">{{ __('HOME') }}</a>
                            </li>
                            <li class="v-divider"></li>
                            <li class="nav-item dropdown" style="width: 140px;">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('GOVERNMENT') }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('keyofficials') }}">
                                        {{ __('Key Officials') }}
                                    </a>
                                </div>
                            </li>
                            <li class="v-divider"></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('TRANSPARENCY') }}</a>
                            </li>
                            <li class="v-divider"></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('TOURISM') }}</a>
                            </li> 
                            <li class="v-divider"></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('ABOUT') }}</a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-6">
            @yield('content')
        </main>
    </div>
</body>
<footer>
    <div class="wrapper-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="footer-rights">All rights reserved.</p>
                </div>
                <div class="col-md-4 text-right">
                    sogod.gov.ph
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> -->
</html>

