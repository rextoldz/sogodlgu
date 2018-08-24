@extends('layouts.home')

@section('content')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/followus.css') }}">
<div class="w3-container">    
	<div class="row">
        <div class="col-sm-2 col-md-2 col-lg-2">
    		@include('frontend.home._left')
    	</div>
        <div class="col-sm-7 col-md-7 col-lg-7">
	    <!-- <div class="large-7 medium-7 columns"> -->
    		@include('frontend.home._center')
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3">
		<!-- <div class="large-3 medium-3 columns"> -->
    		@include('frontend.home._right')
    	</div>
	</div>
</div>
@endsection