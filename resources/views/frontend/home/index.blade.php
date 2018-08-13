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
	    		<div class="col-sm-4">
	    			@include('frontend.home._news')
	            </div>  
	    		<div class="col-sm-4">
	    			@include('frontend.home._advisory')
	    		</div>
	    		<div class="col-sm-4">
	    			@include('frontend.home._events')
				</div>
    		</div>
    	</div>
    </div>
    <div class="wrapper2">
    	<div class="container" style="margin-top: 15px;">
    		<div class="row">
    			<div class="col-md-4">
	    			
	            </div>  
	    		<div class="col-md-4">
	    			
	    		</div>
	    		<div class="col-md-4">
	    			
				</div>
    		</div>
    	</div>
    </div>
@endsection