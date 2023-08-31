@extends('adminview.master')
@section('title','Admin | Edit Resume Templates')
@section('head')
{{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
{{--<!-- Chartist -->--}}
{{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
{{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            height: 500,
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            setup: function (editor) {
                editor.on('init', function () {
                     this.setContent(editor.value);
                });
            }
        });
        </script>
<div class="breadcrumb">
    <h1 class="mr-2">Edit Resume Templates</h1>
    <ul>
        <li>
        <a href="{{url('dashboard')}}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{url('blogMaster')}}">
                BLOGS
            </a>
        </li>
        <li>
        <a href="{{url('blog-Add')}}">
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
            <div>Edit Resume Templates</div>
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
                    action="{{ url('resumeTemplateUpdate') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                       
                        <div class="col-md-8 mb-3">
                            <label for="name">Title</label>
                            <input class="form-control" id="title" type="text" placeholder="Enter Title" name="title"
                                required="required" value="{{ $temp->title }}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="is_active">Status</label>
                            <select type="text" name="is_active" id="is_active" class="form-control required">
                                <option value="1" <?php if($temp->status == 1){ echo 'selected'; }?>>Active</option>
                                <option value="0" <?php if($temp->status == 0){echo 'selected'; }?>>In-Active</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                      
                        
                    </div>
                    <div class="form-group">
                    <label for="">Template Image</label>
                    <input class="form-control" id="temp_image" type="file" title="Upload Template Image" name="temp_image"
                                 value="{{ $temp->image }}">
                    <div class="valid-feedback">
                            Looks good!
                    </div>
                   </div>
                    <div class="form-group">
                    <label for="">Template Description</label>
                    <textarea  class='tiny-mce' id='editor1' name="tem_desc" required="required">{{ $temp->template }}</textarea>
                   
                </div>
                  <input type="hidden" name="temp_id" id="temp_id" value="{{ $temp->id }}">
                    <div class="form-row">
                        <div class="col-md-4 mb-3 offset-4">
                            <button class="btn btn-success float-right btn-block" type="submit">
                                Update Resume
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