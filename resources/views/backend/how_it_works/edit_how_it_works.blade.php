@extends('backend.master.master')
@section('title','Edit How Its Works Item')
@section('content')
<script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
<script src="{{ url('assets').'/' }}js/validate.js"></script>
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>Edit Items (How Its Works)</h4>
                    <span>You can update an item of how it works section below: </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="{{ url('dashboard') }}"> <i class="feather icon-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('dashboard') }}">
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('admin/how_it_works') }}">
                            How It Works Items
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#!">
                            Edit Item
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="panel mybg">
    <div class="panel-heading">
        <h3 class="panel-title">Update Item
            {{-- <span class="panel-desc">Manage Your All Category </span> --}}
        </h3>
    </div>
    <div class="panel-body">

        <form action="{{ url('admin/how_it_works').'/'.$howItWork->id }}" method="post" id="myid" autocomplete="off"
            class="fv-form fv-form-bootstrap4" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="container" align="center">
                <div class="form-group row form-material">
                    {{-- <label class="col-xl-12 col-md-3 form-control-label">Category Name</label> --}}
                    <div class="col-xl-12 col-md-9">
                        <img style="height:150px ;width:auto;" src="{{ url('').'/'.$howItWork->icon }}" alt="">
                        <input type="hidden" name="oldImage" id="oldImage" value="{{$howItWork->icon}}">
                    </div>
                </div>
            </div>
            <div class="row row-lg">
                <div class="col-xl-6 form-horizontal">
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Associate Title</label>
                        <div class="col-xl-12 col-md-9">
                            <input type="text" class="form-control required" name="title" id="title"
                                value="{{ isset($howItWork->title)?$howItWork->title:'' }}" placeholder="Enter Title"
                                data-fv-field="github">
                        </div>
                    </div>

                    {{-- <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Designation</label>
                        <div class="col-xl-12 col-md-9">
                            <input type="text" name="designation" id="designation" value="{{$howItWork->designation}}"
                    placeholder="Designation of our associate" class="form-control required">
                </div>
            </div> --}}
            <div class="form-group form-material">
                <label class="col-xl-12 col-md-3 form-control-label">Icon</label>
                <div class="col-xl-12 col-md-9">
                    @if(file_exists($howItWork->icon))
                    <input type="file" name="image" id="image" class="form-control">
                    @else
                    <input type="file" name="image" id="image" class="form-control required">
                    @endif
                </div>
            </div>

            <div class="form-group form-material">
                <label class="col-xl-12 col-md-3 form-control-label">Status</label>
                <div class="col-xl-12 col-md-9">
                    <select type="text" name="is_active" id="is_active" class="form-control required">
                        <option value="1" {{ $howItWork->is_active == '1'?'selected':'' }}>Active</option>
                        <option value="0" {{ $howItWork->is_active == '0'?'selected':'' }}>In-Active</option>
                    </select>
                </div>
            </div>

    </div>
    <div class="col-xl-6 form-horizontal">
        <div class="form-group form-material">
            <label class="col-xl-12 col-md-3 form-control-label">Comments</label>
            <div class="col-xl-12 col-md-9">
                <textarea name="description" id="description" placeholder="Associate Comments Here..." rows="10"
                    class="form-control required">{{ isset($howItWork->description)?$howItWork->description:'' }}</textarea>
                {{-- <input type="text" name="comment" id="comment" value="{{$testimonial->comment}}"
                placeholder="Associate Comments Here..." class="form-control required"> --}}
            </div>
        </div>
    </div>

    <div class="form-group form-material col-xl-12 text-right padding-top-m">
        <button type="submit" class="btn btn-primary waves-effect waves-classic" id="validateButton1">Update
            Testimonial
        </button>
    </div>
</div>
</form>

</div>
</div>


@stop