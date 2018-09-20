@extends('layouts.home')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/followus.css') }}">
<div id="banner">
    <div class="banner-top"></div>
</div>
<br>
<div class="container-fluid">    
    <div class="row">
        <div class="col-sm-8 col-md-8 col-lg-8"> 
            @include('frontend.home._mayormsg')      
            @include('frontend.tourism._touristspot')   
           
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="follow">
                @include('frontend.widgets._followus')
            </div>
            @include('frontend.events._events') 
            <div style="clear: both;">
                @include('frontend.widgets._services')
            </div> 
        </div>
    </div>
</div>
<div id="news">
    @include('frontend.home._news')
</div>
<!-- <div class="container-fluid">    
	<div class="row">
        <div class="col-sm-2 col-md-2 col-lg-2">
    		@include('frontend.home._left')
    	</div>
        <div class="col-sm-7 col-md-7 col-lg-7"> 
            <h6>Welcome to sogod lgu website!</h6>
	    <div class="large-7 medium-7 columns">
    		@include('frontend.home._mayormsg')
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3">
		 <div class="large-3 medium-3 columns"> -->
    	<!-- </div> -->
<!-- 	</div>
</div>
 -->
@endsection


