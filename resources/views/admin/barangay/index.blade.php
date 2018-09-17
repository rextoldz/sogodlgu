@extends('layouts.admin')

@section('content')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor"></h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">{{$page}}</li>
        </ol>
    </div>
</div>
<div class="row">
    <!-- column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">List of Events</h4>
                <h6 class="card-subtitle text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Add Barangay
                    </button>
                </h6>
                <div class="table-responsive">
                    <table class="table" id="admin-events">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Barangay</th>
                                <th>Captain</th>
                                <th>Mobile number</th>
                                <th>Telephone number</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barangays as $barangay)
                            <tr>
                                <td>{{ $barangay->id }}</td>
                                <td>{{ $barangay->name }}</td>
                                <td>{{ $barangay->captain }}</td>
                                <td>{{ $barangay->cellnumber }}</td>
                                <td>{{ $barangay->telnumber }}</td>
                                <td>
                                    <a href="" class="btn btn-success display-block">Edit</a>
                                    <a href="" class="btn btn-success display-block">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <eventlists></eventlists>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('adminfiles/assets/plugins/jquery/jquery.min.js') }}"></script>@include('admin._modal._addbarangay')
@endsection