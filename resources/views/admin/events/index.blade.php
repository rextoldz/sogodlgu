@extends('layouts.admin')

@section('content')
<!--     <link rel="stylesheet" href="{{ asset('adminfiles/kendo//styles/kendo.common.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminfiles/kendo/styles/kendo.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminfiles/kendo/styles/kendo.default.mobile.min.css') }}" />

    <script src="{{ asset('adminfiles/kendo/js/jquery.min.js') }}"></script>
    <script src="{{ asset('adminfiles/kendo/js/kendo.all.min.js') }}"></script>
 -->
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
    <div class="col-lg-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">List of Events</h4>
                <h6 class="card-subtitle text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                      Add event
                    </button>
                </h6>
                <div class="table-responsive">
                    <table class="table" id="admin-events">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Descriptions</th>
                                <th>Venue</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                            <tr>
                                <td>{{ $event->id }}</td>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->descriptions }}</td>
                                <td>{{ $event->venue }}</td>
                                <td>{{ $event->startingdate }}</td>
                                <td>{{ $event->enddate }}</td>
                                <td><a href="" class="btn btn-success">Edit</a></td>
                                <td><a href="" class="btn btn-danger">Delete</a></td>
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
@include('admin._modal._addevents')
<script src="{{ asset('adminfiles/assets/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // create DateTimePicker from input HTML element
        $("#datetimepicker").kendoDateTimePicker({
            value: new Date(),
            dateInput: true
        });
    });
</script>
@endsection