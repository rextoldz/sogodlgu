<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add barangay</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" id="addbarangay" action="{{ route('barangay.store') }}" aria-label="{{ __('Add barangay') }}">
        <div class="modal-body">
                @csrf
                <div class="form-group">
                    <label for="name" class="col-form-label text-md-right">{{ __('Name of Barangay') }}</label>

                    <div class="">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="captain" class="col-form-label text-md-right">{{ __('Captain') }}</label>

                    <div class="">
                        <input id="captain" type="text" class="form-control{{ $errors->has('captain') ? ' is-invalid' : '' }}" name="captain" value="{{ old('captain') }}" required>

                        @if ($errors->has('captain'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('captain') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="cellnumber" class="col-form-label text-md-right">{{ __('Mobile number') }}</label>

                    <div class="">
                        <input id="cellnumber" type="text" class="form-control{{ $errors->has('cellnumber') ? ' is-invalid' : '' }}" name="cellnumber" value="{{ old('cellnumber') }}" required autofocus>

                        @if ($errors->has('cellnumber'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('cellnumber') }}</strong>
                            </span>
                        @endif
                    </div>
                </div> 
                <div class="form-group">
                    <label for="telnumber" class="col-form-label text-md-right">{{ __('Tel. number') }}</label>

                    <div class="">
                        <input id="telnumber" type="text" class="form-control{{ $errors->has('telnumber') ? ' is-invalid' : '' }}" name="telnumber" value="{{ old('telnumber') }}" required autofocus>

                        @if ($errors->has('telnumber'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('telnumber') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            @if(session()->has('message'))
                <div class="alert alert-success">
                  {{ session()->get('message') }}
                </div>
            @endif
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#addevent').submit(function(e){
            e.preventDefault();
            $.ajax({
                method: 'POST',
                url: this.attr('action'),
                data: this.serialize(),
                success:function(data){
                    window.href = '{{ route("admin.barangay") }}';
                    console.log(data);                                             
                }
            })
        });   
    });
</script>