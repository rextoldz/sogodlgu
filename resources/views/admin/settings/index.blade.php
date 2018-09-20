@extends('layouts.admin')

@section('content')
<style type="text/css">
    .st-h6{padding: 22px 0px 18px 24px;background-color: beige;}
    #ul-css ul li {padding: 12px;border: 1px dashed #1e88e57a;width: 46%;list-style: none;}
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
<div class="row">
    <div class="col-lg-12 col-xlg-12 col-md-12">
        <div class="card" id="ul-css">
            <h5 class="st-h6">Account Settings</h5>
            <ul>
                <li><a href="{{ route('admin.settings.account') }}">Update Account</a></li>
                <li><a href="">Change Password</a></li>
                <li><a href="">Admin Role</a></li>
            </ul>
            <h5 class="st-h6">Administrator</h5>
            <ul>
                <li><a href="{{ route('admin.settings.account') }}">Admin Role</a></li>
                <li><a href="">Login Activity</a></li>
            </ul>
        </div>         
    </div>
</div>
@endsection