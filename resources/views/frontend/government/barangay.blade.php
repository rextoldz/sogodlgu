@extends('layouts.home')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/followus.css') }}">
<div id="banner">
    <img src="{{ asset('images/banner/barangay.jpg')}}" style="width: 100%">
</div>
<br>
<ul id="breadcrumb">
  <li><a href="#">{{ $page }}</a></li>
  <li><a href="{{ url()->current() }}">{{ $breadcrumb }}</a></li>
</ul>
<div class="container-fluid">    
    <div class="row">
        <div class="col-sm-8 col-md-8 col-lg-8"> 
            @include('frontend.government._centerbrgy')
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            @include('frontend.government._rightbrgy')
        </div>
</div>
<div id="news" style="margin-top:50px">
    @include('frontend.home._news')
</div>
@endsection