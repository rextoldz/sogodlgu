@extends('layouts.admin')

@section('content')
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
            <li class="breadcrumb-item active">{{$page}}</li>
        </ol>
    </div>
</div>
<div class="card">
    <div class="card-block">
    
    <form method="POST" action="{{ route('profile.update', Auth::guard('admin')->user()->id) }}" aria-label="{{ __('Register') }}" class="form-horizontal form-material">
            @csrf
            @method('PUT')

            @if(session()->has('message'))
                <div class="alert alert-success">
                  {{ session()->get('message') }}
                </div>
            @endif

            <div class="form-group">
                <label class="col-md-12">Full Name</label>
                <div class="col-md-12">
                    <input type="text" value="{{ (old('fullname')) ? old('fullname') : Auth::guard('admin')->user()->name }}" placeholder="{{ Auth::guard('admin')->user()->name }}" name="fullname" class="form-control form-control-line {{ $errors->has('fullname') ? ' is-invalid' : '' }}" required autofocus>
                    @if ($errors->has('fullname'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('fullname') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="example-email" class="col-md-12">Email</label>
                <div class="col-md-12">
                    <input type="email" placeholder="{{ Auth::guard('admin')->user()->email }}" value="{{ (old('email')) ? old('email') : Auth::guard('admin')->user()->email }}" class="form-control form-control-line {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="example-email" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            
          <!--   <div class="form-group">
                <label for="example-email" class="col-md-12">Username</label>
                <div class="col-md-12">
                    <input type="text" placeholder="{{ Auth::guard('admin')->user()->username }}" value="{{ (old('username')) ? old('username') : Auth::guard('admin')->user()->username }}" class="form-control form-control-line {{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" required autofocus>
                     @if ($errors->has('username'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>
            </div> -->

            <div class="form-group">
                <label class="col-md-12">Enter current password to confirm changes</label>
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
                <div class="col-sm-12">
                    <input type="submit" value="Update profile" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection