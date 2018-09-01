@extends('layouts.home')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/followus.css') }}">
<div class="container-fluid">
    <nav aria-label="breadcrumb">
     <ol class="breadcrumb">
            <li class="breadcrumb-item">{{ $page }}</li>
            <li class="breadcrumb-item"><a href="{{ url()->current() }}">{{ $breadcrumb }}</a></li>
        </ol>
    </nav>
</div>
<br>

<div class="container-fluid">    
    <div class="row">
        <div class="col-sm-2 col-md-2 col-lg-2">
            @include('frontend.government._leftbrgy')
        </div>
        <div class="col-sm-7 col-md-7 col-lg-7"> 
            @include('frontend.government._centerbrgy')
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3">
            @include('frontend.government._rightbrgy')
        </div>
    </div>
</div>
<div id="news" style="margin-top:50px">
    @include('frontend.home._news')
</div>
@endsection