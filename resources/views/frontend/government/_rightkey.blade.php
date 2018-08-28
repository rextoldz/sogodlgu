<link rel="stylesheet" type="text/css" href="{{ asset('css/home/advisory.css') }}">
<div class="follow">
	@include('frontend.widgets._followus')
</div>
<hr>
<div class="transparency">
	@include('frontend.widgets._transseal')
</div>
<hr>
<h6>Latest<small>Announcements</small></h6>
<div class="w3-container">
	<div class="panel panel-default">
		@include('frontend.widgets._announcement')
	</div>
</div>
</div>