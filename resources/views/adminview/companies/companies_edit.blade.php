@extends('adminview.master')
@section('title','Admin | Companies')
@section('head')
{{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
{{--<!-- Chartist -->--}}
{{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
{{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')
{{--<script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>--}}
{{--<script src="{{ url('assets').'/' }}js/validate.js"></script>--}}
<div class="breadcrumb">
    <h1 class="mr-2">Edit Company</h1>
    <ul>
        <li>
            <a href="{{ URL::to('dashboard') }}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ URL::to('companies/#companies_table') }}">
                Companies
            </a>
        </li>
        <li class="">
            <a href="{{ URL::to('companies') }}">
                Create New Company
            </a>
        </li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>
<div class="col-lg-12 col-md-12 mt-4">
    <div class="card  border-primary">
        <!-- -->
        <div class="card-header bg-primary  text-white">
            <div>Edit Company</div>
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
                <form action="{{ url('companies').'/'.$company->id }}" method="post" class="needs-validation"
                    novalidate="novalidate" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Company Name</label>
                            <input class="form-control" id="name" type="text" placeholder="Enter Company Name"
                                name="name" required="required" value="{{ isset($company->name)?$company->name:'' }}">
                            <div class="valid-feedback">
                                Looks good!

                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="email">Email ID</label>
                            <input class="form-control" id="email" type="text" placeholder="Enter Company Email Address"
                                name="email" required="required"
                                value="{{ isset($company->email)?$company->email:'' }}">
                            <div class="valid-feedback">
                                Looks good!

                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="contact">Company Start Year</label>
                            <input class="form-control" id="start_year" type="text"
                                placeholder="Enter Company Start Year" name="start_year"
                                value="{{$company->start_year}}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="contact">Company Contact</label>
                            <input class="form-control" id="contact" type="text" placeholder="Enter Company Contact"
                                name="contact" required="required"
                                value="{{ isset($company->contact)?$company->contact:'' }}">
                            <div class="valid-feedback">
                                Looks good!

                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="is_active">Status</label>
                            <select type="text" name="is_active" id="is_active" class="form-control required">
                                <option {{ $company->is_active == '1'?'selected':'' }} value="1">Active</option>
                                <option {{ $company->is_active == '0'?'selected':'' }} value="0">In-Active</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!

                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="contact">Company Website</label>
                            <input class="form-control" id="website" type="text" placeholder="Enter Company Website"
                                name="website" value="{{$company->website}}">
                            <div class="valid-feedback">
                                Looks good!

                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="image">Upload Company Logo</label>
                            <input class="form-control" id="image" type="file" title="Upload Company Logo" name="image">
                            <div class="valid-feedback">
                                Looks good!
                            </div>

                            @if(file_exists($company->image))
                            <small>Already exists</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustomUsername">About Company</label>

                            <textarea name="about" id="about" placeholder="Enter About Company..." rows="6"
                                class="form-control required" required="required">{{$company->about}}</textarea>
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