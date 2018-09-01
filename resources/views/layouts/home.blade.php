<!doctype html>
<html class="no-js" lang="en">
  <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }}</title>
        <link rel="icon" href="{{ asset('images/lgu.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('bootstrap4/css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/w3.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/foundation/foundation.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/foundation/app.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/style2.css') }}"/>  

        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}"/> 
         <script type="text/javascript" src="{{ mix('js/app.js') }}" defer></script>  
        <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('bootstrap4/js/bootstrap.min.js') }}"></script> 

        <script src="{{ asset('js/jquery.bootstrap.newsbox.min.js') }}" type="text/javascript"></script>
  </head>

<body>

<!-- <input id="tmp-link" type="hidden" data-link=""> -->
    @include('frontend.widgets._accessibility')

<!-- Start of Off Canvas -->
<div class="off-canvas-wrapper"  id="app">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

<!-- Off Canvas Menu -->
    @include('frontend.widgets._navbar-right')

<div class="off-canvas-content" data-off-canvas-content>

    @include('frontend.widgets._navbar-left')

<!-- masthead -->
    <div id="masthead" class="masthead-bg">
        <div class="container-fluid" style="border-bottom: #db910ab3 solid 9px;">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="logo">  
                    <img src="{{ asset('images/logo/logo.png') }}" style="width: 438px">
                </div>
<<<<<<< HEAD
                
                <nav id="navbar" class="navbar navbar-expand-md navbar-light navbar-laravel">
                    <div class="container-fluid">
                        <a style="display: none;margin-top: 10px;color:antiquewhite;font-weight: bold;" class="navbar-brand" href="{{ url('/') }}">
                            <h5>{{ __('SOGODLGU') }}</h5>
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
                                @guest
                                    <li class="nav-item {{  $page == 'Home' ? 'active' : '' }}" >
                                        <a class="nav-link" href="{{ route('home') }}">{{ __('HOME') }}</a>
                                    </li>
                                    <li class="nav-item dropdown" style="width: 120px;">
                                        <a id="navbarDropdown" class="{{  $page == 'Government' ? 'active' : 'nav-link' }} nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ __('GOVERNMENT') }} <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                          <!--   <a class="dropdown-item" href="{{ route('keyofficials') }}">
                                                {{ __('Key Officials') }}
                                            </a>
                                            <a class="dropdown-item" href="{{ route('offices') }}">
                                                {{ __('Offices') }}
                                            </a>
                                            <a class="dropdown-item" href="{{ route('barangay') }}">
                                                {{ __('Barangays') }}
                                            </a>
                                            <a class="dropdown-item" href="">
                                                {{ __('Health') }}
                                            </a> -->
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('home') }}">{{ __('TRANSPARENCY') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('home') }}">{{ __('TOURISM') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('about') }}">{{ __('ABOUT') }}</a>
                                    </li>
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
=======
>>>>>>> gwt
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="pst">
                    @include('frontend.widgets._datetime')
                </div>
            </div>
        </div>
    </div>
<!-- masthead end -->
<!--<div class="container-banner banner-pads">
        <div class="row">
            <div class="large-9 columns container-main">
                <header>
                    <h1 class="entry-title"></h1>
                </header>
            </div>
        </div>                                          
    </div> -->
    <div id="banner">
        <div class="banner-top"></div>
    </div>

<!-- main -->
    <div id="main-content">
            @yield('content')
    </div>

<!-- main end -->

<!--Standard Footer-->
<div id="gwt-standard-footer" style="margin-top: 30px"></div>

<div><a href="#main-nav" id="back-to-top" title="Back to Top"><i class="fa fa-arrow-circle-up fa-3x" aria-hidden="true"></i>
</a></div>

      </div><!-- off-canvas-content -->
    </div><!-- off-canvas-wrapper-inner -->
  </div><!-- off-canvas-wrapper -->
</div>

    <script type="text/javascript">
    (function(d, s, id) {
    var js, gjs = d.getElementById('gwt-standard-footer');

    js = d.createElement(s); js.id = id;
    js.src = "//gwhs.i.gov.ph/gwt-footer/footer.js";
    gjs.parentNode.insertBefore(js, gjs);
    }(document, 'script', 'gwt-footer-jsdk'));
    </script>

<!--Standard Footer End-->

    <script src="{{ asset('js/foundation/vendor/jquery.js') }}"></script>
    <script src="{{ asset('js/foundation/vendor/foundation.min.js') }}"></script>
    <script src="{{ asset('js/foundation/vendor/what-input.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
  <!--   <script>
      $(document).foundation();
    </script> -->

</body>
  
</html>
