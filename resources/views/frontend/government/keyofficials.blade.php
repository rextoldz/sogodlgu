@extends('layouts.home')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/followus.css') }}">
<div id="banner">
    <img src="{{ asset('images/banner/keyofficials.jpg')}}" style="width: 100%">
</div>
<br>
<ul id="breadcrumb">
  <li><a href="#">{{ $page }}</a></li>
  <li><a href="{{ route('keyofficials') }}">{{ $breadcrumb }}</a></li>
</ul>
<br>
<div class="container-fluid">    
    <div class="row">
        <div class="col-sm-8 col-md-8 col-lg-8"> 
            @include('frontend.government._leftkey')
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
        <!-- <div class="large-3 medium-3 columns"> -->
            @include('frontend.government._rightkey')
        </div>
    </div>
</div>
<div id="news" style="margin-top:50px">
    @include('frontend.home._news')
</div>
@endsection