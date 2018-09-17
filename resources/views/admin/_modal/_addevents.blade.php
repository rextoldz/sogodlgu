<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" id="addevent" action="{{ route('events.create') }}" aria-label="{{ __('Add Event') }}">
        <div class="modal-body">
                @csrf
                <div class="form-group">
                    <label for="title" class="col-form-label text-md-right">{{ __('Title') }}</label>

                    <div class="">
                        <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-form-label text-md-right">{{ __('Description') }}</label>

                    <div class="">
                        <textarea id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required></textarea>

                        @if ($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="venue" class="col-form-label text-md-right">{{ __('Venue') }}</label>

                    <div class="">
                        <input id="venue" type="text" class="form-control{{ $errors->has('venue') ? ' is-invalid' : '' }}" name="venue" value="{{ old('venue') }}" required autofocus>

                        @if ($errors->has('venue'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('venue') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="date" class="col-form-label text-md-right">{{ __('Starting Date & Time') }}</label>
                    <div class="">
                        <div class="demo-section k-content">
                            <input id="datetimepicker" class=" form-control{{ $errors->has('timepicker') ? ' is-invalid' : '' }}" name="timepicker" value="{{ old('timepicker') }}" title="datetimepicker"  required >

                            @if ($errors->has('timepicker'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('timepicker') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <label for="date" class="col-form-label text-md-right">{{ __('End Date & Time') }}</label>
                    <div class="">
                        <div class="demo-section k-content">
                            <input id="datetimepicker" class=" form-control{{ $errors->has('timepicker') ? ' is-invalid' : '' }}" name="timepicker" value="{{ old('timepicker') }}" title="datetimepicker"  required >

                            @if ($errors->has('timepicker'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('timepicker') }}</strong>
                                </span>
                            @endif
                        </div>
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
                    console.log(data);                                             
                }
            });
        });   
    });
</script>