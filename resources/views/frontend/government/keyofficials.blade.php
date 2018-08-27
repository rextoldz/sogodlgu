@extends('layouts.home')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/followus.css') }}">
<br>
<div class="container-fluid sgd-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">{{ $page }}</li>
            <li class="breadcrumb-item"><a href="{{ route('keyofficials') }}">{{ $breadcrumb }}</a></li>
        </ol>
    </nav>
</div>
<br>
<div class="container-fluid">    
    <div class="row">
        <div class="col-sm-9 col-md-9 col-lg-9"> 
            @include('frontend.government._leftkey')
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3">
        <!-- <div class="large-3 medium-3 columns"> -->
            @include('frontend.government._rightkey')
        </div>
    </div>
</div>
<div id="news" style="margin-top:50px">
    @include('frontend.home._news')
</div>
@endsection