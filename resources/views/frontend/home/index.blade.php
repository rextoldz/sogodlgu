@extends('layouts.home')

@section('content')
	<!-- <script type="text/javascript" src="{{ asset('js/date_time.js') }}"></script> -->
  <!-- 	<div class="cotntainer">
  		<div class="wrapper">
  			<div class="overlay-lgu-photo">
  				<div class="front-date">
			    	<span id="date_time"></span>
            		<script type="text/javascript">window.onload = date_time('date_time');</script>
			 	</div>
  			</div>
  		</div>
    </div> -->
   <div class="wrapper1">
    	<div class="container-fluid" style="margin-top: 15px;">
    		<div class="row">
    			<div class="col-sm-3 col-md-3 col-lg-3">
	    			@include('frontend.home._events')
	    		</div>
	    		<div class="col-sm-6 col-md-6 col-lg-6">
	    			@include('frontend.home._welcome')	    			
				</div>
				<div class="col-sm-3 col-md-3 col-lg-3">						@include('frontend.home._advisory')
					<br>
			    	@include('frontend.widgets._fbrss')
				</div>
		    </div>
    	</div>
    	<br>
    </div>	
    <!-- <div class="wrapper1-news">
	   	<div class="container" style="margin-top: 15px;">
	   		@include('frontend.home._news')
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
    </div> -->
    <div class="wrapper2">
		<div class="w3-container">
			<p class="sgd-title" style="color: gray">{{ _('OFFICIAL SEAL') }}</p>
		</div>
		<div class="row" style="margin: 0 auto">
			<div class="col-sm-4">
				<img style="width: 80px;height: 80px;" src="{{ asset('images/logo.png') }}">
			</div>
			<div class="col-sm-4">
				<img style="width: 80px;height: 80px;" src="{{ asset('images/logo.png') }}">
			</div>
			<div class="col-sm-4">
				<img style="width: 80px;height: 80px;" src="{{ asset('images/logo.png') }}">
			</div>
		</div>
	</div>
    <div class="wrapper3">
    	<div class="container" style="margin-top: 15px;">
    		<div class="row">
    			<div class="col-sm-4 col-md-4 col-lg-4">
	    			<div class="sgd-title">{{ _('PROGRAMS') }}</div>
	    			<br>
    				<div class="sgd-body">
    					<p>Scholarship program</p>
    				</div>
				</div>
    			<div class="col-sm-4 col-md-4 col-lg-4">
	    			<div class="sgd-title">{{ _('DOWNLOADS') }}</div>
	    			<br>
    				<div class="sgd-body">
    					<a href="">citizen's charter.pdf</a>
    				</div>
				</div>
    			<div class="col-sm-4 col-md-4 col-lg-4">
	    			<div class="sgd-title">{{ _('CONTACTS') }}</div>
    				<br>
    				<div class="sgd-body">
    					<p>LGU BUILDING</p>
    					<p> Telephone: (03) 123-456-7</p>
    					<p>Mobile no.: (63) 923-123-456-7</p>
    					<br>
    					<p>RHU</p>
    					<p> Telephone: (03) 123-456-7</p>
    					<p>Mobile no.: (63) 923-123-456-7</p>
    				</div>
				</div>
    		</div>
    	</div>
    </div>
@endsection