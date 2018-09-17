<style type="text/css">
.invalid-feedback{font-size: 12px;color: red;font-weight: 500;font-style: italic;}
.is-invalid{border-bottom: red solid 1px;}
</style>
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor"></h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Settings</a></li>
        </ol>
    </div>
</div>
<div class="card">
    <div class="card-block">
    
    <form method="POST" action="{{ route('password.update', Auth::guard('admin')->user()->id) }}" aria-label="{{ __('Register') }}" class="form-horizontal form-material">
            @csrf
            @method('PUT')

            @if(session()->has('message'))
                <div class="alert alert-success">
                  {{ session()->get('message') }}
                </div>
            @endif
            <div class="form-group">
                <label class="col-md-12">Enter new password</label>
                <div class="col-md-12">
                    <input type="password" value="{{ old('password') }}" class="form-control form-control-line {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autofocus>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Enter again new password</label>
                <div class="col-md-12">
                    <input type="password" value="{{ old('password') }}" class="form-control form-control-line " name="password_confirmation" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Enter current password</label>
                <div class="col-md-12">
                    <input type="password" value="{{ old('password') }}" class="form-control form-control-line {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_current" required autofocus>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" value="submit2" class="btn btn-success">Update Profile</button>
                </div>
            </div>
        </form>
    </div>
</div>