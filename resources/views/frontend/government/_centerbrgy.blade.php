<link rel="stylesheet" type="text/css" href="{{ asset('css/home/barangay.css') }}">
<div class="callout secondary">
	<!-- <h5>45<small>Barangays</small></h5> -->
	@include('frontend.widgets._sharethis')		
	<hr>
    <div class="w3-container">
         <table class="w3-table w3-striped table" style="overflow-x: auto;">
                <tr>
                  <th>Name of Barangay</th>
                  <th>Barangay Captain</th>
                  <th>Contact number</th>
                </tr>
                @foreach ($barangays as $barangay)
                <tr style="text-transform: capitalize;">
                  <td><a href="{{ route('showbarangay',['id'=>$barangay->id, 'barangay' => $barangay->name]) }}">{{ $barangay->name }}</a></td>
                  <td>{{ $barangay->captain }}</td>
                  <td>{{ $barangay->cellnumber }}</td>
                </tr>
                @endforeach
        </table>
        <div class="w3-right">
            {{ $barangays->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
</div>