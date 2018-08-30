<div class="callout secondary">
	<h5>List of<small>Offices</small></h5>
	@include('frontend.widgets._sharethis')		
	<hr>
    <div class="w3-container">
         <table class="w3-table w3-striped table" style="overflow-x: auto;">
                <tr>
                  <th>Offices</th>
                  <th>Office Head</th>
                  <th>Telephone number</th>
                </tr>
               
                <tr>
                  <td><a target="_blank" href="{{ route('showbarangay',['id'=>$barangay->id, 'barangay' => $barangay->name]) }}"></a></td>
                  <td></td>
                  <td></td>
                </tr>

        </table>
        <div class="w3-right">
            {{ $barangays->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
</div>