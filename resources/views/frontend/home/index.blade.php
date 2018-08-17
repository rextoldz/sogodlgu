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
    	<div class="container" style="margin-top: 15px;">
    		<div class="row">
    			<div class="col-sm-6 col-md-6 col-lg-6">
	    			@include('frontend.home._advisory')
	    		</div>
	    		<div class="col-sm-6 col-md-6 col-lg-6">
	    			@include('frontend.home._events')
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
    	<div class="container" style="margin-top: 15px;">
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
				</div>
    			<div class="col-sm-4 col-md-4 col-lg-4">
    				<h4>{{ _('Services') }}</h4>
    				<h5>
    					<ul>
    						<li><a style="color: rgba(108, 178, 235, 0.73);font-family: initial;" href="">Libreng Bakuna</a></li>
    						<li><a style="color: rgba(108, 178, 235, 0.73);font-family: initial;" href="">Libreng Bakuna</a></li>
    						<li><a style="color: rgba(108, 178, 235, 0.73);font-family: initial;" href="">Libreng Bakuna</a></li>
    						<li><a style="color: rgba(108, 178, 235, 0.73);font-family: initial;" href="">Libreng Bakuna</a></li>
    						<li><a style="color: rgba(108, 178, 235, 0.73);font-family: initial;" href="">Libreng Bakuna</a></li>
    						<li><a style="color: rgba(108, 178, 235, 0.73);font-family: initial;" href="">Libreng Bakuna</a></li>
    						<li><a style="color: rgba(108, 178, 235, 0.73);font-family: initial;" href="">Libreng Bakuna</a></li>
    						<li><a style="color: rgba(108, 178, 235, 0.73);font-family: initial;" href="">Libreng Bakuna</a></li>
    					</ul>
    				</h5>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<h4>{{ _('Official LGU Logo') }}</h4>
					<div style="margin-top: 40px">
						<div class="row  w3-center">
		    				<img style="width: 100px;height: 100px;" src="{{ asset('images/logo.png') }}">
		    				<img style="width: 100px;height: 100px;" src="{{ asset('images/logo2.jpg') }}">
		    			</div>
	    			</div>
				</div>
    		</div>
    	</div>
    </div>
@endsection