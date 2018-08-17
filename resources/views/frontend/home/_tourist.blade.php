<script type="text/javascript" src="{{ asset('js/slideshow1.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/slideshow1.css') }}">

  <div class="mySlides" style="display: block;">
    <div class="numbertext">1 / 6</div>
    <img src="{{ asset('images/agas.jpg') }}" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="{{ asset('images/nmr.jpg') }}" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="{{ asset('images/glcf.jpg') }}" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="{{ asset('images/sample.jpg') }}" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="{{ asset('images/sample.jpg') }}" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="{{ asset('images/sample.jpg') }}" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container" style="display: block;">
    <p id="caption">Agas-agas Brigde</p>
  </div>

<div class="w3-panel">
    <div class="column">
        <img class="demo cursor" src="{{ asset('images/agas.jpg') }}" style="width:100%" onclick="currentSlide(1)" alt="Agas-agas Brigde">
    </div>
    <div class="column">
        <img class="demo cursor" src="{{ asset('images/nmr.jpg') }}" style="width:100%" onclick="currentSlide(2)" alt="Neguilan Mountain Resort">
    </div>
    <div class="column">
        <img class="demo cursor" src="{{ asset('images/glcf.jpg') }}" style="width:100%" onclick="currentSlide(3)" alt="Gerona's La Caridad Farm">
    </div>
    <div class="column">
        <img class="demo cursor" src="{{ asset('images/sample.jpg') }}" style="width:100%" onclick="currentSlide(4)" alt="Sogod Rizal Park">
    </div>
    <div class="column">
        <img class="demo cursor" src="{{ asset('images/sample.jpg') }}" style="width:100%" onclick="currentSlide(5)" alt="Sogod Rizal Park">
    </div>    
    <div class="column">
        <img class="demo cursor" src="{{ asset('images/sample.jpg') }}" style="width:100%" onclick="currentSlide(6)" alt="Sogod Rizal Park">
    </div>
</div>