@extends('adminview.master')
@section('title','Admin | Edit Benefit')
@section('head')
{{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
{{--<!-- Chartist -->--}}
{{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
{{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">Benefits</h1>
    <ul>
        <li>
            <a href="{{url('dashboard')}}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{url('benefits')}}">
                Benefits
            </a>
        </li>
        <li>
            <a href="{{url('benefits/create')}}">
                Add New Benefit
            </a>
        </li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="col-lg-12 col-md-12 mt-4">
    <div class="card  border-primary">
        <!-- -->
        <div class="card-header bg-primary  text-white">
            <div>Edit Benefit</div>
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
                    action="{{ url('benefits/'.$benefit->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="title">Title</label>
                            <input class="form-control" id="title" type="text" placeholder="Enter Title" name="title"
                                required="required" value="{{ isset($benefit->title)?$benefit->title:'' }}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="title">Icon Name</label>
                            <input class="form-control" id="icon" type="text" placeholder="Provide Icon Name"
                                name="icon" required="required" value="{{isset($benefit->icon)?$benefit->icon:''}}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <small>
                                <a href="{{url('https://cdn.materialdesignicons.com/4.5.95/')}}" style="color: red"
                                    target="_blank">
                                    Click here
                                </a>
                                to select icon & paste icon name here
                            </small>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="is_active">Status</label>
                            <select type="text" name="is_active" id="is_active" class="form-control required">
                                <option value="1" {{ $benefit->is_active == '1'?'selected':'' }}>
                                    Active
                                </option>
                                <option value="0" {{ $benefit->is_active == '0'?'selected':'' }}>
                                    In-Active
                                </option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="title">Description</label>
                            <textarea class="form-control" id="description" placeholder="Provide Short Description"
                                maxlength="255" name="description"
                                required="required">{!! $benefit->description !!}</textarea>
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