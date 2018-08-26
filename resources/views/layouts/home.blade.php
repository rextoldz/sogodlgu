<!doctype html>
<html class="no-js" lang="en">
  <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('bootstrap4/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.bootstrap.newsbox.min.js') }}" type="text/javascript"></script>

  </head>

<body>

<!-- <input id="tmp-link" type="hidden" data-link=""> -->
    @include('frontend.widgets._accessibility')

<!-- Start of Off Canvas -->
<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

<!-- Off Canvas Menu -->
    @include('frontend.widgets._navbar-right')

<div class="off-canvas-content" data-off-canvas-content>

    @include('frontend.widgets._navbar-left')

<!-- masthead -->
    <div id="masthead" class="masthead-bg">
        <div class="container-fluid" style="border-bottom: #ea5211 solid 9px;">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="logo">  
                    <img src="{{ asset('images/logo/logo.png') }}" style="width: 460px">
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="pst">
                    @include('frontend.widgets._datetime')
                </div>
            </div>
        </div>
    </div>
<!-- masthead end -->
<!--     <div class="container-banner banner-pads">
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

    <script>
      $(document).foundation();
    </script>

    </body>
</html>
