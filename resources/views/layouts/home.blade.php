<!doctype html>
<html class="no-js" lang="en">
  <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>GOVPH | GWT Static</title>
        <link rel="stylesheet" href="{{ asset('css/foundation/foundation.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
  </head>

<body>

<!-- <input id="tmp-link" type="hidden" data-link=""> -->

  <div id="a11y-modal" class="large reveal" data-reveal title="Accessibility Statement" role="dialog">
      <textarea class="statement-textarea" readonly rows="20">
  The iGovPhil Project officially adopts the Web Content Accessibility Guidelines (WCAG 2.0) as the accessibility standard for all its related web development and services. WCAG 2.0 is also an international standard, ISO 40500. This certifies it as a stable and referenceable technical standard. 

  WCAG 2.0 contains 12 guidelines organized under 4 principles: Perceivable, Operable, Understandable, and Robust (POUR for short). There are testable success criteria for each guideline. Compliance to these criteria is measured in three levels: A, AA, or AAA. A guide to understanding and implementing Web Content Accessibility Guidelines 2.0 is available at: https://www.w3.org/TR/UNDERSTANDING-WCAG20/

  All iGovPhil Project services and content are currently moving towards WCAG Level A compliance. Work is being done to make the system fully compliant with this level. 
   
  Accessibility Features

  Shortcut Keys Combination Activation Combination keys used for each browser. 
    
    Chrome for Linux press (Alt+Shift+shortcut_key) 
    Chrome for Windows press (Alt+shortcut_key) 
    For Firefox press (Alt+Shift+shortcut_key) 
    For Internet Explorer press (Alt+Shift+shortcut_key) then press (enter) 
    Accessibility Statement (Combination + 0): 
    
      Statement page that will show the available accessibility keys. 
    
      Home Page (Combination + 1): Accessibility key for redirecting to homepage. 
      Main Content (Combination + R): Shortcut for viewing the content section of the current page. 
      FAQ (Combination + 5): Shortcut for FAQ page. 
      Contact (Combination + C): Shortcut for contact page or form inquiries. 
      Feedback (Combination + K): Shortcut for feedback page. 
      Site Map (Combination + M): Shortcut for site map (footer agency) section of the page. 
      Search (Combination + S): Shortcut for search page. 
    
      Press esc, or click the close the button to close this dialog box.
      </textarea>
      <button class="close-button" data-close aria-label="Close modal" type="button">
          <span aria-hidden="true">&times;</span>
      </button>
</div>

<!-- Start of Off Canvas -->
<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

<!-- Off Canvas Menu -->
    @include('frontend.widgets._navbar-right')

<div class="off-canvas-content" data-off-canvas-content>

    @include('frontend.widgets._navbar-left')

<!-- masthead -->
    <div id="masthead">
      <div class="row">
        <div id="logo" class="large-6 medium-6 columns">
            <img src="{{ asset('images/logo.png') }}" style="width: 132px; margin: 33px">
            <div class="logo-text" style="display: inline-block;">
                <p>Republic of the Philippines</p>
                <p>Municipality of Sogod</p>
                <p>Province Southern Leyte</p>
            </div>
        </div>
        <div id="ear-left" class="large-3 medium-3 columns"></div>
        <div id="ear-right" class="large-3 medium-3 columns">
            @include('frontend.widgets._datetime')
        </div>
      </div>
    </div>
<!-- masthead end -->

<!-- banner full width -->
    <div id="banner">
      <div class="row">
        <div class="large-12 columns">
          <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
            <ul class="orbit-container" id="slider_full">

                <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>

              <li class="is-active orbit-slide">
                <img src="http://placekitten.com/g/1280/400">
                <figcaption class="orbit-caption">Caption One.</figcaption>
              </li>
              <li class="orbit-slide">
               <img src="http://placekitten.com/g/1280/400">
                <figcaption class="orbit-caption">Caption Two.</figcaption>
              </li>
              <li class="orbit-slide">
                <img src="http://placekitten.com/g/1280/400">
                <figcaption class="orbit-caption">Caption Three.</figcaption>
              </li>
            </ul>
              <nav class="orbit-bullets">
                <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
              </nav>
          </div>
        </div>
      </div>
    </div>
<!-- banner full width end -->   

<!-- banner 3/4 width -->
 <!--    <div id="banner">
      <div class="row">
        <div class="large-12 columns">
          <div class="row collapse bg-banner">
            <div class="large-8 columns">
              
              <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
                <ul class="orbit-container" id="slider_full">
                    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>

                  <li class="is-active orbit-slide">
                    <img src="http://placekitten.com/g/840/400">
                    <figcaption class="orbit-caption">Caption One.</figcaption>
                  </li>
                  <li class="orbit-slide">
                    <img src="http://www.aratuonline.com.br/wp-content/uploads/2015/03/aratuonline-cultura-exposicao-fotografica-aguas-840x4001-840x400.jpg">
                    <figcaption class="orbit-caption">Caption Two.</figcaption>
                  </li>
                  <li class="orbit-slide">
                    <img src="http://ovie.metronetsa.net/wordpress/wp-content/uploads/2014/04/15442-840x400.jpg">
                    <figcaption class="orbit-caption">Caption Three.</figcaption>
                  </li>
                </ul>
                  <nav class="orbit-bullets">
                    <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                  </nav>
              </div>
            </div>
            <div class="large-4 columns">
              <div id="featured01">
                <h4>Amet Nibh Vestibulum Tristique</h4><hr>
                <h4>Amet Nibh Vestibulum Tristique</h4>
              </div>
            </div>            
          </div>
        </div>  

      </div>
    </div> -->
<!-- banner 3/4 width end --> 

<!-- main -->
    <div id="main-content">
        @yield('content')
    </div>

<!-- main end -->

<!--Standard Footer-->
<div id="gwt-standard-footer"></div>

<div><a href="#main-nav" id="back-to-top" title="Back to Top"><i class="fa fa-arrow-circle-up fa-3x" aria-hidden="true"></i>

      </div><!-- off-canvas-content -->
    </div><!-- off-canvas-wrapper-inner -->
  </div><!-- off-canvas-wrapper -->



<!--     <script type="text/javascript">
      (function(d, s, id) {
        var js, gjs = d.getElementById('gwt-standard-footer');

        js = d.createElement(s); js.id = id;
        js.src = "//cdn.i.gov.ph/gwt-footer/footer.js";
        gjs.parentNode.insertBefore(js, gjs);
      }(document, 'script', 'gwt-footer-jsdk'));
    </script> -->
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
