<link rel="stylesheet" type="text/css" href="{{ asset('css/events.css') }}">
<div class="w3-container">
    <div class="page-title">
        <h2>Advisories</h2>
    </div>
    <hr>
    <div class="w3-container">
    @foreach($advisories as $advisory)
        <div class="card-media">
            <!-- media container -->
            <div class="card-media-object-container">
              <div class="card-media-object" style="background-image: url(/images/advisory/{{ $advisory->photo }});"></div>
            </div>
            <!-- body container -->
            <div class="card-media-body">
                <div class="card-media-body-top">
                    <span class="subtle">Posted by {{ $advisory->posted }} on {{ $advisory->created_at }}</span>
                    <div class="card-media-body-top-icons u-float-right">
                        <div class="subtle"><h5>Hits: {{ $advisory->hits }}</h5></div>
                    </div>
                  </div>
                  <span class="card-media-body-heading">{{ $advisory->title }}</span>
                <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
                    <a href="" class="card-media-body-supporting-bottom-text card-media-link u-float-right">VIEW DETAILS</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>