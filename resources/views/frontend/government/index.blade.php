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
                <div class="col-sm-9">
                    <div class="w3-container">
                      <h2>List of key officials</h2>
                      <p>Mayor, Vice-Mayor, SB members and SK.</p>
                      <hr>

                    <div class="w3-card-4 photo-m">
                        <hr>
                        <div class="w3-container">
                              <img src="{{ asset('images/officials/mayor.jpg') }}" alt="Avatar" class="w3-left w3-margin-right" style="max-width: 120px;">
                              <h2>Hon. Imelda Tan</h2>
                              <h3>Mayor</h3>
                              <br>
                        </div>
                         <div class="w3-container">
                              <hr>
                              <img src="{{ asset('images/officials/mayor.jpg') }}" alt="Avatar" class="w3-left w3-margin-right" style="max-width: 120px;">
                              <h2>Hon. Imelda Tan</h2>
                              <h3>Vice-Mayor</h3>
                              <br>
                        </div>
                        <hr>
                        <br>
                        <div class="container">
                            <h3>SB Members</h3>
                            <div class="row">
                                  <div class="col-sm-3">
                                    <hr>
                                    <img src="{{ asset('images/officials/mayor.jpg') }}" alt="Avatar" class="w3-left w3-margin-right" style="max-width: 120px;">
                                    <p>Hon. Imelda Tan</p>
                                    <br>
                                </div>
                                <div class="col-sm-3">
                                    <hr>
                                    <img src="{{ asset('images/officials/mayor.jpg') }}" alt="Avatar" class="w3-left w3-margin-right" style="max-width: 120px;">
                                    <p>Hon. Imelda Tan</p>
                                    <br>
                                </div>
                                <div class="col-sm-3">
                                    <hr>
                                    <img src="{{ asset('images/officials/mayor.jpg') }}" alt="Avatar" class="w3-left w3-margin-right" style="max-width: 120px;">
                                    <p>Hon. Imelda Tan</p>
                                    <br>
                                </div>
                                <div class="col-sm-3">
                                    <hr>
                                    <img src="{{ asset('images/officials/mayor.jpg') }}" alt="Avatar" class="w3-left w3-margin-right" style="max-width: 120px;">
                                    <p>Hon. Imelda Tan</p>
                                    <br>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-sm-3">
                                    <hr>
                                    <img src="{{ asset('images/officials/mayor.jpg') }}" alt="Avatar" class="w3-left w3-margin-right" style="max-width: 120px;">
                                    <p>Hon. Imelda Tan</p>
                                    <br>
                                </div>
                                <div class="col-sm-3">
                                    <hr>
                                    <img src="{{ asset('images/officials/mayor.jpg') }}" alt="Avatar" class="w3-left w3-margin-right" style="max-width: 120px;">
                                    <p>Hon. Imelda Tan</p>
                                    <br>
                                </div>
                                <div class="col-sm-3">
                                    <hr>
                                    <img src="{{ asset('images/officials/mayor.jpg') }}" alt="Avatar" class="w3-left w3-margin-right" style="max-width: 120px;">
                                    <p>Hon. Imelda Tan</p>
                                    <br>
                                </div>
                                <div class="col-sm-3">
                                    <hr>
                                    <img src="{{ asset('images/officials/mayor.jpg') }}" alt="Avatar" class="w3-left w3-margin-right" style="max-width: 120px;">
                                    <p>Hon. Imelda Tan</p>
                                    <br>
                                </div>
                            </div> 
                        </div>
                    </div>
                     <!--    <button class="w3-button w3-block w3-dark-grey">+ Connect</button> -->
                    </div>
                </div>
                <div class="col-sm-3">
                  <!--   <div class="w3-container"></div>
                    <div id="fb-root"></div>
                    <div class="fb-page" data-href="https://www.facebook.com/SogodSo.Leyte/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/SogodSo.Leyte/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/SogodSo.Leyte/">Sogod, Southern Leyte</a></blockquote></div> -->
                </div>
            </div>
        </div>
    </div>
@endsection