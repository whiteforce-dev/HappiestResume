@extends('adminview.master')
@section('title','Admin | Add Testimonial')
@section('head')
{{--    <script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>--}}
{{--<script src="{{ url('assets').'/' }}js/validate.js"></script>--}}
@endsection
@section('content')

<div class="breadcrumb">
    <h1 class="mr-2">Create New Testimonial</h1>
    <ul>
        <li>
            <a href="{{ URL::to('dashboard') }}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ URL::to('testimonials') }}">
                Testimonials
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
        <div class="card-header bg-success  text-white">
            <div>Create New Job</div>
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
                <form action="{{ url('testimonials') }}" method="post" id="myid" autocomplete="off"
                    class="needs-validation" novalidate="novalidate" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustomUsername">Associate Name</label>
                            <input type="text" class="form-control required" name="name" id="name"
                                placeholder="Enter Associate Name" data-fv-field="github" required="required">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustomUsername">Designation</label>
                            <input type="text" class="form-control required" name="designation" id="designation"
                                placeholder="Designation of our associate" data-fv-field="github" required="required">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustomUsername">Status</label>
                            <select type="text" name="is_active" id="is_active" class="form-control required" required>
                                <option value="1">Active</option>
                                <option value="0">In-Active</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustomUsername">Profile Image</label>
                            <input type="file" name="image" id="image" class="form-control required" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustomUsername">Comment</label>
                            <textarea name="comment" id="comment" placeholder="Associate Comments Here..." rows="5"  required
                                class="form-control required"></textarea>
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
@stop