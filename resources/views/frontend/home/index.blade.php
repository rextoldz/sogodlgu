@extends('layouts.home')

@section('content')
	      <div class="row">
        <div class="large-12 columns">
          <div class="callout secondary">
            <h3>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</h3>

            <p>To get going, this file (index.html) includes some basic styles you can modify, play around with, or totally destroy to get going.</p>
            <p>Once you've exhausted the fun in this document, you should check out:</p>
            <div class="row">
              <div class="large-4 medium-4 columns">
            <p><a href="http://foundation.zurb.com/docs">Foundation Documentation</a><br />Everything you need to know about using the framework.</p>
          </div>
              <div class="large-4 medium-4 columns">
                <p><a href="http://github.com/zurb/foundation">Foundation on Github</a><br />Latest code, issue reports, feature requests and more.</p>
              </div>
              <div class="large-4 medium-4 columns">
                <p><a href="http://twitter.com/foundationzurb">@foundationzurb</a><br />Ping us on Twitter if you have questions. If you build something with this we'd love to see it (and send you a totally boss sticker).</p>
              </div>        
            </div>
          </div>
        </div>
      </div>  

      <div class="row">
        <div class="large-8 medium-8 columns">
          <h5>Here&rsquo;s your basic grid:</h5>
          <!-- Grid Example -->
          <div class="row">
            <div class="large-12 columns">
              <div class="callout primary">
                <p><strong>This is a twelve column section in a row.</strong> Each of these includes a div.panel element so you can see where the columns are - it's not required at all for the grid.</p>
              </div>
            </div>
          </div>
        </div>     

        <div class="large-4 medium-4 columns">
          <div class="callout secondary">
            <h5>Widget</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
            <a href="#" class="small button">Call to action</a>          
          </div>
        </div>
      </div>

      <div class="row">
        <div class="large-3 medium-3 columns">
          <div class="callout secondary">
            <div id="transparency" class="text-center">
              <h4>Transparency Seal</h4>
              <a href="#">
                <img src="img/transparency-seal.png" alt="Transparency Seal" title="Transparency Seal" style="width:225px;" />
              </a>
            </div>
          </div>
        </div>
        <div class="large-6 medium-6 columns">
          <div class="callout secondary">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non velit vel risus tempor aliquet ut vel risus. Ut id ligula sed nulla mattis efficitur a in augue. Nam non ipsum augue. Aliquam tellus orci, molestie in vehicula non, suscipit nec diam. Aliquam in dignissim justo. Maecenas malesuada pulvinar felis, eget efficitur erat varius quis.</p> 
            <p>Morbi eget vestibulum nunc, nec egestas est. Morbi vestibulum purus vel sem accumsan cursus. Sed condimentum mauris nibh. Aliquam euismod a massa sodales posuere. Fusce id ultricies ipsum. Vivamus viverra lectus vitae eros congue, a tempus purus efficitur. Nulla imperdiet dolor quis sollicitudin rutrum. In commodo purus turpis, vitae sagittis eros lacinia vel.</p>
          </div>
        </div>
        <div class="large-3 medium-3 columns">
          <div class="callout secondary">
            <div id="pst" class="text-center">

              

              <script type="text/javascript" id="gwt-pst">
              (function(d, eId) {
                var js, gjs = d.getElementById(eId);
                js = d.createElement("script"); js.id = "gwt-pst-jsdk";
                js.src = "//gwhs.i.gov.ph/pst/gwtpst.js?"+new Date().getTime();
                gjs.parentNode.insertBefore(js, gjs);
              }(document, "gwt-pst"));

              var gwtpstReady = function(){
                var otherFormat = "dddd, mmmm dd, yyyy h:mm:ss TT";
                var firstPst = new gwtpstTime("pst-date", {format: otherFormat});
              }
              </script>

          </div>
        </div>
      </div>
@endsection