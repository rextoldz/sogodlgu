<div class="container-fluid">
    <div class="row">
          <div class="col-sm-3" style="width: 100%">
            <img src="{{ asset('images/agas.jpg') }}" style="width: 100%;    height: 169px;margin-bottom: 21px;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
          </div>
          <div class="col-sm-3" style="width: 100%">
            <img src="{{ asset('images/nmr.jpg') }}" style="width: 100%;    height: 169px;margin-bottom: 21px;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
          </div>
          <div class="col-sm-3" style="width: 100%">
            <img src="{{ asset('images/glcf.jpg') }}" style="width: 100%;    height: 169px;margin-bottom: 21px;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
          </div>
          <div class="col-sm-3" style="width: 100%">
            <img src="{{ asset('images/sample.jpg') }}" style="width: 100%;    height: 169px;margin-bottom: 21px;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
          </div>
      </div>
</div> 
<div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="modal-content">

        <div class="mySlides">
          <div class="numbertext">1 / 4</div>
          <img src="{{ asset('images/agas.jpg') }}" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">2 / 4</div>
          <img src="{{ asset('images/nmr.jpg') }}" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">3 / 4</div>
          <img src="{{ asset('images/glcf.jpg') }}" style="width:100%">
        </div>
        
        <div class="mySlides">
          <div class="numbertext">4 / 4</div>
          <img src="{{ asset('images/sample.jpg') }}" style="width:100%">
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
          <p id="caption"></p>
        </div>


        <div class="column">
          <img class="demo cursor" src="{{ asset('images/agas.jpg') }}" style="width:100%" onclick="currentSlide(1)" alt="Agas-agas">
        </div>
        <div class="column">
          <img class="demo cursor" src="{{ asset('images/nmr.jpg') }}" style="width:100%" onclick="currentSlide(2)" alt="Snow">
        </div>
        <div class="column">
          <img class="demo cursor" src="{{ asset('images/glcf.jpg') }}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
        </div>
        <div class="column">
          <img class="demo cursor" src="{{ asset('images/sample.jpg') }}" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
        </div>
      </div>
</div>