@extends('adminview.master')
@section('title','Admin | Edit Item of How It Works')
@section('head')
{{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
{{--<!-- Chartist -->--}}
{{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
{{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">How It Works</h1>
    <ul>
        <li>
            <a href="{{url('dashboard')}}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{url('admin/how_it_works')}}">
                How It works
            </a>
        </li>
        <li>
            <a href="{{url('admin/how_it_works/create')}}">
                Add New Item
            </a>
        </li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="col-lg-12 col-md-12 mt-4">
    <div class="card  border-primary">
        <!-- -->
        <div class="card-header bg-primary  text-white">
            <div>Edit Item (How It Works)</div>
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
                    action="{{ url('admin/how_it_works/'.$howItWork->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="name">Upload Icon</label>
                            @if(file_exists($howItWork->icon))
                            <input type="file" name="image" id="image" class="form-control" value="{{old('image')}}"
                                title="Please upload icon for the section">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <small style="color: #4caf50">Icon is already exists.</small>
                            @else
                            <input type="file" name="image" id="image" class="form-control" value="{{old('image')}}"
                                title="Please upload icon for the section" required="required">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <small style="color: red">Please Upload Icon.</small>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="name">Title</label>
                            <input class="form-control" id="title" type="text" placeholder="Enter Title" name="title"
                                required="required" value="{{isset($howItWork->title)?$howItWork->title:old('title')}}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="is_active">Status</label>
                            <select type="text" name="is_active" id="is_active" class="form-control required">
                                <option value="1" {{ $howItWork->is_active == '1'?'selected':'' }}>Active</option>
                                <option value="0" {{ $howItWork->is_active == '0'?'selected':'' }}>In-Active</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustomUsername">Description</label>
                            <textarea name="description" id="description" placeholder="Enter Description..." rows="3"
                                class="form-control required"
                                required="required">{{isset($howItWork->description)?$howItWork->description:old('description')}}</textarea>
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
        <!-- -->
        <!-- -->
    </div>
</div>
@endsection
@section('scripts')
@stop