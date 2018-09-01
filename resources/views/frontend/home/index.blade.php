@extends('layouts.home')

@section('content')
<<<<<<< HEAD
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
=======
	<link rel="stylesheet" type="text/css" href="{{ asset('css/followus.css') }}">
<br>
<div class="container-fluid">    
	<div class="row">
        <div class="col-sm-2 col-md-2 col-lg-2">
    		@include('frontend.home._left')
>>>>>>> gwt
    	</div>
        <div class="col-sm-7 col-md-7 col-lg-7"> 
            <h6>Welcome to sogod lgu website!</h6>
	    <!-- <div class="large-7 medium-7 columns"> -->
    		@include('frontend.home._center')
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3">
		<!-- <div class="large-3 medium-3 columns"> -->
    		@include('frontend.home._right')
    	</div>
	</div>
</div>
<div id="news" style="margin-top:50px">
    @include('frontend.home._news')
</div>
@endsection