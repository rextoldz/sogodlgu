@extends('layouts.home')

@section('content')
    <script type="text/javascript" src="{{ asset('js/date_time.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/keyofficials.css') }}">
    <div class="wrapper">
        <div class="lgu-photo-small"></div>
        <div class="overlay-lgu-photo-small">
            <div class="front-date">
                <span id="date_time"></span>
                <script type="text/javascript">window.onload = date_time('date_time');</script>
            </div>
        </div>
    </div>
    <div class="wrapper1">   
        <div class="container-fluid sgd-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">{{ $page }}</li>
                    <li class="breadcrumb-item"><a href="{{ route('keyofficials') }}">{{ $breadcrumb }}</a></li>
                </ol>
            </nav>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="officials">
                       <p>fdgfgf</p>
                    </div>    
                </div>
                <div class="col-md-3">
                  <!--   <div class="w3-container"></div>
                    <div id="fb-root"></div>
                    <div class="fb-page" data-href="https://www.facebook.com/SogodSo.Leyte/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/SogodSo.Leyte/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/SogodSo.Leyte/">Sogod, Southern Leyte</a></blockquote></div> -->
                </div>
            </div>
        </div>
    </div>
@endsection