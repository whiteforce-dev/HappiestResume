@extends('adminview.master')
@section('title','Admin | Add Festival')
@section('head')
{{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
{{--<!-- Chartist -->--}}'
<!-- {{--<link rel="stylesheet" href={{url('public).'/'}}plugins/chartist/css/chartist.min.css">--}} -->
{{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">Add Festival</h1>
    <ul>
        <li>
            <a href="{{url('dashboard')}}">
                Dashboard
            </a>
        </li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="col-lg-12 col-md-12 mt-4">
    <div class="card  border-primary">
        <!-- -->
        <div class="card-header bg-primary  text-white">
            <div>Add Item </div>
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
                <form class="needs-validation" novalidate="novalidate" method="post" action="{{ url('eventadd') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="name">Add Festival</label>
                            <!-- <input class="form-control" type="text" placeholder="Ente state name" name="city_name"> -->
                            <!-- <select class="form-control form-select-lg mb-3" id="city_name" disabled>
                                <option value="" selected disabled>Select One</option>
                            </select> -->
                            <input class="form-control"  name="eventsname"  placeholder="name of events" type="text">
                            <br>
                            <input class="form-control"  name="description"   placeholder="enter description " type="text" >
                            <br> 
                            <input class="form-control"  name="phototype"   type="hidden"  value="fastival">
                           
                             @php
                            $showImage = $scholarship_logo ?? '';
                            // Please use this section to show your uploaded image in preview box and don't change vaiable
                            @endphp
                            @include('cropper.cropper')
                        
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3 offset-4">
                            <button class="btn btn-success float-right btn-block" type="submit">
                                Save Item
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>  
    </div>
</div>



@if(session()->has('Success'))
    <div class="alert alert-success">
        {{ session()->get('Success') }}
    </div>
@endif

@endsection
@section('scripts')
@stop