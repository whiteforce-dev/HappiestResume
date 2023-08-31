@extends('adminview.master')
@section('title','Admin | Add New Social Network')
@section('head')

@endsection
@section('content')
{{-- <link href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/monokai-sublime.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{url('public/admin/css/plugins/quill.bubble.min.css')}}" />
<link rel="stylesheet" href="{{url('public/admin/css/plugins/quill.snow.min.css')}}" /> --}}

<link href="https://cdn.quilljs.com/1.0.5/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.0.5/quill.min.js" type="text/javascript" defer></script>
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
            <div>Add New Slider</div>
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
                    action="{{ url('resume-slider') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="title">Title</label>
                            <input class="form-control" id="title" type="text" placeholder="Enter Title" name="title"
                                required="required" value="{{old('title')}}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="title">Upload Slider Image</label>
                            <input class="form-control" id="image" type="file" title="Upload Slider Image" name="image"
                                required="required" value="{{old('image')}}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>


                        <div class="col-md-4 mb-3">
                            <label for="is_active">Status</label>
                            <select type="text" name="is_active" id="is_active" class="form-control required">
                                <option value="1">Active</option>
                                <option value="0">In-Active</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="content">Temlate Content</label>
                            <textarea class="form-control" id="full-editor" type="text"
                                placeholder="Provide Resume Template (html format)" name="content"
                                required="required">{{old('content')}}</textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3 offset-4">
                            <button class="btn btn-success float-right btn-block" type="submit">
                                Save Network
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
<script>
    $(function(){
        var quill = new Quill('#full-editor', {
        modules: {
        toolbar: '#toolbar'
        k
        },
        theme: 'snow'
        });
    });
</script>
{{-- <script src="{{ url('public/admin/js/scripts/quill.script.min.js') }}" defer></script> --}}
@endsection
@section('scripts')
@stop