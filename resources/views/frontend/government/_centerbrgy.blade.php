<link rel="stylesheet" type="text/css" href="{{ asset('css/home/events.css') }}">
<div class="callout secondary">
	<h5>45<small>Barangays</small></h5>
	@include('frontend.widgets._sharethis')		
	<hr>
    <div class="w3-container">
         <table class="w3-table w3-striped" style="overflow-x: auto;">
                <tr>
                  <th>Name of Barangay</th>
                  <th>Barangay Captain</th>
                  <th>Contact number</th>
                </tr>
                @foreach ($barangays as $barangay)
                <tr>
                  <td><a target="_blank" href="{{ url('government/barangay/'.$barangay->id) }}">{{ $barangay->name }}</a></td>
                  <td>{{ $barangay->captain }}</td>
                  <td>{{ $barangay->cellnumber }}</td>
                </tr>
                @endforeach
        </table>
        <div class="w3-right">
            {{ $barangays->links('vendor.pagination.semantic-ui') }}
        </div>
    </div>
</div>