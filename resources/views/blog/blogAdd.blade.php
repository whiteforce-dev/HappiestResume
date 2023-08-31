@extends('master.master')
@section('title', 'Add Blog')
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
 {{-- <style>
 label{
     font-weight:bold;
     font-size: 14px;
    color: #101010;
 }
 </style>        --}}
{{-- <div class="breadcrumb">
    <h1 class="mr-2">How It Works</h1>
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
</div> --}}
{{-- <div class="separator-breadcrumb border-top"></div> --}}








<div class="col-lg-8 col-md-8 "style="margin-left:250px !important;margin-top:80px !important">
    <div class="card  border-primary">
        <!-- -->
        <div class="card-header bg-primary  text-white">
            <div>Add Item (Blogs)</div>
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
                    action="{{ url('blogStore') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                       
                        <div class="col-md-12 mb-3">
                            <label for="name">Title</label>
                            <input class="form-control" id="title" type="text" placeholder="Enter Title" name="title"
                                required="required" value="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                       
                        
                    </div>
                    <div class="form-group">
                    <label for="">Template Description</label>
                    <textarea  class='tiny-mce' id='editor1' name="tem_desc" required="required">{{isset($Details->tem_desc)?$Details->tem_desc:''}}</textarea>
                   
                </div>
                <div class="row">
                       
                       <div class="col-sm-6">
                           <label for="name">End Line</label>
                           <input class="form-control" id="end_line" type="text" placeholder="Enter Title" name="end_line"
                                value="">
                           <div class="valid-feedback">
                               Looks good!
                           </div>
                       </div>
                      
                       
                   
                    {{-- <div class="form-row"> --}}
                    <div class="col-sm-6 mb-3 ">
                            <label for="name">Upload Image</label>
                            <input type="file" name="image" id="image" class="form-control" value="" title="Please upload Image for the blog"
                                required="required">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="name">Author Name</label>
                            <input class="form-control" id="author" type="text" placeholder="Enter Author Name" name="author"
                                required="required" value="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="name">Publish Date</label>
                            <input class="form-control" id="publish_date" type="date" placeholder="Enter Publish Date" name="publish_date"
                                required="required" value="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="is_active">Blog For</label>
                            <select type="text" name="blogs_for" id="blogs_for" class="form-control required">
                                 <option value="">Select Any One</option>
                                <option value="happiest">Happiest Resume</option>
                                <option value="whiteforce">White Force</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="is_active">Status</label>
                            <select type="text" name="is_active" id="is_active" class="form-control required">
                                <option value="1">Active</option>
                                <option value="0">In-Active</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <button class="btn btn-primary float-right btn-block" type="submit">
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
@endsection