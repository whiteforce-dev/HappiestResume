@extends('adminview.master')
@section('title','Admin | Edit Social Networks')
@section('head')
{{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
{{--<!-- Chartist -->--}}
{{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
{{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">Counts</h1>
    <ul>
        <li>
            <a href="{{url('dashboard')}}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{url('admin/social_networks')}}">
                Social Networks
            </a>
        </li>
        <li>
            <a href="{{url('admin/social_networks/create')}}">
                Add New Network
            </a>
        </li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="col-lg-12 col-md-12 mt-4">
    <div class="card  border-primary">
        <!-- -->
        <div class="card-header bg-primary  text-white">
            <div>Edit Link (Social Networks)</div>
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
                    action="{{ url('admin/social_networks/'.$socialNetwork->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="name">Name</label>
                            <input class="form-control" id="name" type="text" placeholder="Enter Name" name="name"
                                required="required"
                                value="{{isset($socialNetwork->name)?$socialNetwork->name:old('name')}}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="name">Link</label>
                            <input class="form-control" id="link" type="text" placeholder="Enter Link" name="link"
                                required="required"
                                value="{{isset($socialNetwork->link)?$socialNetwork->link:old('link')}}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="is_active">Status</label>
                            <select type="text" name="is_active" id="is_active" class="form-control required">
                                <option value="1" {{ $socialNetwork->is_active == '1'?'selected':'' }}>Active</option>
                                <option value="0" {{ $socialNetwork->is_active == '0'?'selected':'' }}>In-Active
                                </option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
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