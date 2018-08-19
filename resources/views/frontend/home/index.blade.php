@extends('layouts.home')

@section('content')
	<script type="text/javascript" src="{{ asset('js/date_time.js') }}"></script>
  	<div class="cotntainer">
  		<div class="wrapper">
  			<div class="overlay-lgu-photo">
  				<div class="front-date">
			    	<span id="date_time"></span>
            		<script type="text/javascript">window.onload = date_time('date_time');</script>
			 	</div>
  			</div>
  			<div class="lgu-photo"></div>
  		</div>
    </div>
  
     <div class="wrapper1">
    	<div class="container-fluid" style="margin-top: 15px;">
    		<div class="row">
    			<div class="col-sm-4 col-md-4 col-lg-4">
	    			@include('frontend.home._advisory')
	    		</div>
	    		<div class="col-sm-4 col-md-4 col-lg-4" style="border-left: rgba(52, 144, 220, 0.25) solid 1px;border-right:rgba(52, 144, 220, 0.25) solid 1px;">
	    			@include('frontend.home._events')
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4">
	    			@include('frontend.home._services')
				</div>
		    </div>
    	</div>
    	<br>
    	<div class="wrapper1-news">
	    	<div class="container" style="margin-top: 15px;">
	    		@include('frontend.home._news')
	    	</div>
    	</div>
    </div>
    <div class="wrapper2">
    	<div class="container-fluid w3-center">
    		<h2>Featured Tourist Spots</h2>
    	</div>
    	<div class="container-fluid" style="margin-top: 15px;">
    		<div class="row">
    			<div class="col-sm-12 col-md-12 col-lg-12">
	    			@include('frontend.home._tourist')	
				</div>
    		</div>
    	</div>
    </div>
    <div class="wrapper1" style="background-color: #6c757dba;color: white;">
    	<div class="container" style="margin-top: 15px;">
    		<div class="row">
    			<div class="col-sm-4 col-md-4 col-lg-4">
	    				<h4>{{ _('Site Map') }}</h4>
	    				<div class="sgd-title"><a href="">HOME</a></div>
	    				<div style="padding-left: 12px">
	    					<div class="sgd-title"><a href="">Advisories</a></div>
	    					<div class="sgd-title"><a href="">Events</a></div>
	    					<div class="sgd-title"><a href="">Services</a></div>
	    					<div class="sgd-title"><a href="">News</a></div>
	    				</div>
	    				<div class="sgd-title" style="color: #e9ecef8f;">{{ _('GOVERNMENT') }}</div>
	    				<div style="padding-left: 12px">
	    					<div class="sgd-title"><a href="">Key Officials</a></div>
	    					<div class="sgd-title"><a href="">Offices</a></div>
	    					<div class="sgd-title"><a href="">Barangay</a></div>
	    				</div>
	    				<div class="sgd-title"><a href="">TRANSPARENCY</a></div>
	    				<div class="sgd-title"><a href="">TOURISM</a></div>
	    				<div class="sgd-title">
	    					<a href="">ABOUT</a>
	    				</div>
				</div>
    			<div class="col-sm-4 col-md-4 col-lg-4">
    				<h4>{{ _('Contact') }}</h4>
    				<br>
    				<div class="sgd-title">
    					<h5>LGU BUILDING</h5>
    					<h5> Telephone: (03) 123-456-7</h5>
    					<h5>Mobile no.: (63) 923-123-456-7</h5>
    					<br>
    					<h5>RHU</h5>
    					<h5> Telephone: (03) 123-456-7</h5>
    					<h5>Mobile no.: (63) 923-123-456-7</h5>
    				</div>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<h4>{{ _('Official Seal') }}</h4>
					<div style="margin-top: 40px">
						<div class="row  w3-center">
		    				<img style="width: 100px;height: 100px;" src="{{ asset('images/logo.png') }}">
		    				<img style="width: 100px;height: 100px;" src="{{ asset('images/logo.png') }}">
		    				<img style="width: 100px;height: 100px;" src="{{ asset('images/logo.png') }}">
		    				<!-- <img style="width: 100px;height: 100px;" src="{{ asset('images/logo2.jpg') }}"> -->
		    			</div>
	    			</div>
				</div>
    		</div>
    	</div>
    </div>
@endsection