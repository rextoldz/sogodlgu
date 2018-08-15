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
                <div class="col-sm-3 col-md-3 col-lg-3">
                   <!-- <h1 style="color: rgba(130, 130, 130, 0.62);">Unavailable</h1>
                   -->
                   
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">    
                </div>
            </div>
        </div>
    </div>
@endsection