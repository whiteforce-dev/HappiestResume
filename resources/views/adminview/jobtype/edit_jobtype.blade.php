@extends('adminview.master')
@section('title','Admin | Edit Job Type')
@section('head')
    {{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
    {{--<!-- Chartist -->--}}
    {{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
    {{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
    <script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
    <script src="{{ url('assets').'/' }}js/validate.js"></script>
@endsection
@section('content')

    <div class="breadcrumb">
        <h1 class="mr-2">Edit Job</h1>
        <ul>
            <li>
                <a href="{{ URL::to('dashboard') }}">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ URL::to('jobtypes') }}">
                    Jobtypes
                </a>
            </li>
            {{--<li class="">--}}
            {{--<a href="{{ URL::to('jobs/create') }}">--}}
            {{--Create New Job--}}
            {{--</a>--}}
            {{--</li>--}}
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="col-lg-12 col-md-12 mt-4">
        <div class="card  border-primary">
            <!-- -->
            <div class="card-header bg-primary text-white">
                <div>Edit Job Type</div>
            </div>
            <div class="card-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="ul-widget5">
                    <form action="{{ url('jobtypes').'/'.$jobtype->id }}" method="post" id="myid" autocomplete="off"
                          class="needs-validation" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Job Type</label>
                                <input type="text" class="form-control required" name="type" id="type"
                                       value="{{$jobtype->type}}" placeholder="Enter Job Type"
                                       data-fv-field="github" required="required">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                {{--<div class="invalid-feedback">--}}
                                {{--Please choose a username.--}}
                                {{--</div>--}}
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <!-- -->
            <!-- -->
        </div>
    </div>
@endsection
@section('scripts')
@stop