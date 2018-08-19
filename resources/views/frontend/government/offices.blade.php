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
                <div class="col-sm-2 col-md-2 col-lg-2">
                    @include('frontend.government._offices-groups')
                </div>
                <div class="col-sm-7 col-md-7 col-lg-7">
                    @include('frontend.government._offices')
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3" style="border-left: #cccccc75 solid 1px;">
                    <div class="w3-panel">
                        <p><h2>Mission</h2></p>
                        <hr>
                        <p class="text-justify" style="white-space: wrap; text-indent:60px;"> 
                            Center of commerce and industry in Southern Leyte,
                            inhabited by self-relaint, healthy, educated, law-abiding, environmentally-conscious and empowered citizens with a booming and vibrant economy with ecologically-balance environment under a firm and dynamic leaders.   
                        </p>
                    </div>
                    <div class="w3-panel">
                        <p><h2>Vision</h2></p>
                        <hr>
                        <p class="text-justify" style="white-space: wrap;"> 
                            WITH FIRM AND DYNAMIC LEADERS, THE LGU SHALL:
                        </p>
                        <p class="text-justify" style="white-space: wrap; text-indent:60px;"> 
                            Pursue enhanced revenue generation system improve agricultural productivity advance infrastructure development in support to agriculture provide livelihood oppoturnities periodic review of business and economic programs policies enhanced basic integrated health, education and other social services promote peace and order pursue development and activities for the protection and management environment promote climate change adaptation, disaster awareness and preparedness in the community improve the implementation of solid waste management program. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection