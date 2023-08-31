@extends('adminview.master')
@section('title','Admin | Edit Resume Slider')
@section('head')
{{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
{{--<!-- Chartist -->--}}
{{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
{{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">Resume Slider</h1>
    <ul>
        <li>
            <a href="{{url('dashboard')}}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{url('resume-slider')}}">
                Resume Slider
            </a>
        </li>
        <li>
            <a href="{{url('resume-slider/create')}}">
                Add New Slider
            </a>
        </li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="col-lg-12 col-md-12 mt-4">
    <div class="card  border-primary">
        <!-- -->
        <div class="card-header bg-primary  text-white">
            <div>Edit Resume Slider & Content</div>
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
                <form class="needs-validation" novalidate="novalidate" method="post" id="myid"
                    action="{{ url('resume-slider/'.$data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="title">Title</label>
                            <input class="form-control" id="title" type="text" placeholder="Enter Title" name="title"
                                required="required" value="{{ isset($data->title)?$data->title:'' }}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="title">Upload Slider Image</label>
                            @if(file_exists($data->image))
                            <input class="form-control" id="image" type="file" title="Upload Slider Image" name="image"
                                value="{{old('image')}}">
                            <small style="color: green">Image exists in our records</small>
                            @else
                            <input class="form-control" id="image" type="file" title="Upload Slider Image" name="image"
                                required="required" value="{{old('image')}}">
                            <small style="color: red">Please upload slider image</small>
                            @endif
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>


                        <div class="col-md-4 mb-3">
                            <label for="is_active">Status</label>
                            <select type="text" name="is_active" id="is_active" class="form-control required">
                                <option value="1" {{ $data->is_active == '1'?'selected':'' }}>Active</option>
                                <option value="0" {{ $data->is_active == '0'?'selected':'' }}>In-Active
                                </option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="content">Temlate Content</label>
                            <textarea class="form-control" id="content"
                                placeholder="Provide Resume Template (html format)" name="content"
                                required="required">{!! $data->content !!}</textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>


            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3 offset-4">
                    <button class="btn btn-success float-right btn-block" type="submit">
                        Update Item
                    </button>
                </div>
            </div>
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